<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $a = 7;
        $b = 3;
        $c = $a * $b;
        return "<h1>Hasil perkalian $a x $b adalah $c </h1>";
    }

    public function biodata()
    {
        $nama = "Rizky Ramadhan";
        $alamat = "Jl. Raya Cikarang Cibarusah";
        $umur = 18;

        return view('biodata', ['nama' => $nama, 'alamat' => $alamat, 'umur' => $umur]);
    }

    public function showJam($jam)
    {
        return "<h1>Sekarang jam" . $jam . "</h1>";
    }

    public function formulir()
    {
        return view('formulir');
    }

    public function proses(Request $request)
    {
        $nama = $request->input('nama');
        $alamat = $request->input('alamat');
        return "Nama : " . $nama . ", Alamat : " . $alamat;
    }
}
