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
        Schema::create('siswas', function (Blueprint $table) {
            $table->id();
            $table->string('Nama_Lengkap');
            $table->string('Tempat_Lahir');
            $table->date('Tanggal_Lahir');
            $table->string('Alamat');
            $table->string('Asal_Sekolah');
            $table->string('Email');
            $table->string('Foto');
            $table->string('Scan_KK');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('siswas');
    }
};
