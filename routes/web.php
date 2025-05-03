<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

// Route profile
Route::get('/profile', function () {
    return view('pages.profile');
});

// Route Daftar Meja
Route::get('/admin/meja', function () {
    return view('pages.dashboard admin.meja');
});

// Route Daftar Pelanggan
Route::get('/admin/pelanggan', function () {
    return view('pages.dashboard admin.pelanggan');
});

// Route Daftar Pemesanan
Route::get('/admin/pemesanan', function () {
    return view('pages.dashboard admin.pemesanan');
});


// Route autentikasi
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route registrasi
Route::get('/register', [AuthController::class, 'showRegisterForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// Route reset password
Route::get('/forgot-password', [AuthController::class, 'showForgotPasswordForm'])->name('password.request');
Route::post('/reset-password', [AuthController::class, 'resetPassword'])->name('password.update');
