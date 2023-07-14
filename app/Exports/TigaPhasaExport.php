<?php

namespace App\Exports;

use App\Models\TigaPhasa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class TigaPhasaExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        return TigaPhasa::select("id", "ulp", "kd_unit", "id_pel", "nama", "alamat", "tarif", "daya", "peta", "tipe", "kelainan", "petugas", "status",)->get();
    }

    public function headings(): array
    {
        return ["ID", "ULP", "KD UNIT", "IDPEL", "NAMA", "ALAMAT", "TARIF", "DAYA", "PETA", "TIPE", "KELAINAN", "PETUGAS", "STATUS",];
    }
}
