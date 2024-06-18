<?php

namespace App\Http\Controllers;

use App\Models\PengajuanModel;
use App\Models\SktmModel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class UserPengajuan extends Controller
{
    public function tambahsktm(Request $request)
    {
        // Validate the request
        // $request->validate([
        //     'nik' => 'required',
        //     'nama_pemohon' => 'required',
        //     'alamat' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'tempat_lahir' => 'required',
        //     'tanggal_lahir' => 'required',
        //     'agama' => 'required',
        //     'pekerjaan' => 'required',
        //     'rt' => 'required',
        //     'namaorangtua' => 'required',
        //     'jenis_kelamin' => 'required',
        //     'pekerjaan' => 'required',
        //     'alamatorangtua' => 'required',
        //     'foto_ktp' => 'required',
        //     'foto_kk' => 'required',
        // ]);

        // Log the request data
        // Log::info($request->all());
        Log::info('Request data:', $request->all());

        $pemohon = SktmModel::create([
            'nama_ortu' => $request->input('nama_ortu'),
            'jenis_kelamin' => $request->input('jenis_kelamin'),
            'pekerjaan' => $request->input('pekerjaan'),
            'alamat' => $request->input('alamat'),
            'id_user' => Auth::id(),
        ]);

        $detailsktm = SktmModel::latest()->first();
        $file = $request->file('foto_ktp');
        $file1 = $request->file('foto_kk');
        $file2 = $request->file('bukti_pengantar');

        // Create unique file names
        $filename = time() . '_' . $file->getClientOriginalName();
        $filename1 = time() . '_' . $file1->getClientOriginalName();
        $filename2 = time() . '_' . $file2->getClientOriginalName();

        // Save files in storage
        $file->storeAs('public', $filename);
        $file1->storeAs('public', $filename1);
        $file2->storeAs('public', $filename2);

        // Insert data into the pemohons table
        $pemohon1 = PengajuanModel::create([
            'keperluan' => $request->input('keperluan'),
            'foto_kk' => $filename1,
            'foto_ktp' => $filename,
            'bukti_pengantar' => $filename2,
            'tanggal_pengajuan' => Carbon::now()->format('Y-m-d'),
            'waktu_pengajuan' => Carbon::now()->format('H:i:s'),
            'status' => 'menunggu Verifikasi RT',
            'keterangan' => $request->input('keterangan'),
            'id_pemohon' => $request->input('id_pemohon'),
            'rt' => $request->input('rt'),
            'id_detailpelayanan' => $detailsktm->id,
            'jenis_layanan' => 'sktm',
            'id_user' => Auth::id(),
        ]);

        if ($pemohon && $pemohon1) {
            return redirect()->route('user_pengajuansktm')->with('success', 'Pengajuan berhasil ditambahkan');
        } else {
            return redirect()->back()->with('error', 'Pengajuan gagal ditambahkan');
        }
    }
}
