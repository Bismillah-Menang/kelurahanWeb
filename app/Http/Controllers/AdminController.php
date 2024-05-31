<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
   //Dashboard Views
    function dashboardindex()
    {
        return view('frontend.dashboard');
    }

    function logout()
    {
        Auth::logout(); 
        return redirect('/');
    }

    // Make User account
    function userindex()
    {
        $data = User::where('role','user')->get();
        return view ('frontend.UserTable',compact('data'));
    }

    function create()
    {
        return view('frontend.CreateUser');
    }

    function make(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
            'email'         => 'required|email',
            'password'      => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $data = [
            'name'          => $request->name,
            'email'         => $request->email,
            'password'      => Hash::make($request->password),
            'role'          => 'user' // Assigning the role as 'user'
        ];

        User::create($data);
        return redirect()->route('user');        
    }
    //method edit data user
    function edit(Request $request,$id)
    {
        $data = User::find($id);
        return view('frontend.edituser',compact('data'));
    }

    function update(Request $request,$id)
    {
        $validator = Validator::make($request->all(), [
            'name'          => 'required',
            'email'         => 'required|email',
            'password'      => 'nullable'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $data['email']          = $request -> email;
        $data['name']           = $request -> name;
        $data['password']       = Hash::make($request -> password);

        User::whereId($id)->update($data);
        return redirect()->route('user'); 
    }

    function delete(Request $request,$id)
    {
        $data = User::find($id);
        if($data){
            $data -> delete();
        }
        return redirect()->route('user');
    }

    //Make User Petugas
    function indexpetugas()
    {
        $data = User::where('role','petugas')->get();
        return view ('frontend.indexPetugas',compact('data'));
    }

    function makePetugas()
    {
        return view('frontend.CreatePetugas');
    }

    function createpetugas(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'petugas' // Assigning the role as 'user'
        ];

        User::create($data);
        return redirect()->route('petugas');        
    }
}
