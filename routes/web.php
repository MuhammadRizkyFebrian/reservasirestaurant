<?php

use Illuminate\Support\Facades\Route;

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