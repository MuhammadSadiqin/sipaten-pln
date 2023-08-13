<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('tiga_phasas', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('users');
            $table->string('ulp');
            $table->integer('kd_unit');
            $table->bigInteger('id_pel');
            $table->string('nama');
            $table->text('alamat');
            $table->string('tarif');
            $table->integer('daya');
            $table->text('peta')->nullable();
            $table->string('tipe');
            $table->string('kelainan')->nullable();
            $table->string('petugas')->nullable();
            $table->string('status');
            $table->text('alasan_tunda')->nullable();
            $table->text('ket_tunda')->nullable();
            $table->date('tgl_tl')->nullable();
            $table->string('merk_type_kwh_meter_lama')->nullable();
            $table->string('arus_kwh_meter_lama')->nullable();
            $table->integer('no_seri_kwh_meter_lama')->nullable();
            $table->string('kelas_kwh_meter_lama')->nullable();
            $table->date('tahun_kwh_meter_lama')->nullable();
            $table->integer('stan_lwbp_kwh_meter_lama')->nullable();
            $table->integer('stan_wbp_kwh_meter_lama')->nullable();
            $table->integer('stan_total_kwh_meter_lama')->nullable();
            $table->integer('stan_kvarh_kwh_meter_lama')->nullable();
            $table->string('merk_type_kwh_meter_baru')->nullable();
            $table->string('arus_kwh_mwtwer_baru')->nullable();
            $table->integer('no_seri_kwh_meter_baru')->nullable();
            $table->string('kelas_kwh_meter_baru')->nullable();
            $table->date('tahun_kwh_meter_baru')->date_format('Y')->nullable();
            $table->integer('stan_lwbp_kwh_meter_baru')->nullable();
            $table->integer('stan_wbp_kwh_meter_baru')->nullable();
            $table->integer('stan_total_kwh_meter_baru')->nullable();
            $table->integer('stan_kvarh_kwh_meter_baru')->nullable();
            $table->string('merk_type_ct_terpasang')->nullable();
            $table->string('ratio_ct_terpasang')->nullable();
            $table->string('ganti_ct')->nullable();
            $table->string('merk_type_ct_baru')->nullable();
            $table->string('ratio_ct_baru')->nullable();
            $table->string('merk_type_vt_terpasang')->nullable();
            $table->string('ratio_vt_terpasang')->nullable();
            $table->string('ganti_vt')->nullable();
            $table->string('merk_type_vt_baru')->nullable();
            $table->string('ratio_vt_baru')->nullable();
            $table->string('merk_type_pembatas_lama')->nullable();
            $table->string('amper_pembatas_lama')->nullable();
            $table->string('merk_type_pembatas_baru')->nullable();
            $table->string('amper_pembatas_baru')->nullable();
            $table->string('tegangan_rs')->nullable();
            $table->string('tegangan_rt')->nullable();
            $table->string('tegangan_st')->nullable();
            $table->string('tegangan_rn')->nullable();
            $table->string('tegangan_rn_kwh_meter')->nullable();
            $table->string('tegangan_sn')->nullable();
            $table->string('tegangan_sn_kwh_meter')->nullable();
            $table->string('tegangan_tn_kwh_meter')->nullable();
            $table->string('arus_primer_r')->nullable();
            $table->string('arus_sekunder_r')->nullable();
            $table->string('arus_error_r')->nullable();
            $table->string('arus_primer_s')->nullable();
            $table->string('arus_sekunder_s')->nullable();
            $table->string('arus_error_s')->nullable();
            $table->string('tegangan_tn')->nullable();
            $table->string('arus_primer_t')->nullable();
            $table->string('arus_sekunder_t')->nullable();
            $table->string('arus_error_t')->nullable();
            $table->string('foto_phasor')->nullable();
            $table->string('foto_pemeriksaan')->nullable();
            $table->string('temuan')->nullable();
            $table->integer('no_hp_pelanggan')->nullable();
            $table->string('teken_pelanggan')->nullable();
            $table->string('nama_pelanggan')->nullable();
            $table->string('teken_mengetahui')->nullable();
            $table->string('teken_petugas_1')->nullable();
            $table->string('nama_petugas_1')->nullable();
            $table->string('teken_petugas2')->nullable();
            $table->string('nama_petugas_2')->nullable();
            $table->integer('no_berita_acara')->nullable();
            $table->text('ket')->nullable();

            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tiga_phasas');
    }
};
