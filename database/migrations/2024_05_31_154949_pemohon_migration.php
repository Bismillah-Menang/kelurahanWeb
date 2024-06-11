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
        Schema::create('pemohon', function (Blueprint $table) {
            $table->id();
            $table->String('nik');
            $table->String('nama_pemohon');
            $table->String('alamat');
            $table->String('jenis_kelamin');
            $table->String('tempat_lahir');
            $table->date('tanggal_lahir');
            $table->String('agama');
            $table->String('pekerjaan');
            $table->enum('rt', array_map(function($i) {
                return 'rt' . str_pad($i, 2, '0', STR_PAD_LEFT);
            }, range(1, 36)));
            $table->integer('id_user')->nullable();           
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemohon');
    }
};
