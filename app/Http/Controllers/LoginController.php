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
    { // 202cb962ac59075b964b07152d234b70
        session_start();
        $oRequest = $request->all();

        if($oRequest['senha'] && $oRequest['email']) {
            $senhaMD5 = md5($oRequest['senha']);
            
            if($senhaMD5 == '202cb962ac59075b964b07152d234b70') {
                $_SESSION['id'] = $senhaMD5;
            }
        }
        return view('home/home');
    }
}
