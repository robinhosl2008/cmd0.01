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
    public function preparaLoginUsuario($oRequest)
    {
        if ($oRequest['senha'] != '' && $oRequest['email'] != '') {
            $senhaMD5 = md5($oRequest['senha']);

            $objUsuario = new Usuario('', '', $oRequest['email'], $senhaMD5);

            $usuarioRepository = new UsuarioRepository();
            $usuario = $usuarioRepository->logaUsuario($objUsuario);

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
}