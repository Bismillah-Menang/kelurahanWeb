<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboardindex()
    {
    return view ('frontend.dashboard');
    }
}
