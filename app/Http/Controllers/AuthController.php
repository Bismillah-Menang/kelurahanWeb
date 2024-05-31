<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

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
            if (Auth::User()->role ==  'admin') {
                return redirect()->route('admin_dashboard')->with(Session::flash('berhasil',true));
            }elseif (Auth::User()->role ==  'petugas_rt') {
                return redirect()->route('petugasRt_dashboard')->with(Session::flash('berhasil',true));
            }elseif (Auth::User()->role ==  'petugas_rw') {
                    return redirect()->route('home');
            }elseif (Auth::User()->role ==  'user') {
                return redirect()->route('form')->with(Session::flash('gagal login',true));
            }
        } else {
            return redirect()->route('form')->with(Session::flash('gagal login',true));
        }
        
    }
    // Method to show the registration form
    function showRegisterForm()
    {
        return view('frontend.register');
    }

    // Method to handle the registration process
    function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama_lengkap' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ], [
            'nama_lengkap.required' => 'Nama Lengkap Wajib diisi',
            'email.required' => 'Email Wajib diisi',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password Wajib Diisi',
            'password.min' => 'Password harus terdiri dari minimal 8 karakter',
            'password.confirmed' => 'Password konfirmasi tidak sesuai',
        ]);

        if ($validator->fails()) {
            return redirect()->route('register')
                ->withErrors($validator)
                ->withInput();
        }

        $user = User::create([
            'name' => $request->nama_lengkap,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        Auth::login($user);

        return redirect()->route('dashboard')->with('berhasil', 'Berhasil Mendaftar');
    }
}

