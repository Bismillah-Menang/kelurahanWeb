<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SktmModel extends Model
{
    use HasFactory;
    protected $table = 'sktm';
    protected $fillable = [
        'nama_ortu',
        'jenis_kelamin',
        'pekerjaan',
        'alamat',
    ];
}
