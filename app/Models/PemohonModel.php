<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PemohonModel extends Model
{
    use HasFactory;
    protected $table = 'pemohon';
    protected $fillable = [
        'nik',
        'nama_pemohon',
        'alamat',
        'jenis_kelamin',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'pekerjaan',
    ];
}
