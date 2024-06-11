<?php

namespace Database\Seeders;

use App\Models\SktmModel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SktmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 5; $i++) {
            SktmModel::create([
                'nama_ortu' => $faker->name,
                'jenis_kelamin' => $faker->randomElement(['laki-laki', 'perempuan']),
                'pekerjaan' => $faker->jobTitle,
                'alamat' => $faker->address,
            ]);
    }
}
}
