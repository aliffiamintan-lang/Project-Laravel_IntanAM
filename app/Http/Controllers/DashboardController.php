<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard
     */
    public function index()
    {
        // Hitung jumlah data
        $jumlahKelas = Kelas::count();
        $jumlahSiswa = Siswa::count();

        // Kirim data ke view dashboard
        return view('dashboard.dashboard', [
            'jumlahKelas' => $jumlahKelas,
            'jumlahSiswa' => $jumlahSiswa,
        ]);
    }
}
