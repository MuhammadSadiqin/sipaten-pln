<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TigaPhasa extends Model
{
    use HasFactory, SoftDeletes;

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
        'merk_type_kwh_meter_lama',
        'arus_kwh_meter_lama',
        'no_seri_kwh_meter_lama',
        'kelas_kwh_meter_lama',
        'tahun_kwh_meter_lama',
        'stan_lwbp_kwh_meter_lama',
        'stan_wbp_kwh_meter_lama',
        'stan_total_kwh_meter_lama',
        'stan_kvarh_kwh_meter_lama',
        'merk_type_kwh_meter_baru',
        'arus_kwh_mwtwer_baru',
        'no_seri_kwh_meter_baru',
        'kelas_kwh_meter_baru',
        'tahun_kwh_meter_baru',
        'stan_lwbp_kwh_meter_baru',
        'stan_wbp_kwh_meter_baru',
        'stan_total_kwh_meter_baru',
        'stan_kvarh_kwh_meter_baru',
        'merk_type_ct_terpasang',
        'ratio_ct_terpasang',
        'ganti_ct',
        'ratio_ct_baru',
        'merk_type_vt_terpasang',
        'ratio_vt_terpasang',
        'ganti_vt',
        'merk_type_vt_baru',
        'ratio_vt_baru',
        'merk_type_pembatas_lama',
        'amper_pembatas_lama',
        'merk_type_pembatas_baru',
        'amper_pembatas_baru',
        'tegangan_rs',
        'tegangan_rt',
        'tegangan_st',
        'tegangan_rn',
        'tegangan_rn_kwh_meter',
        'tegangan_sn',
        'tegangan_sn_kwh_meter',
        'tegangan_tn_kwh_meter',
        'arus_primer_r',
        'arus_sekunder_r',
        'arus_error_r',
        'arus_primer_s',
        'arus_sekunder_s',
        'arus_error_s',
        'tegangan_tn',
        'arus_primer_t',
        'arus_sekunder_t',
        'arus_error_t',
        'fotoPhasor',
        'fotoPemeriksaan',
        'temuan',
        'no_hp_pelanggan',
        'teken_pelanggan',
        'nama_pelanggan',
        'teken_mengetahui',
        'teken_petugas_1',
        'nama_petugas_1',
        'teken_petugas2',
        'nama_petugas_2',
        'no_berita_acara',
        'ket',
    ];

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }

    // public function uploadFotoPhasor($photo)
    // {
    //     $filename = time() . '.' . $photo->getClientOriginalExtension();
    //     $path = 'uploads/foto_phasor';
    //     $photo->storeAs($path, $filename);
    //     $this->foto_phasor = $filename;
    //     $this->save();
    // }

    // public function uploadFotoPemeriksaan($photo)
    // {
    //     $filename = time() . '.' . $photo->getClientOriginalExtension();
    //     $path = 'uploads/foto_pemeriksaan';
    //     $photo->storeAs($path, $filename);
    //     $this->foto_pemeriksaan = $filename;
    //     $this->save();
    // }

    public function toArray1()
    {
        $toArray = parent::toArray();
        $toArray['fotoPhasor'] = $this->fotoPhasor;
        return $toArray;
    }

    public function uploadFotoPhasor()
    {
        return url('') . Storage::url($this->attributes['fotoPhasor']);
    }

    public function toArray2()
    {
        $toArray = parent::toArray();
        $toArray['fotoPemeriksaan'] = $this->fotoPemeriksaan;
        return $toArray;
    }

    public function uploadFotoPemeriksaan()
    {
        return url('') . Storage::url($this->attributes['fotoPemeriksaan']);
    }
}
