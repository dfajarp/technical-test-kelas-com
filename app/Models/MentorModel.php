<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class MentorModel extends Model
{
    use HasFactory;
    protected $table = 'mentor';

    public function getDataAllClasses()
    {
        $results = DB::table('history_tonton as a')
            ->select([
                'a.id_user',
                'b.id_mentor',
                'pl.nama_paket',
                'c.nama as nama_mentor',
                DB::raw("DATE_FORMAT(a.created_at, '%Y-%m') AS month"),
                DB::raw("SUM(a.durasi_tonton) AS total_durasi_tonton"),
                'pl.harga'
            ])
            ->leftJoin('kelas as b', 'b.id', '=', 'a.id_kelas')
            ->leftJoin('mentor as c', 'c.id', '=', 'b.id_mentor')
            ->leftJoin('users as d', 'd.id', '=', 'a.id_user')
            ->leftJoin('paket_langganan as pl', 'pl.id', '=', 'd.id_paket')
            ->where(DB::raw("DATE_FORMAT(a.created_at, '%Y-%m')"), '=', DB::raw("DATE_FORMAT(CURDATE(), '%Y-%m')"))
            ->groupBy(
                'a.id_user',
                'b.id_mentor',
                DB::raw("DATE_FORMAT(a.created_at, '%Y-%m')")
            )
            ->get();

        return $results;
    }

    public function getDataPerClasses()
    {
        $results = DB::table('history_tonton as a')
            ->select([
                'a.id_kelas',
                'a.id_user',
                'b.id_mentor',
                DB::raw("DATE_FORMAT(a.created_at, '%Y-%m') AS month"),
                'c.nama as nama_mentor',
                DB::raw("SUM(a.durasi_tonton) AS durasi_per_kelas")
            ])
            ->leftJoin('kelas as b', 'b.id', '=', 'a.id_kelas')
            ->leftJoin('mentor as c', 'c.id', '=', 'b.id_mentor')
            ->leftJoin('users as d', 'd.id', '=', 'a.id_user')
            ->leftJoin('paket_langganan as pl', 'pl.id', '=', 'd.id_paket')
            ->where(DB::raw("DATE_FORMAT(a.created_at, '%Y-%m')"), '=', DB::raw("DATE_FORMAT(CURDATE(), '%Y-%m')"))
            ->groupBy(
                'a.id_kelas',
                'a.id_user',
                'b.id_mentor',
                DB::raw("DATE_FORMAT(a.created_at, '%Y-%m')")
            )
            ->get();

        return $results;
    }

}
