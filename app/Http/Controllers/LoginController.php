<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LoginService;
use App\Http\Requests;

class LoginController extends Controller
{
    public function login()
    {
        session_start();
        if (isset($_SESSION['logado'])){
            if ($_SESSION['logado'] != 'sim'){
                return view('login/login');
            } else {
                return redirect()->route('home');
            }
        } else {
            $_SESSION['logado'] = 'nao';
            return view('login/login');
        }
    }

    public function logar(Request $request)
    {
        session_start();
        $email = $request['email'];
        $senha = $request['senha'];

        if($email != '' && $senha != '') {
            $loginService = new LoginService();
            $resultado = $loginService->preparaLoginUsuario($email, $senha);

            if ($resultado == true) {
                $_SESSION['logado'] = 'sim';
                return redirect()->route('home');
            }
        }

        return redirect()->route('login');
    }

    public function sair(){
        session_start();
        $_SESSION['logado'] = 'nao';
        session_destroy();
        return redirect()->route('login');
    }
}
