<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Amr extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'ulp',
        'kd_unit',
        'id_pel',
        'nama',
        'alamat',
        'tarif',
        'daya',
        'peta',
        'tipe',
        'kelainan',
        'petugas',
        'status',
        'alasan_tunda',
        'ket_tunda',
        'tgl_tl',
        'merk_meter',
        'no_meter',
        'merk_modem',
        'no_modem',
        'merk_kartu',
        'ip_kartu',
        'foto',
        'no_berita_acara',
        'ket',
    ];
    // public function user()
    // {
    //     return $this->hasOne(User::class, 'id', 'user_id');
    // }
}
