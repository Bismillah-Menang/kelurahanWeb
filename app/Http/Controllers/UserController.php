<?php

namespace App\Http\Controllers;

use App\Models\PemohonModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function showdashboard (){

        return view ('user.layout.dashboard', [
            'tittle' => 'Dashboard User'
        ]);
    }

    public function showpemohon(){
        $audrey = PemohonModel::where('id_user',(User::find(Auth::user()->id))->id)->get();
        $semuapemohon = PemohonModel::all();
        return view('user.layout.pemohon', [
            'tittle' => 'User Pemohon',
            'pemohon' => $audrey,
            'semuapemohon' => $semuapemohon
        ]);
    }

    function pengajuansktm(){
        return view('user.layout.sktmuser', [
            'tittle' => 'Pengajuan SKTM',
            
        ]);
    }
}
