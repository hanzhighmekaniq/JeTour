<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\KulinerController;
use App\Http\Controllers\PenginapanController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::view('/', 'index');
Route::view('/location', 'pages.location');
Route::view('/transportation', 'pages.transportation');
Route::view('/hotel-details', 'pages.hotel_details');
Route::view('/overview', 'pages.overview');
Route::view('/price', 'pages.ticketing');
Route::view('/food', 'pages.food');
Route::view('/destination', 'pages.destination');

Route::middleware(['auth', 'verified'])->prefix('admin')->name('admin.')->group(function () {
    Route::resource('destination', DestinationController::class);
    Route::resource('culinary', CulinaryController::class);
    Route::get('/destination', [DestinationController::class, 'index'])->name('destination.index');
    Route::get('/destination/create', [DestinationController::class, 'create'])->name('destination.create');
    Route::post('/destination', [DestinationController::class, 'store'])->name('destination.store');
    Route::get('/destination/{destination}/edit', [DestinationController::class, 'edit'])->name('destination.edit');
    Route::put('/destination/{destination}', [DestinationController::class, 'update'])->name('destination.update');
    Route::delete('/destination/{destination}', [DestinationController::class, 'destroy'])->name('destination.destroy');
    Route::get('/kuliner', [KulinerController::class, 'index'])->name('kuliner.index');
    Route::get('/kuliner/create', [KulinerController::class, 'create'])->name('kuliner.create');
    Route::post('/kuliner', [KulinerController::class, 'store'])->name('kuliner.store');
    Route::get('/kuliner/{kuliner}/edit', [KulinerController::class, 'edit'])->name('kuliner.edit');
    Route::put('/kuliner/{kuliner}', [KulinerController::class, 'update'])->name('kuliner.update');
    Route::delete('/kuliner/{kuliner}', [KulinerController::class, 'destroy'])->name('kuliner.destroy');
    Route::get('/penginapan', [PenginapanController::class, 'index'])->name('penginapan.index');
    Route::get('/penginapan/create', [PenginapanController::class, 'create'])->name('penginapan.create');
    Route::post('/penginapan', [PenginapanController::class, 'store'])->name('penginapan.store');
    Route::get('/penginapan/{penginapan}/edit', [PenginapanController::class, 'edit'])->name('penginapan.edit');
    Route::put('/penginapan/{penginapan}', [PenginapanController::class, 'update'])->name('penginapan.update');
    Route::delete('/penginapan/{penginapan}', [PenginapanController::class, 'destroy'])->name('penginapan.destroy');
});

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        // Dummy data, ganti dengan query ke database jika sudah ada
        $totalWisata = 40;
        $totalPengunjung = 50;
        $pengunjungAktif = 60;
        return view('admin.dashboard.dashboard', compact('totalWisata', 'totalPengunjung', 'pengunjungAktif'));
    })->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

 //Route::resource('destination', DestinationController::class);

Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('dashboard.index');

require __DIR__ . '/auth.php';

