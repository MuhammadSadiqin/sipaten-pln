<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lbkb extends Model
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
        'foto_app_sebelum',
        'foto_app_sesudah',
        'no_hp_pelanggan',
        'teken_pelanggan',
        'nama_pelanggan',
        'teken_petugas',
        'nama_petugas',
        'no_berita_acara',
        'ket',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
