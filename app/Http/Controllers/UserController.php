<?php

namespace App\Http\Controllers;

use App\Models\PemohonModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function showdashboard (){

        return view ('user.layout.dashboard', [
            'tittle' => 'dashboard user'
        ]);
    }

    public function showpemohon(){
        $audrey = PemohonModel::all();
        return view('user.layout.pemohon', [
            'tittle' => 'user pemohon',
            'pemohon' => $audrey
        ]);
    }
}
