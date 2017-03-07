<?php
/**
 * Created by PhpStorm.
 * User: dev
 * Date: 02/03/17
 * Time: 10:29
 */

?>

<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>PEBMED - ADMINA - Login</title>
        <!-- Icon browser tab -->
        <link rel="shortcut icon" href="{{ asset('/img/pebmed-60.png') }}">
        <!-- Bootstrap CSS -->
        {{--<link href="assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">--}}
                <!-- CSS do projeto -->

        <script src="{{ asset('/js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/login.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/usuario.css') }}" />
    </head>
    <body>
        <!-- inicio main-nav -->
        <div class="main-nav" ></div>
        <div class="container">
            <div id="alertLogin"></div>
            <div class="card card-container">
                <img id="profile-img" class="profile-img-card" src="{{ asset('/img/logo_peb.png') }}" class="img-responsive" alt="" />
                <p class="versao">ADMIN - Versão 1.0</p>
                <p id="profile-name" class="profile-name-card"></p>

                <!-- Início do campo form de login -->
                <form class="form-signin" id="formLogin">
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                    <span id="reauth-email" class="reauth-email"></span>

                    <input type="email" id="inputEmail" onkeypress="limpaEmailLogin()" class="form-control" placeholder="Usuário" required autofocus>
                    <i class="alertaFormLoginEmail">Este campo é obrigatório!</i>

                    <input type="password" id="inputPassword" onkeypress="limpaPasswordLogin()" class="form-control" placeholder="Senha" required>
                    <i class="alertaFormLoginSenha">Este campo é obrigatório!</i>

                    <div id="remember" class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me"> Lembrar
                        </label>
                    </div>

                    <input type="button" onclick="return submitLogin()" class="btn btn-lg btn-primary btn-block btn-signin" value="Fazer login" />
                </form><!-- Fim-->
            </div>
        </div>



    {{--<div class="container">--}}
            {{--<div class="row" style="position: relative; padding-top: 10%; left: 35%;">--}}
                {{--<div class="col-sm-12" style="width: 400px;">--}}
                    {{--<div id="alertLogin"></div>--}}
                    {{--<form class="form-group" id="formLogin">--}}
                        {{--<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">--}}
                        {{--<div class="row">--}}
                            {{--<div class="formLogin">--}}
                                {{--<label for="email" class="col-sm-12">E-mail: </label>--}}
                                {{--<input class="form-control col-sm-6" onkeypress="limpaEmailLogin()" type="email" name="email" id="email" />--}}
                                {{--<i class="alertaFormLoginEmail">Este campo é obrigatório!</i>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div class="formLogin">--}}
                                {{--<label for="senha" class="col-sm-12">Senha: </label>--}}
                                {{--<input class="form-control col-sm-6" onkeypress="limpaSenhaLogin()" type="password" name="senha" id="senha" />--}}
                                {{--<i class="alertaFormLoginSenha">Este campo é obrigatório!</i>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="row">--}}
                            {{--<div style="padding-top: 20px">--}}
                                {{--<input type="button" onclick="return submitLogin()" style="width: 100px" class="btn btn-info form-control" value="Entrar" />--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </body>
</html>
