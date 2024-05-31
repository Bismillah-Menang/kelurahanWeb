<?php

namespace Database\Seeders;

use App\Models\PemohonModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
class PemohonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $faker = Faker::create();
        $genders = ['Laki-laki', 'Perempuan'];
        $religions = ['Islam', 'Kristen', 'Katolik', 'Hindu', 'Buddha', 'Konghucu'];

        foreach (range(1, 10) as $index) {
            PemohonModel::create([
                'nik' => $faker->unique()->numerify('###############'), // 16 digit angka
                'nama_pemohon' => $faker->name,
                'alamat' => $faker->address,
                'jenis_kelamin' => $faker->randomElement($genders),
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->date('Y-m-d'),
                'agama' => $faker->randomElement($religions),
                'pekerjaan' => $faker->jobTitle,
            ]);
        }
    }
}