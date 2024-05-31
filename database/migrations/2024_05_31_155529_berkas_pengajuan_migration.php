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
        Schema::create('berkas_pengajuan', function (Blueprint $table) {
            $table->id();
            $table->String('keperluan');
            $table->String('foto_kk')->nullable();
            $table->String('foto_ktp')->nullable();
            $table->String('foto_buktilunaspbb')->nullable();
            $table->String('pdf_surat')->nullable();
            $table->date('tanggal_pengajuan');
            $table->time('waktu_pengajuan');
            $table->String('status')->nullable();
            $table->String('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('berkas_pengajuan');
    }
};
