<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('permohonan_pkl', function (Blueprint $table) {
            $table->id();
            $table->foreignId('siswa_id')->constrained('siswas')->onDelete('cascade');
            $table->string('nama_dudi');
            $table->string('alamat_dudi');
            $table->string('kontak_dudi');
            $table->string('bidang_usaha');
            $table->date('tanggal_mulai');
            $table->date('tanggal_selesai');
            $table->string('guru_pembimbing')->nullable();
            $table->enum('status', ['menunggu', 'diproses', 'diterima', 'ditolak'])->default('menunggu');
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('permohonan_pkl');
    }
};