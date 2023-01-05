<?php

namespace App\Http\Controllers;

use App\Models\DosenModel;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        $temp['profil'] = DosenModel::getIDBy('tb_dosen');

        return view('dosen.V_profil', $temp);
    }
}
