<?php

namespace Database\Seeders;
use Faker\Factory as Faker;
use App\Models\PengajuanModel;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BerkasPengajuanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        $currentDate = Carbon::now()->toDateString();
        $currentTime = Carbon::now()->toTimeString();
        $keperluanOptions = ['sktm', 'skck'];

        foreach (range(1, 7) as $index) {
            PengajuanModel::create([
                'keperluan' => $faker->randomElement($keperluanOptions),
                'jenis_layanan' => $faker->randomElement($keperluanOptions),
                'foto_kk' => 'ada',
                'foto_ktp' => 'ada',
                'bukti_pengantar' => 'ada',
                'foto_buktilunaspbb' => 'ada',
                'pdf_surat' => null,
                'tanggal_pengajuan' => $currentDate,
                'waktu_pengajuan' => $currentTime,
                'status' => 'menunggu Verifikasi RT',
                'keterangan' => null,
                'id_pemohon' => $faker->numberBetween(1, 10),
                'id_rt' => 2,
            ]);
        }
    }
}
