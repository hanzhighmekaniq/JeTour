<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\CulinaryController;
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
    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard.index');
    Route::resource('destination', DestinationController::class);
    Route::resource('culinary', CulinaryController::class);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/admin/dashboard', [adminController::class, 'index'])->name('dashboard.index');
Route::get('/admin/wisata', [adminController::class, 'wisata'])->name('admin.wisata.index');
require __DIR__ . '/auth.php';

