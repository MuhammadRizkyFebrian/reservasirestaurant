<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Praktikum 5 Muhammad Rizky Febrian (3312401082) + View Profile
Route::get('/Rizky', function () {
    return view('praktikum5(3312401082)');
});

Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
