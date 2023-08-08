<?php

namespace App\Http\Controllers;

use App\Models\Amr;
use App\Models\User;
use App\Exports\AmrExport;
use App\Imports\AmrImport;
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
}

// $path1 = $request->file('file')->store('temp');
        // $path = storage_path('app') . '/' . $path1;
        // Excel::import(new AmrImport, $path);

        // return back();
