<?php

namespace App\Imports;

use App\Models\GantiMeter;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class GantiMeterImport implements ToModel, WithHeadingRow
{
    /**
     * @param array $row
     *
     * @return \Illuminate\Database\Eloquent\Model|null
     */
    public function model(array $row)
    {
        return new GantiMeter([
            'user_id' => $row['user_id'],
            'ulp' => $row['ulp'],
            'id_pel' => $row['id_pel'],
            'nama' => $row['alamat'],
            'tarif' => $row['tarif'],
            'daya' => $row['daya'],
            'peta' => $row['peta'],
            'tipe' => $row['tipe'],
            'kelainan' => $row['kelainan'],
            'petugas' => $row['petugas'],
            'status' => $row['status'],

        ]);
    }
}
