<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('dudi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_dudi');
            $table->text('alamat_dudi');
            $table->string('no_telp', 15);
            $table->string('jenis_usaha');
            $table->string('nama_pimpinan');
            $table->integer('kuota');
            $table->integer('terisi')->default(0);
            $table->enum('status', ['tersedia', 'penuh'])->default('tersedia');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('dudi');
    }
};