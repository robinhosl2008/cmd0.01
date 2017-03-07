<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 02/03/17
 * Time: 10:29
 */

?>

<!doctype html>
<html>
    <head>
        <meta http-equiv="Content-Language" content="pt-br">
        <meta charset="UTF-8">
        <script src="{{ asset('/js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/usuario.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/usuario.css') }}" />
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div class="row" style="position: relative; padding-top: 10%; left: 35%;">
                <div class="col-sm-12" style="width: 400px;">
                    <div id="alertLogin"></div>

                    <form class="form-group" id="formLogin">
                        <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div class="formLogin">
                                <label for="email" class="col-sm-12">E-mail: </label>
                                <input class="form-control col-sm-6" onkeypress="limpaEmailLogin()" type="email" name="email" id="email" />
                                <i class="alertaFormLoginEmail">Este campo é obrigatório!</i>
                            </div>
                        </div>
                        <div class="row">
                            <div class="formLogin">
                                <label for="senha" class="col-sm-12">Senha: </label>
                                <input class="form-control col-sm-6" onkeypress="limpaSenhaLogin()" type="password" name="senha" id="senha" />
                                <i class="alertaFormLoginSenha">Este campo é obrigatório!</i>
                            </div>
                        </div>
                        <div class="row">
                            <div style="padding-top: 20px">
                                <input type="button" onclick="return submitLogin()" style="width: 100px" class="btn btn-info form-control" value="Entrar" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
