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
        echo isset($_SESSION['id']);
        if(!isset($_SESSION['id'])) {
            return view('login/login');
        }else{
            return redirect()->route('home');
        }
    }

    public function logar(Request $request)
    {
        session_start();
        if($request->all()) {
            $oRequest = $request->all();

            $usuarioService = new LoginService();

            if ($oRequest['senha'] != '' && $oRequest['email'] != '') {
                $senhaMD5 = md5($oRequest['senha']);
                $usuario = $usuarioService->preparaLoginUsuario($oRequest['email'], $senhaMD5);

                if ($senhaMD5 == $usuario[0]->senha) {
                    $_SESSION['id'] = session_id();
                    $_SESSION['usuario'] = $usuario->nome;
                    $_SESSION['id_usuario'] = $usuario->id;
                } else {
                    return redirect()->route('login');
                }
            } else {
                return redirect()->route('login');
            }
        }

        return redirect()->route('home');
    }

    public function sair(){
        session_start();
        session_destroy();
        return redirect('/');
    }
}
