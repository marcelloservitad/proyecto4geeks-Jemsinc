<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Categorias </title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="../dashboard/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="../dashboard/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Light Bootstrap Table core CSS    -->
    <link href="../dashboard/assets/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


    <!--  CSS for Demo Purpose, don't include it in your project     -->
    <link href="../dashboard/assets/css/demo.css" rel="stylesheet" />


    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
    <link href="../dashboard/assets/css/pe-icon-7-stroke.css" rel="stylesheet" />
</head>
<body>

<div class="wrapper">
    <div class="sidebar" data-color="red" data-image="assets/img/sidebar-5.jpg">

    <!--   you can change the color of the sidebar using: data-color="blue | azure | green | orange | red | purple" -->


    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="http://www.creative-tim.com" class="simple-text">
                   Jems Inc
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="{{ url('admin/categorias-dashboard')}}">
                        <i class="pe-7s-graph"></i>
                        <p>Index Categorias</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/categorias-user') }}">
                        <i class="pe-7s-user"></i>
                        <p>Admin</p>
                    </a>
                </li>
              
                <li class="{{ url('admin/categorias-create-dashboard') }}">
                    <a href="typography">
                        <i class="pe-7s-tools"></i>
                        <p>Crear</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/icons') }}">
                        <i class="pe-7s-trash"></i>
                        <p>Borrar</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/maps') }}">
                        <i class="pe-7s-pen"></i>
                        <p>Editar</p>
                    </a>
                </li>
                <li>
                    <a href="{{ url('admin/notifications') }}">
                        <i class="pe-7s-server"></i>
                        <p>Actualizar</p>
                    </a>
                </li>
				
            </ul>
    	</div>
    </div>

    <div class="main-panel">
        <nav class="navbar navbar-default navbar-fixed">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Crear</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-left">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="fa fa-dashboard"></i>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="fa fa-globe"></i>
                                    <b class="caret"></b>
                                    <span class="notification">0</span>
                              </a>
                         
                        </li>
                        <li>
                           <a href="">
                                <i class="fa fa-search"></i>
                            </a>
                        </li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li>
                           <a href="">
                               Cuenta
                            </a>
                        </li>
                     
                        </li>
                        <li>
                            <a href="#">
                              Salir
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>