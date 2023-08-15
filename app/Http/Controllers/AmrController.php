<?php

namespace App\Http\Controllers;

use App\Models\Amr;
use App\Models\User;
use App\Exports\AmrExport;
use App\Imports\AmrImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;

class AmrController extends Controller
{
    public function index()
    {
        $amr = Amr::get();

        return view('amr.index', [
            'amr' => $amr
        ]);
    }


    public function showHistory()
    {
        $historyAmr = Amr::where('status', 'Selesai')->get();

        return view('history.history_amr', compact('historyAmr'));
    }



    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new AmrExport, 'Amr.xlsx');
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function import()
    {
        $user = Auth::user(); // Ambil user yang sedang login
        $user_name = $user->name; // Ambil 'name' dari user yang sedang login
        $user_id = User::where('name', $user_name)->value('id'); // Cari 'id' berdasarkan 'name' dari user

        if (!is_int($user_id)) {
            // Tampilkan pesan atau lakukan tindakan yang sesuai jika 'user_id' tidak valid
            // Contoh: kembalikan pesan error atau alihkan pengguna ke halaman yang sesuai
            return redirect()->route('home')->with('error', 'Invalid user_id.');
        }
        Excel::import(new AmrImport($user_id), request()->file('file'), null, \Maatwebsite\Excel\Excel::XLSX, [
            'useHeadingRow' => false, // Ignore the first row (header) when importing
        ]);

        return back();
    }

    public function generatePdf($id)
    {
        $amr = Amr::find($id);

        if (!$amr) {
            return redirect()->back()->with('error', 'Data not found.');
        } else {
            // Proses penghasilan PDF dengan data $amr
            // Buat instansi dari kelas PDF

            $pdf = app('dompdf.wrapper');

            // Muat tampilan ke dalam PDF
            $pdf->loadView('pdf.amr_template', ['amr' => $amr]);

            // Atur nama file PDF yang akan dihasilkan
            $filename = 'amr_' . $amr->id . '.pdf';

            // Stream (tampilkan) PDF di browser
            return $pdf->stream($filename);
        }
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'new_status' => 'required|in:Selesai,Tunda,Belum',
        ]);

        $amr = Amr::findOrFail($id);
        $amr->status = $request->input('new_status');
        $amr->save();

        return redirect()->back()->with('success', 'Status berhasil diperbarui.');
    }
}

// $path1 = $request->file('file')->store('temp');
        // $path = storage_path('app') . '/' . $path1;
        // Excel::import(new AmrImport, $path);

        // return back();
