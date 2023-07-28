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
        Schema::create('amrs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->nullable();
            $table->string('ulp');
            $table->integer('kd_unit');
            $table->bigInteger('id_pel');
            $table->string('nama');
            $table->text('alamat');
            $table->string('tarif');
            $table->integer('daya');
            $table->text('peta')->nullable();
            $table->string('tipe');
            $table->string('kelainan');
            $table->string('petugas');
            $table->string('status');
            $table->string('alasan_tunda')->nullable();
            $table->text('ket_tunda')->nullable();
            $table->date('tgl_tl')->nullable();
            $table->string('merk_meter')->nullable();
            $table->integer('no_meter')->nullable();
            $table->string('merk_modem')->nullable();
            $table->integer('no_modem')->nullable();
            $table->integer('merk_kartu')->nullable();
            $table->integer('ip_kartu')->nullable();
            $table->string('foto')->nullable();
            $table->integer('no_berita_acara')->nullable();
            $table->text('ket')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('amrs');
    }
};
