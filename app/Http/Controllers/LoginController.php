<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function login()
    {
        return view('login/login');
    }

    public function logar(Request $request)
    {
        $email = $request->all();
        echo "<pre>";
        print_r($email);
        exit;
    }
}
