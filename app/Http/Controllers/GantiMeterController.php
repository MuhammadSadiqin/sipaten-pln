<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\GantiMeter;
use Illuminate\Http\Request;
use App\Exports\GantiMeterExport;
use App\Imports\GantiMeterImport;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Requests\GantiMeterRequest;

class GantiMeterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $gantimeter = GantiMeter::get();

        return view('gantimeter.index', [
            'gantimeter' => $gantimeter
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

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
        Excel::import(new GantiMeterImport($user_id), request()->file('file'), null, \Maatwebsite\Excel\Excel::XLSX, [
            'useHeadingRow' => false, // Ignore the first row (header) when importing
        ]);

        return back();
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function export()
    {
        return Excel::download(new GantiMeterExport, 'Ganti Meter.xlsx');
    }

    public function generatePdf($id)
    {
        $gantimeter = GantiMeter::find($id);

        if (!$gantimeter) {
            return redirect()->back()->with('error', 'Data not found.');
        } else {
            // Proses penghasilan PDF dengan data $amr
            // Buat instansi dari kelas PDF

            $pdf = app('dompdf.wrapper');

            // Muat tampilan ke dalam PDF
            $pdf->loadView('pdf.gantimeter_template', ['gantimeter' => $gantimeter]);

            // Atur nama file PDF yang akan dihasilkan
            $filename = 'gantimeter_' . $gantimeter->id . '.pdf';

            // Stream (tampilkan) PDF di browser
            return $pdf->stream($filename);
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(GantiMeterRequest $request, GantiMeter $gantimeter)
    {
        $data = $request->all();

        GantiMeter::create($data);

        return redirect()->route('gantimeter.index');
    }

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
    public function edit(GantiMeter $gantimeter)
    {
        return view('gantimeter.edit', [
            'item' => $gantimeter
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(GantiMeterRequest $request, GantiMeter $gantiMeter)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(GantiMeter $gantimeter)
    {
        $gantimeter->delete();

        return back();
    }

    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'new_status' => 'required|in:Selesai,Tunda,Belum',
        ]);

        $gantimeter = GantiMeter::findOrFail($id);
        $gantimeter->status = $request->input('new_status');
        $gantimeter->save();

        return redirect()->back()->with('success', 'Status berhasil diperbarui.');
    }
}
