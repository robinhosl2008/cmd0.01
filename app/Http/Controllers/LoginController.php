<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function login()
    {
        return view('login')->with('nome', 'Robson');
    }
}
