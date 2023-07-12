<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GantiMeter extends Model
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
        'merk_meter_lama',
        'no_meter_lama',
        'sisa_token_lama',
        'foto_app_lama',
        'merk_meter_baru',
        'no_meter_baru',
        'sisa_token_baru',
        'foto_app_baru',
        'no_hp_pelanggan',
        'teken_pelanggan',
        'nama_pelanggan',
        'teken_petugas',
        'no_berita_acara',
        'ket',

    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
