<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class LatihanController extends Controller
{
    public function home()
    {
        return "Oke ini Latihan Controller menggunakan class";
    }

    public function beranda()
    {
        $data = array('nama' => 'Indah Kurniani');
        return view('beranda', $data);
    }
}
