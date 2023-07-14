<?php

namespace App\Exports;

use App\Models\Lbkb;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\FromCollection;

class LbkbExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Lbkb::select("id", "name", "email")->get();
    }
    public function headings(): array
    {
        return ["ID", "ULP", "KD UNIT", "IDPEL", "IDPEL", "NAMA", "ALAMAT", "TARIF", "DAYA", "PETA", "TIPE", "KELAINAN", "PETUGAS", "STATUS"];
    }
}
