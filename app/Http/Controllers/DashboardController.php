<?php

namespace App\Http\Controllers;

use App\Models\Culinary;
use Midtrans\Transaction;
use App\Models\Destination;
use App\Models\Transactions;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $totalWisata = Destination::count();
        $totalPengunjung = Transactions::count();
        $totalKuliner = Culinary::count();

        $popularDestination = Destination::select('destinations.*', DB::raw('SUM(detail_transactions.quantity) as total_tiket_terjual'))
            ->join('tickets', 'tickets.destination_id', '=', 'destinations.id')
            ->join('detail_transactions', 'detail_transactions.ticket_id', '=', 'tickets.id')
            ->groupBy('destinations.id')
            ->orderByDesc('total_tiket_terjual')
            ->limit(4)
            ->get();

        return view('admin.dashboard.dashboard', compact('totalWisata', 'totalPengunjung', 'totalKuliner', 'popularDestination'));
    }
}
