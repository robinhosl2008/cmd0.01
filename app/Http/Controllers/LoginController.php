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
        if (!isset($_SESSION['logado'])){
            if ($_SESSION['logado'] != 'sim'){
                return view('login/login');
            } else {
                return redirect()->route('home');
            }
        }
    }

    public function logar(Request $request)
    {
        if($request['email'] != '' && $request['senha'] != '') {
            $oRequest = $request->all();

            $usuarioService = new LoginService();
            $resultado = $usuarioService->preparaLoginUsuario($oRequest);

            print_r($resultado);
            exit;
        }

        return redirect()->route('home');
    }

    public function sair(){
        session_start();
        session_destroy();
        return redirect('/');
    }
}
