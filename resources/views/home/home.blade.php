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
                <div class="col-sm-12" style="width: 400px;" >
                    {{-- $_SESSION['usuario_id'] --}}
                    <h2>Estou no home!</h2>  <a href="#" onclick="return sairSistema({{ $_SESSION['usuario_id'] }})" id="sairSistema" style="text-decoration: none">Sair</a>
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                </div>
            </div>
        </div>
    </body>
</html>
