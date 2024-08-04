<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MentorModel;
use Illuminate\Http\Request;

class DistributionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $MentorModel = new MentorModel();
        $get_semua_kelas = $MentorModel->getDataAllClasses();
        $get_per_kelas = $MentorModel->getDataPerClasses();

        $mentorRevenue = [];
        foreach ($get_semua_kelas as $key => $value) {
            $totalRevenue = $this->calculateNetRevenue($value->harga);
            $penjumlahan = 0;
            foreach ($get_per_kelas as $k => $val) {
                if ($value->id_mentor == $val->id_mentor && $value->id_user == $val->id_user) {
                    $calculateWatchTimePercentage = $this->calculateWatchTimePercentage($val->durasi_per_kelas, $value->total_durasi_tonton);
                    // Menambahkan revenue ke dalam array $mentorRevenue
                    $mentorRevenue[$val->nama_mentor][$value->nama_paket][] = $totalRevenue + (($calculateWatchTimePercentage / 100) * $totalRevenue);
                }
            }
        }

        // Inisialisasi array untuk menyimpan hasil akhir
        $finalMentorRevenue = [];

        foreach ($mentorRevenue as $mentorId => $packages) {
            foreach ($packages as $packageName => $revenues) {
                // Menjumlahkan semua revenue untuk satu mentor dan paket
                $finalMentorRevenue[$mentorId][$packageName] = array_sum($revenues);
            }
        }

        return response()->json($finalMentorRevenue, 200);

    }


    private function calculateNetRevenue($amountPaid)
    {
        $adminFee = 0.20; // 20% biaya admin, PPN, dll.
        $netRevenue = $amountPaid * (1 - $adminFee); // Hasil setelah pemotongan biaya
        return $netRevenue / 2; // Mentor mendapatkan setengah dari hasil bersih
    }

    private function calculateWatchTimePercentage($watchDuration, $totalDuration)
    {
        return $totalDuration / $watchDuration; // Persentase waktu tonton
    }

}
