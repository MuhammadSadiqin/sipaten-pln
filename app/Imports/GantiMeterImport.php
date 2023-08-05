<?php

namespace App\Imports;

use App\Models\GantiMeter;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;
use Illuminate\Support\Collection;

class GantiMeterImport implements ToCollection, WithStartRow
{
    private $user_id;

    public function __construct($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @param \Illuminate\Support\Collection $rows
     */
    public function collection(Collection $rows)
    {
        // Loop melalui baris-baris data
        foreach ($rows as $key => $row) {
            // Skip baris pertama (header) karena sudah diabaikan dengan WithStartRow
            if ($key === 0) {
                continue;
            }

            // Pastikan data tidak kosong atau hanya berisi spasi
            if (empty(array_filter($row->toArray()))) {
                continue;
            }

            // Simpan data ke dalam database
            GantiMeter::create([
                'user_id' => $this->user_id, // Mengisi 'user_id' dengan ID pengguna yang sedang login
                'ulp' => $row[1],
                'kd_unit' => $row[2],
                'id_pel' => $row[3],
                'nama' => $row[4],
                'alamat' => $row[5],
                'tarif' => $row[6],
                'daya' => $row[7],
                'peta' => $row[8],
                'tipe' => $row[9],
                'kelainan' => $row[10],
                'petugas' => $row[11],
                'status' => $row[12],
            ]);
        }
    }

    /**
     * @return int
     */
    public function startRow(): int
    {
        return 2; // Skip the first row (header) when importing
    }
}
