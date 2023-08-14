<?php

namespace App\Http\Controllers;


use App\Models\Lbkb;
use App\Models\User;
use App\Exports\LbkbExport;
use App\Imports\LbkbImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;


class LbkbController extends Controller
{

    public function index()
    {
        $lbkb = Lbkb::get();

        return view('lbkb.index', [
            'lbkb' => $lbkb
        ]);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new LbkbExport, 'Lbkb.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import(Request $request)
    {
        $user = Auth::user(); // Ambil user yang sedang login
        $user_name = $user->name; // Ambil 'name' dari user yang sedang login
        $user_id = User::where('name', $user_name)->value('id'); // Cari 'id' berdasarkan 'name' dari user

        if (!is_int($user_id)) {
            // Tampilkan pesan atau lakukan tindakan yang sesuai jika 'user_id' tidak valid
            // Contoh: kembalikan pesan error atau alihkan pengguna ke halaman yang sesuai
            return redirect()->route('home')->with('error', 'Invalid user_id.');
        }
        Excel::import(new LbkbImport($user_id), request()->file('file'), null, \Maatwebsite\Excel\Excel::XLSX, [
            'useHeadingRow' => false, // Ignore the first row (header) when importing
        ]);

        return back();
    }

    public function generatePdf($id)
    {
        $lbkb = Lbkb::find($id);

        if (!$lbkb) {
            return redirect()->back()->with('error', 'Data not found.');
        } else {
            // Proses penghasilan PDF dengan data $amr
            // Buat instansi dari kelas PDF

            $pdf = app('dompdf.wrapper');

            // Muat tampilan ke dalam PDF
            $pdf->loadView('pdf.lbkb_template', ['lbkb' => $lbkb]);

            // Atur nama file PDF yang akan dihasilkan
            $filename = 'lbkb_' . $lbkb->id . '.pdf';

            // Stream (tampilkan) PDF di browser
            return $pdf->stream($filename);
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lbkb $lbkb)
    {
        return view('lbkb.edit', [
            'item' => $lbkb
        ]);
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'new_status' => 'required|in:Selesai,Tunda,Belum',
        ]);

        $lbkb = Lbkb::findOrFail($id);
        $lbkb->status = $request->input('new_status');
        $lbkb->save();

        return redirect()->back()->with('success', 'Status berhasil diperbarui.');
    }
}
/**
 * Update the specified resource in storage.
 */
// public function update(UserRequest $request, User $user)
// {
//     $data = $request->all();

//     if ($request->file('profile_picture_path')) {
//         $data['profile_photo_path'] = $request->file('profile_photo_path')->store('assets/user', 'public');
//     }

//     $user->update($data);

//     return redirect()->route('users.index');
// }

/**
 * Remove the specified resource from storage.
 */
    // public function destroy(Lbkb $lbkb)
    // {
    //     $lbkb->delete();

    //     return redirect()->route('lbkb.index');
