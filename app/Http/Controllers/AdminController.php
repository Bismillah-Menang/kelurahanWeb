<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
    function make(Request $request)
    {
        $validator = Validator::make($request->all(),
            [
                'email' => 'required|email',
                'name' => 'required',
                'password' => 'required'
            ]);
            if($validator->fails()) return redirect()->back()->withInput()->withErrors($validator);
    }
}
