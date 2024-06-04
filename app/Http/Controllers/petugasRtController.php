<?php

namespace App\Http\Controllers;

use App\Models\PengajuanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class petugasRtController extends Controller
{
    function showpetugasRtDashboard()
    {
        return view('petugas-rt.layout.dashboard',[
            'tittle' => 'Dashboard RT'
        ]);
    }
    function showSktmrt(){
        $data = PengajuanModel::where('jenis_layanan','sktm')
        ->where('status','menunggu Verifikasi RT')
        ->with('pemohon')->get();
        return view('petugas-rt.layout.permintaansktm',[
            'tittle' => 'Permintaan Pengajuan SKTM',
            'data' => $data
        ]);
    }
    function ubahstatus(Request $request,$id){
        
        $validator = Validator::make($request->all(), [
            'pilihstatus'          => 'required',
            'inputketerangan'         => 'nullable',
           
        ]);

        if ($validator->fails()) {
            return redirect()->route('sktmrt')->with(Session::flash('failed update',true));
        } else{
            if ($request -> pilihstatus == 'Verifikasi Diterima') {
                $data['status']          = 'menunggu  Verifikasi Admin';
        $data['keterangan']           = $request -> inputketerastatus;
            }else{
                $data['status']          = $request -> pilihstatus;
        $data['keterangan']           = $request -> inputketerastatus;
            }
        
       

        PengajuanModel::whereId($id)->update($data);
        return redirect()->route('sktmrt')->with(Session::flash('berhasil update',true));
        }

    }
}
