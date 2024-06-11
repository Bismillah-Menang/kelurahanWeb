<?php

namespace App\Http\Controllers;

use App\Models\PemohonModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            'id_user' => (User::find(Auth::user()->id))->id,
        ]);
        return redirect()->route('user_pemohon');
    }
    public function update(Request $request, $id)
    {
        // Validasi input
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

        // Cari pemohon berdasarkan id dan update data
        $pemohon = PemohonModel::findOrFail($id);
        $pemohon->update([
            'nik' => $request->input('nik'),
            'nama_pemohon' => $request->input('nama_pemohon'),
            'alamat' => $request->input('alamat'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'tempat_lahir' => $request->input('tempat_lahir'),
            'tanggal_lahir' => $request->input('tanggal_lahir'),
            'agama' => $request->input('agama'),
            'pekerjaan' => $request->input('pekerjaan'),
        ]);

        return redirect()->route('user_pemohon')->with('success', 'Data pemohon berhasil diupdate.');
    }
    public function destroy($id)
{
    $pemohon = PemohonModel::findOrFail($id);
    $pemohon->delete();

    return redirect()->route('user_pemohon')->with('success', 'Data pemohon berhasil dihapus.');
}

    public function claimpemohon(Request $request, $id){
        $user = User::find(Auth::user()->id);
        $pemohon = PemohonModel::findOrFail($id);

        $pemohon->id_user = $user->id;

        $pemohon->save();

        return redirect()->route('user_pemohon')->with('success', 'Data pemohon berhasil diklaim.');


    }
}

