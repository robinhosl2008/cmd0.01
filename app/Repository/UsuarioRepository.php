<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 03/03/17
 * Time: 14:40
 */

namespace App\Repository;

use App\Infrastructure\BaseRepository;
use Illuminate\Support\Facades\DB;

class UsuarioRepository extends BaseRepository
{
    public function listaUsuarios(){
        return DB::select('select * from usuario');
    }

    public function logaUsuario($email, $senha){
        return DB::select("select * from usuario where email = '".$email."' and senha = '".$senha."'");
    }
}