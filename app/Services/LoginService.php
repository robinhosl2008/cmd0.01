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

        $objUsuario = new Usuario('', '', $email, $senhaMD5, 'ativo', '');

        $usuarioRepository = new UsuarioRepository();
        $usuario = $usuarioRepository->verificaUsuario($objUsuario);

        $resposta = array();
        if (gettype($usuario) == 'object') {
            if ($usuario->getStatus() == 'ativo') {
                $resposta['tipo_mensagem'] = "success";
                $resposta['mensagem'] = "Usuário ".$usuario->getNome()." logado com sucesso!";
                $resposta['logado'] = "sim";

                $_SESSION['logado'] = "sim";
                $_SESSION['usuario_id'] = $usuario->getId();
                return $resposta;
            }
            // Este bloco valida se o usuário está ativo ou inativo no sistema pelo adm.
            //else {
//                $_SESSION['tipo_mensagem'] = "warning";
//                $_SESSION['mensagem'] = "Usuário inativo. Entre em contato com o seu administrador!";
//                $_SESSION['status'] = "inativo";
//                return false;
//            }
        } elseif ($usuario == 0) {
            $resposta['tipo_mensagem'] = "warning";
            $resposta['mensagem'] = "Senha incorreta!";
            $_SESSION['logado'] = "nao";
            return $resposta;
        } elseif ($usuario == 1) {
            $resposta['tipo_mensagem'] = "warning";
            $resposta['mensagem'] = "Usuário não cadastrado!";
            $_SESSION['logado'] = "nao";
            return $resposta;
        }
    }

    public function deslogaUsuario($id) {
        $usuarioRepository = new UsuarioRepository();
        $usuarioRepository->deslogaUsuario($id);
    }
}