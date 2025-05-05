<?php

use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'index');
Route::view('/location', 'pages.location');
Route::view('/transportation', 'pages.transportation');
Route::view('/hotel-details', 'pages.hotel_details');
Route::view('/overview', 'pages.overview');
Route::view('/price', 'pages.ticketing');
Route::view('/food', 'pages.food');
Route::view('/destination', 'pages.destination');




Route::get('/admin/dashboard', [adminController::class, 'index'])->name('dashboard.index');
Route::get('/admin/wisata', [adminController::class, 'wisata'])->name('admin.wisata.index');
