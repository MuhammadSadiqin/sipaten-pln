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
        Schema::create('lbkbs', function (Blueprint $table) {
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
            $table->string('kelainan');
            $table->string('petugas')->nullable();
            $table->string('status')->nullable();
            $table->string('alasan_tunda')->nullable();
            $table->text('ket_tunda')->nullable();
            $table->date('tgl_tl')->nullable();
            $table->string('foto_app_sebelum')->nullable();
            $table->string('foto_app_sesudah')->nullable();
            $table->integer('no_hp_pelanggan')->nullable();
            $table->string('teken_pelanggan')->nullable();
            $table->string('nama_pelanggan')->nullable();
            $table->string('teken_petugas')->nullable();
            $table->string('nama_petugas')->nullable();
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
        Schema::dropIfExists('lbkbs');
    }
};
