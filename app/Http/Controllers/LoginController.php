<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function showLoginForm()
    {
    $data = array('title' => 'Login');
    return view('auth.login', $data);
    }
}
