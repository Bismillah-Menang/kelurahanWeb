<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function showLoginForm()
    {
        return view('frontend.login');
    }
   function login(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],[
            'email.required' => 'Email Wajib diisi',
            'password.required' => 'Password Wajib Diisi',
        ]);

        $infologin = [
             'email' => $request->email,
             'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            return redirect()->route('dashboard')->with('berhasil','Berhasil Masuk');
        } else {
            return redirect()->route('masuk')->with('failed','Email Atau Password Salah');
        }
        
    }

}
