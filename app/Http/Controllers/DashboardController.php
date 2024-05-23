<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    function dashboardindex()
    {
        $data = User::where('role','user')->get();
        return view ('frontend.dashboard',compact('data'));
    }
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
