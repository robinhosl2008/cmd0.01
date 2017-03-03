<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuario;

use App\Http\Requests;

class HomeController extends Controller
{
    public function home()
    {
        session_start();
        if(!isset($_SESSION['id'])){
            return redirect('/');
        }else{
            $usuarioModel = new Usuario();
            $usuarios = $usuarioModel->listaUsuarios();
            return view('home/home')->with('usuarios', $usuarios);
        }
    }
}
