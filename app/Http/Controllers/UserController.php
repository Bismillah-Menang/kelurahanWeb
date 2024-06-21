<?php

namespace App\Http\Controllers;

use App\Models\PemohonModel;
use App\Models\PengajuanModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showdashboard()
    {
        $id_user = Auth::user()->id;

        // Pengajuan yang menunggu verifikasi admin
        $pengajuanmenunggu = PengajuanModel::where('status', 'menunggu Verifikasi RT')->count();

        // Pengajuan yang diterima (status selesai dan format menjadi PDF)
        $pengajuanditerima = PengajuanModel::where('status', 'Verifikasi Diterima')
            ->whereHas('pemohon', function ($query) use ($id_user) {
                $query->where('id_user', $id_user);
            })
            ->count();

        // Pengajuan yang ditolak
        $pengajuanditolak = PengajuanModel::where('status', 'Verifikasi Ditolak')
            ->whereHas('pemohon', function ($query) use ($id_user) {
                $query->where('id_user', $id_user);
            })
            ->count();

        // Riwayat pengajuan (status diterima atau ditolak)
        $riwayatpengajuan = PengajuanModel::whereIn('status', ['Verifikasi Diterima', 'Verifikasi Ditolak'])
            ->whereHas('pemohon', function ($query) use ($id_user) {
                $query->where('id_user', $id_user);
            })
            ->count();

        return view('user.layout.dashboard', [
            'tittle' => 'Dashboard User',
            'menunggu' => $pengajuanmenunggu,
            'diterima' => $pengajuanditerima,
            'ditolak' => $pengajuanditolak,
            'riwayat' => $riwayatpengajuan
        ]);
    }

    public function showpemohon()
    {
        $audrey = PemohonModel::where('id_user', (User::find(Auth::user()->id))->id)->get();
        $semuapemohon = PemohonModel::all();
        return view('user.layout.pemohon', [
            'tittle' => 'User Pemohon',
            'pemohon' => $audrey,
            'semuapemohon' => $semuapemohon
        ]);
    }

    function pengajuansktm()
    {
        $user = User::find(Auth::user()->id);
        $userpemohon = PemohonModel::where('id_user', $user->id)->get();
        $pengajuanberkas = PengajuanModel::whereHas('pemohon', function ($query) use ($user) {
            $query->where('id_user', $user->id);
        })->get();
        return view('user.layout.sktmuser', [
            'tittle' => 'Pengajuan SKTM',
            'Send' => $userpemohon,
            'Kirim' => $pengajuanberkas,
        ]);
    }
}
