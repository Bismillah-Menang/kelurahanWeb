<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    public function __construct()
    {
        $adminData = [
            [
                'name' => 'admin`',
                'email' => 'admin_poli@gmail.com',
                'role' => 'admin_poli',
                'password' => Hash::make('admin_poli123'),
            ],
            [
                'name' => 'admin_pendaftaran',
                'email' => 'admin_pendaftaran@gmail.com',
                'role' => 'admin_pendaftaran',
                'password' => Hash::make('admin_pendaftaran123'),
            ]
        ];
    
        // Menambahkan akun admin baru jika belum ada
        foreach ($adminData as $admin) {
            $existingAdmin = User::where('email', $admin['email'])->first();
            if (!$existingAdmin) {
                User::create([
                    'name' => $admin['name'],
                    'email' => $admin['email'],
                    'role' => $admin['role'],
                    'password' => $admin['password'],
                ]);
            }
        }
    }
    public function index(){
        return view('frontend.home');
    }
}
