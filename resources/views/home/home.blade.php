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
                    {{-- usar jquery --}}
                    <h2>Estou no home!</h2>  <a href="#" style="text-decoration: none">Sair</a>
                    <input type="hidden" id="usuario_id" name="usuario_id" value="<?php echo $_SESSION['usuario_id']; ?>" />
                </div>
            </div>
        </div>
    </body>
</html>
