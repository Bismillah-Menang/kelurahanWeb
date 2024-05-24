<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function userindex()
    {
        $data = User::where('role','user')->get();
        return view ('frontend.UserTable',compact('data'));
    }
    function dashboardindex()
    {
        return view('frontend.dashboard');
    }
    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    function create()
    {
        return view('frontend.CreateUser');
    }
}
