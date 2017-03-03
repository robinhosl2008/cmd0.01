<?php

namespace App\Infrastructure;

class BCrypt {

    public static function encrypt($senha){
        return crypt($senha);
    }

    public static function matches($senha, $crypt){

        if(crypt($senha, $crypt) == $crypt){
            return true;
        }

        return false;
    }
}