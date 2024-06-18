<?php

namespace App\Http\Controllers;

use App\Models\PengajuanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class PetugasRtController extends Controller
{
    public function showpetugasRtDashboard()
    {
        return view('petugas-rt.layout.dashboard', [
            'tittle' => 'Dashboard RT'
        ]);
    }

    public function showSktmrt(Request $request)
    {
        $rt = $request->input('pilih_rt'); // Ambil RT yang dipilih dari form
        $userId = Auth::user()->id;
    
        // Ambil data berdasarkan RT yang dipilih dan pengguna yang sedang login
        $data = PengajuanModel::where('jenis_layanan', 'sktm')
                              ->where('status', 'menunggu Verifikasi RT')
                              ->where('rt', $rt) // Sesuaikan dengan RT yang dipilih
                              ->get();
    
        return view('petugas-rt.layout.permintaansktm', [
            'tittle' => 'Permintaan Pengajuan SKTM',
            'data' => $data,
            'selectedRT' => $rt, // Kirim RT yang dipilih ke tampilan
        ]);
    }
    

    public function ubahstatus(Request $request, $id)
    {
        $validator = Validator::make($request->all(), [
            'pilihstatus' => 'required',
            'inputketerangan' => 'nullable',
        ]);

        if ($validator->fails()) {
            return redirect()->route('sktmrt')->with(Session::flash('failed update', true));
        } else {
            $data['status'] = $request->pilihstatus == 'Verifikasi Diterima' ? 'menunggu Verifikasi Admin' : $request->pilihstatus;
            $data['keterangan'] = $request->inputketerangan;

            PengajuanModel::whereId($id)->update($data);
            return redirect()->route('sktmrt')->with(Session::flash('berhasil update', true));
        }
    }
}
