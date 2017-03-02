<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if($request){
            $this->logar($request->all());
        }else {
            return view('login/login');
        }
    }

    public function logar($request)
    { // 202cb962ac59075b964b07152d234b70
        session_start();

        if($request['senha'] && $request['email']) {
            $senhaMD5 = md5($request['senha']);
            
            if($senhaMD5 == '202cb962ac59075b964b07152d234b70') {
                $_SESSION['id'] = $senhaMD5;
            }else{
                return view('login/login');
            }
        }

        return view('home/home');
    }

    public function sair(){
        session_start();
        session_destroy();
        return view('login/login');
    }
}
