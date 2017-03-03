<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 03/03/17
 * Time: 14:40
 */

namespace App\Repository;

use Illuminate\Support\Facades\DB;
use App\Models\Usuario;

class UsuarioRepository
{
    public function listaUsuarios(){
        return DB::select('select * from usuario');
    }

    public function verificaUsuario(Usuario $objUsuario)
    {
        return DB::select("select * from usuario where email = '".$objUsuario->getEmail().
            "' and senha = '".$objUsuario->getSenha()."' and status = '".$objUsuario->getStatus()."'");
    }
}