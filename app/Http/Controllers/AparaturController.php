<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AparaturController extends Controller
{
    public function showAparatur()
    {
        return view('frontend.aparatur');
    }  
}
