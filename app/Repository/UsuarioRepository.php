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
    public function listaUsuarios()
    {
        return DB::select('select * from usuario');
    }

    public function verificaUsuario(Usuario $objUsuario)
    {
//        $usuario = DB::select("select * from usuario where email = '".$objUsuario->getEmail().
//            "' and status = '".$objUsuario->getStatus()."'");

        $usuario = DB::select("select * from usuario where email = '".$objUsuario->getEmail()."'");

        if (sizeof($usuario) == 1) {
            if ($usuario[0]->senha == $objUsuario->getSenha()) {
                foreach ($usuario as $u) {
                    $objUsuario->setId($u->id);
                    $objUsuario->setNome($u->nome);
                    $objUsuario->setEmail($u->email);
                    $objUsuario->setSenha($u->senha);
                    $objUsuario->setStatus($u->status);
                    $objUsuario->setLogado($u->logado);

                    if ($objUsuario->getLogado() == "nao") {
                        $this->logaUsuario($u->id);
                    }

                    return $objUsuario;
                }
            } else {
                // Senha incorreta.
                return 0;
            }
        } else {
            // Usuario não cadastrado.
            return 1;
        }
    }
    
    public function logaUsuario($id)
    {
        DB::select("UPDATE usuario SET logado = 'sim' WHERE id = ".$id);
    }
}