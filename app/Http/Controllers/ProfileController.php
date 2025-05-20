<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index()
    {
        // Jika ada data user, bisa dikirim ke view lewat compact atau langsung
        return view('profile');
    }
}
