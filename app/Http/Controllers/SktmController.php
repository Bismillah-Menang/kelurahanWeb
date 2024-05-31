<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SktmController extends Controller
{
    public function showsktm()
    {
        return view('frontend.pages.sktm');
    }
}
