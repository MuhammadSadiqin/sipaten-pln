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
        return Lbkb::select(
            "id",
            "ulp",
            "kd_unit",
            "id_pel",
            "nama",
            "alamat",
            "tarif",
            "daya",
            "peta",
            "tipe",
            "kelainan",
            "petugas",
            "status",
            "alasan_tunda",
            "ket_tunda",
            "tgl_tl",
            "foto_app_sebelum",
            "foto_app_sesudah",
            "no_hp_pelanggan",
            "teken_pelanggan",
            "nama_pelanggan",
            "teken_petugas",
            "nama_petugas",
            "no_berita_acara",
            "ket",
        )->get();
    }
    public function headings(): array
    {
        return [
            "ID", "ULP", "KD UNIT", "IDPEL", "NAMA", "ALAMAT", "TARIF", "DAYA", "PETA", "TIPE", "KELAINAN", "PETUGAS", "STATUS", "ALASAN TUNDA", "KET TUNDA", "TANGGAL TL",
            "FOTO SEBELUM", "FOTO SESUDAH", "NO HP PELANGGA", "TEKKEN PELANGGAN", "NAMA PELANGGAN", "TEKEN PETUGAS", "NAMA PETUGAS", "NO BERITA ACARA", "KETERANGAN"
        ];
    }
}
