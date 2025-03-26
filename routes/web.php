<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ListReservasiController;
use Illuminate\Http\Request;


Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::get('/register', [RegisterController::class, 'show'])->name('register');
Route::get(
    '/listereservasi/{id}/{nama}/{tanggal}/{jumlah_orang}',
    [ListReservasiController::class, 'show']
)->name('list.reservasi.detail');

// P4 Bagian B By: Muhammad Rizky Febrian (3312401082)
Route::get('/TentangKami', function () {
    return view('TentangKami');
})->name('TentangKami');

Route::get('/bantuan', function () {
    return view('bantuan');
})->name('bantuan');

Route::get('/FormulirPemesanan', function () {
    return view('FormulirPemesanan');
})->name('FormulirPemesanan');

Route::get('/forgetpw', function () {
    return view('forgetpw');
})->name('forgetpw');

Route::get('/tagihan', function () {
    return view('tagihan');
});

Route::get('/proses_pembayaran', function () {
    return view('proses_pembayaran');
});

Route::post('/proses_pembayaran', function (Request $request) {
    return "Pembayaran berhasil diproses untuk " . $request->nama . " sejumlah Rp " . number_format($request->jumlah, 0, ',', '.') . " melalui metode " . ucfirst($request->metode);
});


// P4 Bagian B oleh Rafles Yuda Stevenses Nababan, 3312401062
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

Route::get('/pilihkursi', function () {
    return view('pilihkursi');
})->name('pilihkursi');
