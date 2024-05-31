<?php

namespace App\Http\Controllers;

use App\Models\PengajuanModel;
use Illuminate\Http\Request;

class petugasRtController extends Controller
{
    function showpetugasRtDashboard()
    {
        return view('petugas-rt.layout.dashboard',[
            'tittle' => 'Dashboard RT'
        ]);
    }
    function showSktmrt(){
        $data = PengajuanModel::where('jenis_layanan','sktm')->with('pemohon')->get();
        return view('petugas-rt.layout.permintaansktm',[
            'tittle' => 'Permintaan Pengajuan SKTM',
            'data' => $data
        ]);
    }
}
