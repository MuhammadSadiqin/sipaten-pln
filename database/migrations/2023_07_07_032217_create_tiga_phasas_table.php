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

            $table->interger('user_id');
            $table->string('ulp');
            $table->interger('kd_unit');
            $table->interger('id_pel');
            $table->string('nama');
            $table->text('alamat');
            $table->string('tarif');
            $table->integer('daya');
            $table->string('tipe');
            $table->string('kelainan');
            $table->string('petugas');
            $table->string('status');
            $table->text('alasan_tunda');
            $table->text('ket_tunda');
            $table->date('tgl_tl');
            $table->string('merk_type_kwh_meter_lama');
            $table->string('arus_kwh_meter_lama');
            $table->interger('no_seri_kwh_meter_lama');
            $table->string('kelas_kwh_meter_lama');
            $table->date('tahun_kwh_meter_lama');
            $table->interger('stan_lwbp_kwh_meter_lama');
            $table->interger('stan_wbp_kwh_meter_lama');
            $table->interger('stan_total_kwh_meter_lama');
            $table->interger('stan_kvarh_kwh_meter_lama');
            $table->string('merk_type_kwh_meter_baru');
            $table->string('arus_kwh_mwtwer_baru');
            $table->interger('no_seri_kwh_meter_baru');
            $table->string('kelas_kwh_meter_baru');
            $table->date('tahun_kwh_meter_baru');
            $table->interger('stan_lwbp_kwh_meter_baru');
            $table->interger('stan_wbp_kwh_meter_baru');
            $table->interger('stan_total_kwh_meter_baru');
            $table->interger('stan_kvarh_kwh_meter_baru');
            $table->string('merk_type_ct_terpasang');
            $table->string('ratio_ct_terpasang');
            $table->string('ganti_ct');
            $table->string('merk_type_ct_baru');
            $table->string('ratio_ct_baru');
            $table->string('merk_type_vt_terpasang');
            $table->string('ratio_vt_terpasang');
            $table->string('ganti_vt');

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
