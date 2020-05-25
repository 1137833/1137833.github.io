<?php
    session_start();
    if(isset($_SESSION['usuarioValido'])){
        $nombreCompleto=$_SESSION['usuarioValido']['nombre']." ".$_SESSION['usuarioValido']['apellido'];
    }else{
        header("Location: error.php");
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

    <!--darle efecto de la parte superior-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <!--este sirve para iconos de la parte izquierda-->
    <link rel="stylesheet" href="css-dashboard/dash-css.css">

    <!--modal css-->
    <link rel="stylesheet" href="css-modal/modal.css">

</head>

    <body>
        <nav class="navbar navbar-inverse navbar-global navbar-fixed-top">
            <div class="container-fluid">
                <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">DashBoard DAC</a>
                </div>
                <div id="navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-user navbar-right">
                    <li><a href="#"><span class="glyphicon glyphicon-user"></span><?php echo $nombreCompleto?></a></li>
                    <li><a href="#" data-toggle="modal" data-target="#simplemodal"><span class="glyphicon glyphicon-log-out"></span>Cerrar Sessión</a></li>
                </ul>
                </div><!--/.nav-collapse -->
            </div>
            </nav>


            <nav class="navbar-primary">
            <a href="#" class="btn-expand-collapse"><span class="glyphicon glyphicon-menu-left"></span></a>
            <ul class="navbar-primary-menu">
                <li>
                <a href="#"><span class="glyphicon glyphicon-list-alt"></span><span class="nav-label">Matricula</span></a>
                <a href="#"><span class="glyphicon glyphicon-envelope"></span><span class="nav-label">Profile</span></a>
                <a href="#"><span class="glyphicon glyphicon-cog"></span><span class="nav-label">Settings</span></a>
                <a href="#"><span class="glyphicon glyphicon-film"></span><span class="nav-label">Notification</span></a>
                <a href="#"><span class="glyphicon glyphicon-calendar"></span><span class="nav-label">Monitor</span></a>
                </li>
            </ul>
        </nav>