<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class HistoryTontonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $now = Carbon::now();
        $oneMonthAgo = $now->copy()->subMonth();

        DB::table('history_tonton')->insert([
            [
                'id_kelas' => 1,
                'id_user' => 1,
                'durasi_tonton' =>  10,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id_kelas' => 2,
                'id_user' => 1,
                'durasi_tonton' =>  10,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'id_kelas' => 1,
                'id_user' => 2,
                'durasi_tonton' =>  30,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            
        ]);
    }

    private function randomDate(Carbon $startDate, Carbon $endDate)
    {
        return Carbon::createFromTimestamp(mt_rand($startDate->timestamp, $endDate->timestamp));
    }
}
