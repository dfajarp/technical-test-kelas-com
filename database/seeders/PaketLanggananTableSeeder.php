<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaketLanggananTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('paket_langganan')->insert([
            [
                'nama_paket' => 'Starter',
                'kelebihan' => 'LMS + kelas by Kelas.Center,Up to 5 users,No charge per user,Up to 20 pilihan kelas,Update pergantian kelas / 3 bulan,Sertifikat,Konsultasi Gratis,Dedicated assistant,Full support 7x24 jam',
                'harga' => 100000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_paket' => 'Basic',
                'kelebihan' => 'LMS + kelas by Kelas.Center,6-49 users,No charge per user,Up to 50 pilihan kelas,Update pergantian kelas / 3 bulan,Sertifikat,Konsultasi Gratis,Dedicated assistant,Full support 7x24 jam',
                'harga' => 150000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_paket' => 'Pro',
                'kelebihan' => 'LMS + kelas by Kelas.Center,50-100 users,No charge per user,All Access Class,Update pergantian kelas / 3 bulan,Sertifikat,Konsultasi Gratis,Dedicated assistant,Full support 7x24 jam',
                'harga' => 200000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
