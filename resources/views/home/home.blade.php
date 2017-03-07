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

        <title>PEBMED - ADMIN - HOME</title>

        <!-- Icon browser tab -->
        <link rel="shortcut icon" href="{{ asset('/img/pebmed-60.png') }}">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" type="text/css" href="{{ asset('/css/bootstrap.min.css') }}" />

        <!-- CSS DataTable -->
        <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">

        <!-- CSS do projeto -->
        <link href="{{ asset('/css/estilo.css') }}" rel="stylesheet">

        <!-- Fonts customizáveis -->
        <link href="{{ asset('/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css">

        <!-- JQuery -->
        <script src="{{ asset('/js/jquery.min.js') }}" type="text/javascript"></script>

        <!-- JS para sair do sistema -->
        <script src="{{ asset('/js/login.js') }}" type="text/javascript"></script>

        <!-- Bootstrap -->
        <script src="{{ asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>

        <script src="{{ asset('/js/custom.js') }}"></script>
{{--        <script src="{{ asset('/js/tabelas/custom.js') }}"></script>--}}

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
                <li class="dropdown">
                    <a href="" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user-circle-o" aria-hidden="true"></i> Administrador <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="cadastrar_usuario.html">Cadastrar</a>
                        </li>

                        <li>
                            <a href="listar_usuarios.html">Visualizar</a>
                        </li>



                        <li class="divider"></li>
                    </ul>
                </li>
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
                                <a href="cadastrar_usuario.html">Cadastrar</a>
                            <li>
                                <a href="listar_usuarios.html">Listar</a>
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
                            Bem-Vindo! <small>Selecione uma tarefa</small>
                        </h1>

                    </div>
                </div><!-- fim do cabeçalho interno -->


                <!-- Tabela do conteúdo em produção -->
                <div class="right_col" role="main">

                    <div class="row">
                        <div class="col-lg-12 ">

                            <div class="x_panel">
                                <div class="x_title">
                                    <h2>Conteúdo em produção</h2>
                                    <ul class="nav navbar-right panel_toolbox">


                                        <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                        </li>
                                    </ul>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">

                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                        <tr>
                                            <th>Título</th>
                                            <th>Categoria</th>
                                            <th>Conteúdista</th>

                                            <!--th>Editar</th-->

                                        </tr>
                                        </thead>
                                        <tbody>

                                        <tr>
                                            <td>Tiger</td>
                                            <td>Nixon</td>
                                            <td>System Architect</td>
                                            <!--td><a href="#" class="btn btn-ver btn-xs"><i class="fa fa-pencil-square-o"></i></a></td-->
                                        </tr>

                                        <tr>
                                            <td>Garrett</td>
                                            <td>Winters</td>
                                            <td>Accountant</td>
                                            <!--td><a href="#" class="btn btn-ver btn-xs"><i class="fa fa-pencil-square-o"></i></a></td-->

                                        </tr>
                                        <tr>
                                            <td>Ashton</td>
                                            <td>Cox</td>
                                            <td>Junior Technical Author</td>
                                            <!--td><a href="#" class="btn btn-ver btn-xs"><i class="fa fa-pencil-square-o"></i></a></td-->

                                        </tr>
                                        <tr>
                                            <td>Cedric</td>
                                            <td>Kelly</td>
                                            <td>Senior Javascript Developer</td>
                                            <!--td><a href="#" class="btn btn-ver btn-xs"><i class="fa fa-pencil-square-o"></i></a></td-->

                                        </tr>
                                        <tr>
                                            <td>Airi</td>
                                            <td>Satou</td>
                                            <td>Accountant</td>
                                            <!--td><a href="#" class="btn btn-ver btn-xs"><i class="fa fa-pencil-square-o"></i></a></td-->
                                        </tr>

                                        <tr>
                                            <td>Brielle</td>
                                            <td>Williamson</td>
                                            <td>Integration Specialist</td>
                                            <!--td><a href="#" class="btn btn-ver btn-xs"><i class="fa fa-pencil-square-o"></i></a></td-->
                                        </tr>

                                        <tr>
                                            <td>Herrod</td>
                                            <td>Chandler</td>
                                            <td>Sales Assistant</td>
                                            <!--td><a href="#" class="btn btn-ver btn-xs"><i class="fa fa-pencil-square-o"></i></a></td-->
                                        </tr>

                                        <tr>
                                            <td>Rhona</td>
                                            <td>Davidson</td>
                                            <td>Integration Specialist</td>
                                            <!--td><a href="#" class="btn btn-ver btn-xs"><i class="fa fa-pencil-square-o"></i></a></td-->

                                        </tr>

                                        <tr>
                                            <td>Colleen</td>
                                            <td>Hurst</td>
                                            <td>Javascript Developer</td>
                                            <!--td><a href="#" class="btn btn-ver btn-xs"><i class="fa fa-pencil-square-o"></i></a></td-->

                                        </tr>
                                        <tr>
                                            <td>Sonya</td>
                                            <td>Frost</td>
                                            <td>Software Engineer</td>
                                            <!--td><a href="#" class="btn btn-ver btn-xs"><i class="fa fa-pencil-square-o"></i></a></td-->
                                        </tr>

                                        <tr>
                                            <td>Jena</td>
                                            <td>Gaines</td>
                                            <td>Office Manager</td>
                                            <!--td><a href="#" class="btn btn-ver btn-xs"><i class="fa fa-pencil-square-o"></i></a></td-->
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div></a>
                        </div><!-- fim da tabela do conteúdo em produção -->



                        <!-- inicio da tabela 02 - conteúdo finalizado -->
                        <div class="right_col" role="main">

                            <div class="col-lg-12">
                                <div class="x_panel">
                                    <div class="x_title2">
                                        <h2>Conteúdo finalizado</h2>
                                        <ul class="nav navbar-right panel_toolbox2">
                                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                            </li>
                                        </ul>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="x_content">

                                            <table id="datatable-responsive" class="table table-striped table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>Título</th>
                                                        <th>Categoria</th>
                                                        <th>Conteúdista</th>
                                                        <th>Status</th>
                                                        <th>Selecionar</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                                    <tr>
                                                        <td>Tiger</td>
                                                        <td>Nixon</td>
                                                        <td>System Architect</td>
                                                        <td><i class="icon-prescricao02"><span class="label label-info">Pendente</span> </i></td>
                                                        <td>
                                                            <a href="#" class="btn btn-ver btn-xs">
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </label>
                                                                </div>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tiger</td>
                                                        <td>Nixon</td>
                                                        <td>System Architect</td>
                                                        <td><i class="icon-prescricao02"><span class="label label-info">Pendente</span> </i></td>
                                                        <td>
                                                            <a href="#" class="btn btn-ver btn-xs">
                                                                <div class="form-check">
                                                                    <label class="form-check-label">
                                                                        <input type="checkbox" class="form-check-input">
                                                                    </label>
                                                                </div>
                                                            </a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>

                                        <button class="btn btn-primary pull-right" style="margin-right: 2px;"><i class="fa fa-upload"></i> Publicar</button>
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



    {{--<div class="container">--}}
            {{--<div class="row" style="position: relative; padding-top: 10%; left: 35%;">--}}
                {{--<div class="col-sm-12" style="width: 400px;" >--}}
                    {{-- $_SESSION['usuario_id'] --}}
                    {{--<h2>Estou no home!</h2>  <a href="#" onclick="return sairSistema({{ $_SESSION['usuario_id'] }})" id="sairSistema" style="text-decoration: none">Sair</a>--}}
                    {{--<input type="hidden" name="_token" id="_token" value="{{ csrf_token() }}">--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    </body>
</html>
