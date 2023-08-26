<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\TigaPhasa;
use Illuminate\Http\Request;
use App\Exports\TigaPhasaExport;
use App\Imports\TigaPhasaImport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class TigaPhasaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tigaphasa = TigaPhasa::get();

        return view('tigaphasa.index', [
            'tigaphasa' => $tigaphasa
        ]);
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new TigaPhasaExport, 'Tiga Phasa.xlsx');
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
        Excel::import(new TigaPhasaImport($user_id), request()->file('file'), null, \Maatwebsite\Excel\Excel::XLSX, [
            'useHeadingRow' => false, // Ignore the first row (header) when importing
        ]);

        return back();
    }

    public function generatePdf($id)
    {
        $tigaphasa = TigaPhasa::find($id);

        if (!$tigaphasa) {
            return redirect()->back()->with('error', 'Data not found.');
        } else {
            // Proses penghasilan PDF dengan data $amr
            // Buat instansi dari kelas PDF

            $pdf = app('dompdf.wrapper');

            // Muat tampilan ke dalam PDF
            $pdf->loadView('pdf.tigaphasa_template', ['tigaphasa' => $tigaphasa]);

            // Atur nama file PDF yang akan dihasilkan
            $filename = 'tigaphasa_' . $tigaphasa->id . '.pdf';

            // Stream (tampilkan) PDF di browser
            return $pdf->stream($filename);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(UserRequest $request, User $user)
    // {
    //     $data = $request->all();

    //     $data['profile_photo_path'] = $request->file('profile_photo_path')->store('assets/user', 'public');

    //     User::create($data);

    //     return redirect()->route('users.index');
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(TigaPhasa $tigaphasa)
    {
        return view('tigaphasa.edit', [
            'item' => $tigaphasa
        ]);
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
    public function destroy(TigaPhasa $tigaphasa)
    {
        $tigaphasa->delete();

        return redirect()->route('tigaphasa.index');
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'new_status' => 'required|in:Selesai,Tunda,Belum',
        ]);

        $tigaphasa = TigaPhasa::findOrFail($id);
        $tigaphasa->status = $request->input('new_status');
        $tigaphasa->save();

        return redirect()->back()->with('success', 'Status berhasil diperbarui.');
    }

    // show detail
    public function showDetail($id)
    {
        $tigaphasa = TigaPhasa::find($id); // Ganti dengan model dan logika Anda
        return view('detail.tigaphasa_detail', compact('tigaphasa'));
    }

    // update 
    public function update(Request $request, $id)
    {
        $tigaphasa = tigaphasa::findOrFail($id);

        // Update the LBKB data with the new values from the form
        $tigaphasa->status = $request->input('status');
        $tigaphasa->petugas = $request->input('petugas');
        $tigaphasa->alasan_tunda = $request->input('alasan_tunda');
        $tigaphasa->ket_tunda = $request->input('ket_tunda');
        $tigaphasa->tgl_tl = $request->input('tgl_tl');

        // Add more fields to update as needed

        $tigaphasa->save();

        // return redirect()->route('detail.lbkb_detail')->with('success', 'LBKB updated successfully');
        return redirect()->back()->with('success', 'Status berhasil diperbarui.');
    }
}
