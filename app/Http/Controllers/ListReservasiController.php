<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservasi; // Tambahkan model Reservasi

class ListReservasiController extends Controller
{
    public function show($id, $nama, $tanggal, $jumlah_orang)
{
    return "Reservasi ID: $id, Nama: $nama, Tanggal: $tanggal, Jumlah Orang: $jumlah_orang";
}

}
