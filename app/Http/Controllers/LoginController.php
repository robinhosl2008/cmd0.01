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

            return json_encode($resultado);
        }
    }

    public function sair(Request $request)
    {
        session_start();
        $id = $request['id'];

        $loginService = new LoginService();
        $loginService->deslogaUsuario($id);
        session_unset();

    }
}
