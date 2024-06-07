<?php

namespace App\Http\Controllers;

use App\Models\PemohonModel;
use Illuminate\Http\Request;

class UserPemohonController extends Controller
{
    public function showtambah(Request $request){

        // dd($request->all());
        $request->validate([
            'nik' => 'required',
            'nama_pemohon' => 'required',
            'alamat' => 'required',
            'jenis_kelamin' => 'required',
            'tempat_lahir' => 'required',
            'tanggal_lahir' => 'required',
            'agama' => 'required',
            'pekerjaan' => 'required',
        ]);
    
        // Insert data into the pemohons table
        $pemohon = PemohonModel::create([
            'nik' => $request->input('nik'),
            'nama_pemohon' => $request->input('nama_pemohon'),
            'alamat' => $request->input('alamat'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'agama' => $request->input('agama'),
            'pekerjaan' => $request->input('pekerjaan'),
        ]);
        return redirect()->route('user_pemohon');
    }
}
