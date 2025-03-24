<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ListReservasiController;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::get('/listereservasi/{id}/{nama}/{tanggal}/{jumlah_orang}', 
    [ListReservasiController::class, 'show']
)->name('list.reservasi.detail');
