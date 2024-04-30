<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisiMisiController extends Controller
{
    public function showVisiMisi()
{
    return view('frontend.visi_misi');
}    
}
