<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sktm', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nama_ortu');
            $table->enum('jenis_kelamin', ['laki-laki', 'perempuan']);
            $table->string('pekerjaan');
            $table->string('alamat');  // ensure this column does not accept null values
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sktm');
    }
};
