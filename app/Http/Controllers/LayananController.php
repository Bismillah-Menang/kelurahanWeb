<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LayananController extends Controller
{
    public function showLayanan()
    {
        return view('frontend.layanan');
    }  
}
