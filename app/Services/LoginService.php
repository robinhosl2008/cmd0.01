<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 03/03/17
 * Time: 14:19
 */

namespace App\Services;

use App\Repository\UsuarioRepository;
use App\Models\Usuario;

class LoginService
{
    public function preparaLoginUsuario($email, $senha)
    {
        $senhaMD5 = md5($senha);

        $objUsuario = new Usuario('', '', $email, $senhaMD5, '');

        $usuarioRepository = new UsuarioRepository();
        $usuario = $usuarioRepository->verificaUsuario($objUsuario);

        if (sizeof($usuario) == 1) {
            if ($usuario[0]->status == 'ativo') {
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}