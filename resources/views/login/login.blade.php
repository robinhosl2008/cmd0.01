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
        <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}" />
        <title>Login</title>
    </head>
    <body>
        <div class="container">
            <div class="row" style="position: relative; padding-top: 10%; left: 35%;">
                <div class="col-sm-12" style="width: 400px;" >
                    <form method="post" action="logar" class="form-group">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="row">
                            <div>
                                <label for="email" class="col-sm-4">E-mail:</label>
                                <input class="form-control col-sm-6" type="email" name="email" id="email" />
                            </div>
                        </div>
                        <div class="row">
                            <div>
                                <label for="senha" class="col-sm-4">Senha:</label>
                                <input class="form-control col-sm-6" type="password" name="senha" id="senha" />
                            </div>
                        </div>
                        <div class="row">
                            <div style="padding-top: 20px">
                                <input type="submit" style="width: 100px" class="btn btn-info form-control" value="Entrar" />
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
