<?php

use App\Http\Controllers\Category;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DestinationController;
use App\Http\Controllers\CulinaryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ExcurtionController;
use App\Http\Controllers\LodgingController;
use App\Http\Controllers\TicketController;
use App\Http\Controllers\Transaction;
use App\Http\Controllers\TransactionController;
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

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::resource('destination', DestinationController::class);
    Route::resource('culinary', CulinaryController::class);
    Route::resource('lodging', LodgingController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('transaction', TransactionController::class);
 //   Route::resource('excurtion', ExcurtionController::class);
    Route::resource('ticket', TicketController::class);
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});





//Route::resource('destination', DestinationController::class);


require __DIR__ . '/auth.php';
