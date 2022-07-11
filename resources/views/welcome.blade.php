<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CV APP</title>

        <!-- Styles -->
        <link href="{{ asset('/css/00000000-0000-0000-0000-000000000002.css') }}" rel="stylesheet">
        <link href="{{ asset('/css/Roboto-300-400-500-700.css') }}" rel="stylesheet">
    </head>
    <body >


    <!-- /.navbar.navbar-aysa -->
    <div class="container header hidden-xs visible-sm-block visible-md-block visible-lg-block">

        <!-- /.row -->
        <div class="row">
            <div class="col-md-12 col-sm-10 no-pd">
                <nav class="navbar navbar-aysa">
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav" id="menu">
                            <li class="dropdown">
                                <a href="{{ url('/home') }}" class="dropdown-toggle" role="button" aria-haspopup="true"
                                    aria-expanded="false">Trabajá con nosotros</a>
                                <ul class="dropdown-menu"></ul>
                            </li>
                        </ul>
                    </div>
                    <!-- /.navbar-collapse -->
                </nav>
            </div>
            <!-- /.col-sm-10 -->
            <!--
        <div class="col-md-3 col-sm-2">
            <a href="#" class="btn-main btn-proveedores">
                    Proveedores <span class="ti-arrow-right"></span>
                </a>
        </div>-->
            <!-- /.col-sm-2 -->
        </div>
        <!-- /.row -->
    </div>


    </body>
</html>
