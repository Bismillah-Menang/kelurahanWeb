<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengajuanModel extends Model
{
    use HasFactory;
    protected $table = 'berkas_pengajuan';
    protected $fillable = [
        'keperluan',
        'jenis_layanan',
        'foto_kk',
        'foto_ktp',
        'foto_buktilunaspbb',
        'pdf_surat',
        'tanggal_pengajuan',
        'waktu_pengajuan',
        'status',
        'keterangan',
        'id_pemohon',
        'id_rt',
        'id_rw',
    ];

    function pemohon()
    {
        return $this->belongsTo(PemohonModel::class, 'id_pemohon');
    }
    function rt()
    {
        return $this->belongsTo(User::class, 'id_rt');
    }
    function rw()
    {
        return $this->belongsTo(User::class, 'id_rw');
    }
}

