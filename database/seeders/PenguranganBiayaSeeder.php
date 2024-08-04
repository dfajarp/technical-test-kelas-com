<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PenguranganBiayaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pengurangan_biaya')->insert([
            [
                'nama_biaya' => 'admin',
                'persen_biaya' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),

            ],
            [
                'nama_biaya' => 'ppn',
                'persen_biaya' => 10,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
