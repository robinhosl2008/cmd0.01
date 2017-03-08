<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;

class UsuarioController extends Controller
{
    public function listar() {
        session_start();
        return view('usuario/listar-usuario');
    }

    public function cadastrar() {
        return view('usuario/cadastrar-usuario');
    }

    public function editar() {
        return view('usuario/editar-usuario');
    }

    public function deletar() {

    }
}
