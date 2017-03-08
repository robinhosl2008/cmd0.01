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

        <title>PEBMED - Lista de Usuários</title>

        <!-- Icon browser tab -->
        <link rel="shortcut icon" href="{{ asset('/img/pebmed-60.png') }}">

        <script src="{{ asset('/js/jquery.min.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/login.js') }}" type="text/javascript"></script>
        <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/login.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/custom.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/estilo.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/font-awesome.min.css') }}">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>

    <body>

    <div id="wrapper">

        <!-- Inicio da navegação -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <!-- logo e menu toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Menu Toggle mobile</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html"><img src="{{ asset('/img/logo_peb.png') }}" class="img-responsive" alt=""></a>
            </div>

            <!-- Barra de menu superior -->
            <ul class="nav navbar-right top-nav">
                {{--<li class="dropdown">--}}
                {{--<a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Administrador <b class="caret"></b></a>--}}
                {{--<ul class="dropdown-menu">--}}
                {{--<li>--}}
                {{--<a href="cadastrar_usuario.html">Cadastrar</a>--}}
                {{--</li>--}}

                {{--<li>--}}
                {{--<a href="listar_usuarios.html">Visualizar</a>--}}
                {{--</li>--}}



                {{--<li class="divider"></li>--}}
                {{--</ul>--}}
                {{--</li>--}}
                <li>
                    <a href="#" onclick="return sairSistema({{ $_SESSION['usuario_id'] }})"><i class="fa fa-fw fa-sign-out"></i>Sair</a>
                    <input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">
                </li>
            </ul>
            <div class="main-nav" ></div><!--fim-->

            <!-- Menu lateral -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw fa-home"></i> Home</a>
                    </li>

                    <li>
                        <a href="listar_conteudo.html"><i class="fa fa-files-o"></i> Listar categorias</a>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#conteudos"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Conteúdo <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="conteudos" class="collapse">

                            <li>
                                <a href="criar_conteudo.html">Criar conteúdo</a>
                            </li>

                            <li>
                                <a href="editar_conteudo.html">Editar conteúdo</a>
                            </li>

                        </ul>
                    </li>

                    <li>
                        <a href="javascript:;" data-toggle="collapse" data-target="#admin"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Administrador <i class="fa fa-fw fa-caret-down"></i></a>
                        <ul id="admin" class="collapse">
                            <li>
                                <a href="/cadastrar-usuario">Cadastrar</a>
                            <li>
                                <a href="/listar-usuario">Listar</a>
                            </li>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav><!-- fim navevegação-->


        <!-- conteúdo da página -->
        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Cabeçalho da página interna e bradcrunb -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Listar <small>usuários</small>
                        </h1>

                    </div>
                </div><!-- fim do cabeçalho interno -->


                <!-- inicio da tabela 02 - conteúdo finalizado -->
                <div class="right_col" role="main">

                    <div class="col-lg-12">
                        <div class="x_panel">

                            <div class="x_content">

                                <table id="datatable-responsive" class="table table-striped table-bordered">
                                    <thead>
                                    <tr>
                                        <th>Nome</th>
                                        <th>ID Usuário</th>
                                        <th>E-mail</th>
                                        <!--th></th-->
                                    </tr>
                                    </thead>
                                    <tbody>


                                    <tr>
                                        <td>Clara</td>
                                        <td>402020</td>
                                        <td>conteudista@pebmed.com.br</td>

                                    </tr>



                                    <tr>
                                        <td>Gabriel</td>
                                        <td>301040</td>
                                        <td>conteudista@pebmed.com.br</td>

                                    </tr>


                                    </tbody>
                                </table>
                                <!--button class="btn btn-primary pull-right" style="margin-right: 2px;"><i class="fa fa-upload"></i> Publicar</button-->
                            </div>
                        </div>
                    </div>
                </div><!-- Fim da tabela de conteúdos finalizado -->

            </div>
        </div>
    </div><!-- fim do page-wrapper - contúdo central da página -->
    
    <!-- Jquery e Bootstrap de Datatables -->
    <script src="{{ asset('/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('/js/dataTables.bootstrap.min.js') }}"></script>
    <link href="{{ asset('/css/dataTables.bootstrap.min.css') }}"/>

    <!-- Scripts customizável -->
    <script src="{{ asset('/js/tabelas/custom.js') }}"></script>

    <!-- Script de retorno dos campos das Datatables -->
    <script>
        $(document).ready(function() {
            var handleDataTableButtons = function() {
                if ($("#datatable-buttons").length) {
                    $("#datatable-buttons").DataTable({
                        dom: "Bfrtip",
                        buttons: [
                            {
                                extend: "copy",
                                className: "btn-sm"
                            },
                            {
                                extend: "csv",
                                className: "btn-sm"
                            },
                            {
                                extend: "excel",
                                className: "btn-sm"
                            },
                            {
                                extend: "pdfHtml5",
                                className: "btn-sm"
                            },
                            {
                                extend: "print",
                                className: "btn-sm"
                            },
                        ],
                        responsive: true
                    });
                }
            };

            TableManageButtons = function() {
                "use strict";
                return {
                    init: function() {
                        handleDataTableButtons();
                    }
                };
            }();

            $('#datatable').dataTable();

            $('#datatable-keytable').DataTable({
                keys: true
            });

            $('#datatable-responsive').DataTable();

            $('#datatable-fixed-header').DataTable({
                fixedHeader: true
            });

            var $datatable = $('#datatable-checkbox');

            $datatable.dataTable({
                'order': [[ 1, 'asc' ]],
                'columnDefs': [
                    { orderable: false, targets: [0] }
                ]
            });

            $datatable.on('draw.dt', function() {
                $('input').iCheck({
                    checkboxClass: 'icheckbox_flat-green'
                });
            });

            TableManageButtons.init();
        });
    </script><!-- fim dos scripts das Datatables -->

    </body>
</html>
