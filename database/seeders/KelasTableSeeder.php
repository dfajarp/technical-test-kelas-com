<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KelasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('kelas')->insert([
            [
                'id_mentor' => 1,
                'nama_kelas' => 'Kelas Bahasa Indonesia',
                'durasi_kelas' => 120,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_mentor' => 1,
                'nama_kelas' => 'Kelas Bahasa Korea',
                'durasi_kelas' => 60,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_mentor' => 1,
                'nama_kelas' => 'Kelas Bahasa Jepang',
                'durasi_kelas' => 90,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_mentor' => 2,
                'nama_kelas' => 'Kelas IT',
                'durasi_kelas' => 120,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_mentor' => 2,
                'nama_kelas' => 'Kelas Barista',
                'durasi_kelas' => 60,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_mentor' => 2,
                'nama_kelas' => 'Kelas Koki',
                'durasi_kelas' => 90,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_mentor' => 3,
                'nama_kelas' => 'Kelas Matematika',
                'durasi_kelas' => 120,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_mentor' => 3,
                'nama_kelas' => 'Kelas Dokter',
                'durasi_kelas' => 60,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'id_mentor' => 3,
                'nama_kelas' => 'Kelas Penyanyi',
                'durasi_kelas' => 90,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
