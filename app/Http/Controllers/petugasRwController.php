<?php

namespace App\Http\Controllers;

use App\Models\PengajuanModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class petugasRwController extends Controller
{
    function showpetugasRwDashboard()
    {
        return view('petugas-rw.layout.dashboard',[
            'tittle' => 'Dashboard RW'
        ]);
    }
    function showSktmRw(){
        $data = PengajuanModel::where('jenis_layanan','sktm')
        ->where('status','menunggu RW')
        ->with('pemohon')->get();
        return view('petugas-rw.layout.permintaansktm',[
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
            return redirect()->route('sktmRw')->with(Session::flash('failed update',true));
        } else{
            if ($request -> pilihstatus == 'Verifikasi Diterima') {
                $data['status']          = 'menunggu admin kelurahan';
        $data['keterangan']           = $request -> inputketerastatus;
            }else{
                $data['status']          = $request -> pilihstatus;
        $data['keterangan']           = $request -> inputketerastatus;
            }
        
       

        PengajuanModel::whereId($id)->update($data);
        return redirect()->route('sktmRw')->with(Session::flash('berhasil update',true));
        }

    }
}
