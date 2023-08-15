<?php

namespace App\Imports;

use App\Models\Amr;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithStartRow;

class AmrImport implements ToCollection, WithStartRow
{


    private $user_id;

    public function __construct($user_id)
    {
        $this->user_id = $user_id;
    }

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
            Amr::create([
                'user_id' => $this->user_id, // Mengisi 'user_id' dengan ID pengguna yang sedang login
                'ulp' => $row[0],
                'kd_unit' => $row[1],
                'id_pel' => $row[2],
                'nama' => $row[3],
                'alamat' => $row[4],
                'tarif' => $row[5],
                'daya' => $row[6],
                'peta' => $row[7],
                'tipe' => $row[8],
                'kelainan' => $row[9],
                // 'petugas' => $row[10],
                // 'status' => $row[11],
            ]);
        }
    }

    public function startRow(): int
    {
        return 1; // Skip the first row (header) when importing
    }
}
//  /**
//      * @param array $row
//      *
//      * @return \Illuminate\Database\Eloquent\Model|null
//      */
//     public function model(array $row)
//     {
//         // Pastikan data tidak kosong atau hanya berisi spasi
//         if (empty(array_filter($row))) {
//             return null;
//         }

//         return new Amr([
//             // 'user_id' => $row['user_id'],
//             'ulp' => $row['ulp'],
//             'kd_unit' => $row['kd_unit'],
//             'id_pel' => $row['id_pel'],
//             'nama' => $row['nama'],
//             'alamat' => $row['alamat'],
//             'tarif' => $row['tarif'],
//             'daya' => $row['daya'],
//             'peta' => $row['peta'],
//             'tipe' => $row['tipe'],
//             'kelainan' => $row['kelainan'],
//             'petugas' => $row['petugas'],
//             'status' => $row['status'],
//             // 'alasan_tunda' => $row['alasan_tunda'],
//             // 'ket_tunda' => $row['ket_tunda'],
//         ]);
//     }
//     /**
//      * @return int
//      */
//     public function startRow(): int
//     {
//         return 2; // Skip the first row (header) when importing
//     }