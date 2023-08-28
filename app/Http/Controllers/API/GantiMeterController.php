<?php

namespace App\Http\Controllers\API;

use App\Models\GantiMeter;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class GantiMeterController extends Controller
{
    public function all(Request $request)
    {
        $limit = $request->input('limit', 100000000);

        $gantiMeters = GantiMeter::paginate($limit);

        return ResponseFormatter::success(
            $gantiMeters,
            'Data GantiMeter berhasil diambil'
        );
    }

    public function getById($id)
    {
        $gantiMeter = GantiMeter::find($id);

        if ($gantiMeter) {
            return ResponseFormatter::success(
                $gantiMeter,
                'Data GantiMeter berhasil ditemukan'
            );
        } else {
            return ResponseFormatter::error(
                null,
                'Data GantiMeter tidak ditemukan',
                404
            );
        }
    }

    public function update(Request $request, $id)
    {
        $gantiMeter = GantiMeter::find($id);

        if ($gantiMeter) {
            $validatedData = $request->validate([
                // 'ulp' => 'required',
                // 'kd_unit' => 'required',
                // 'id_pel' => 'required',
                // 'nama' => 'required',
                // 'alamat' => 'required',
                // 'tarif' => 'required',
                // 'daya' => 'required',
                'status' => 'nullable',
                'alasan_tunda' => 'nullable',
                'ket_tunda' => 'nullable',
                'tgl_tl' => 'nullable',
                'merk_meter_lama' => 'nullable',
                'no_meter_lama' => 'nullable',
                'sisa_token_lama' => 'nullable',
                'foto_app_lama' => 'nullable',
                'merk_meter_baru' => 'nullable',
                'no_meter_baru' => 'nullable',
                'sisa_token_baru' => 'nullable',
                'foto_app_baru' => 'nullable',
                'no_hp_pelanggan' => 'nullable',
                'teken_pelanggan' => 'nullable',
                'nama_pelanggan' => 'nullable',
                'teken_petugas' => 'nullable',
                'nama_petugas' => 'nullable',
                'no_berita_acara' => 'nullable',
                'ket' => 'nullable',
            ]);

            // Update data GantiMeter berdasarkan input dari request
            $gantiMeter->update($validatedData);

            return ResponseFormatter::success(
                $gantiMeter,
                'Data GantiMeter berhasil diperbarui'
            );
        } else {
            return ResponseFormatter::error(
                null,
                'Data GantiMeter tidak ditemukan',
                404
            );
        }
    }
}
