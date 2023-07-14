<?php

namespace App\Imports;

use App\Models\Amr;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class AmrImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new Amr([
            'user_id' => $row['user_id'],
            'ulp' => $row['ulp'],
            'kd_unit' => $row['kd_unit'],
            'id_pel' => $row['id_pel'],
            'nama' => $row['nama'],
            'alamat' => $row['alamat'],
            'tarif' => $row['tarif'],
            'daya' => $row['daya'],
            'peta' => $row['peta'],
            'tipe' => $row['tipe'],
            'kelainan' => $row['kelainan'],
            'petugas' => $row['petugas'],
            'status' => $row['status'],
            'alasan_tunda' => $row['alasan_tunda'],
            'ket_tunda' => $row['ket_tunda'],
        ]);
    }
}
