<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Data dummy, ganti dengan query ke database jika sudah tersedia
        $totalWisata = 40;
        $totalPengunjung = 50;
        $pengunjungAktif = 60;

        return view('admin.dashboard.dashboard', compact('totalWisata', 'totalPengunjung', 'pengunjungAktif'));
    }
}
