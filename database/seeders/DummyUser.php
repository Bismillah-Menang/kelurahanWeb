<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUser extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData = [
            [
                'name'=> 'Admin badean',
                'email'=> 'adminbadean1@gmail.com',
                'role'=> 'admin',
                'password'=> bcrypt('12345678')
            ],
            [
                'name'=> 'Pak Slamet',
                'email'=> 'slamet@gmail.com',
                'role'=> 'petugas',
                'password'=> bcrypt('12345678')
            ],
            [
                'name'=> 'Muhaimin',
                'email'=> 'iskandarimin@gmail.com',
                'role'=> 'user',
                'password'=> bcrypt('12345678')
            ]
        ];

        foreach($userData as $key => $val){
            User::create($val);
        }
        
    }
}
