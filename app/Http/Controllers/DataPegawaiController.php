<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataPegawaiController extends Controller
{
    public function index()
    {
        // Lakukan logika bisnis untuk mengambil data pegawai jika diperlukan
        // Contoh: $pegawai = Pegawai::all();

        // Kemudian kirim data ke view dan tampilkan
        return view('data-pegawai', [
            // 'pegawai' => $pegawai, // Jika Anda memiliki data pegawai yang ingin dilewatkan ke view
        ]);
    }
}

