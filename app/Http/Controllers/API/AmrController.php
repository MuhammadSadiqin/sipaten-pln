<?php

namespace App\Http\Controllers\API;

use App\Models\Amr;
use Illuminate\Http\Request;
use App\Helpers\ResponseFormatter;
use App\Http\Controllers\Controller;

class AmrController extends Controller
{
    public function all(Request $request)
    {
        $limit = $request->input('limit', 100000000);

        $amr = Amr::paginate($limit);

        return ResponseFormatter::success(
            $amr,
            'Data GantiMeter berhasil diambil'
        );
    }

    public function getById($id)
    {
        $amr = Amr::find($id);

        if ($amr) {
            return ResponseFormatter::success(
                $amr,
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
        $amr = Amr::find($id);

        if ($amr) {
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

            // Update data Amr berdasarkan input dari request
            $amr->update($validatedData);

            return ResponseFormatter::success(
                $amr,
                'Data Amr berhasil diperbarui'
            );
        } else {
            return ResponseFormatter::error(
                null,
                'Data Amr tidak ditemukan',
                404
            );
        }
    }
}
