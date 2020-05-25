<?php
require_once("conexion.php");

if(isset($_GET['b'])&&isset($_GET['t']))
{
  //buscar algo
  $valor=$_GET['b'];
  $tipo=$_GET['t'];
  if (empty("valor"))
  {
  $sql="SELECT *FROM docentes";
  }
  else
  {
    switch ($tipo) {
      case 1: //Busqueda por Sexo
          $sql="SELECT *FROM docentes WHERE sexo=" .$valor;
        break;
      case 2: //Busqueda por Nombre
          $sql="SELECT *FROM docentes WHERE UPPER(nombre) LIKE UPPER('%".$valor."%')";
        break;
      default: //otro casos
          $sql="SELECT *FROM docentes";
        break;
    }
  }
}
else
{
  //no hay nada que buscar
  $sql="SELECT *FROM docentes";
}

$resultado=$conexion->query($sql);
?>

<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Colegio Daniel Alcides Carrion</title>
      <link rel="icon" href="ico/logo.ico">
      <link rel="stylesheet" href="css-carousel/bootstrap.min.css">
      <link rel="stylesheet" href="css-carousel/ejemplo3.css">
  </head>
  <body>
      <!--navegacion-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        
          <div class="container">
            <a class="navbar-brand" id="navbarIE">I.E Daniel Alcides Carrion</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" style="color: #900c3f;" href="../index.html">Inicio</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: #900c3f;" href="nosotros.php">Nosotros</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: #900c3f;" href="#">Organización</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: #900c3f;" href="niveles.php">Niveles</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" style="color: #900c3f;" href="docente.php">Docentes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" style="color: #900c3f;" href="login.php">Login</a>
                </li>
              </ul>
            </div>
          </div>
      </nav>
    <header>
      <div class="contenedor">
        <img src="img/docente2.jpeg" alt="">
        <h1><div class="centrado">DOCENTES</div></h1>
      </div>
    </header>

    <section style="padding: 50px 31.5px 25px 31.5px; background: #fafafa;">
      <div class="container">
        <h4 style="text-align: left; color: #900c3f;">DANIEL ALCIDES CARRION</h4>
        <hr>

        <div id=inBuscar>
          <form action="adaptar.php" method="post">
            <div class="row">
              <div class="col-md-6" style="padding: 0px 15px 30px 15px;">
                <div class="col">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="">Sexo</label>
                    </div>
                    <select class="custom-select" id="">
                      <option selected>Selecciona...</option>
                      <option value="1">Masculino</option>
                      <option value="2">Femenino</option>
                    </select>
                  </div>
                </div>
                <div class="col">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text" id="inputGroup-sizing-default">Nombre</span>
                    </div>
                      <input type="text" class="form-control" aria-label="Default" aria-describedby="inputGroup-sizing-default">
                  </div>
                </div>
              </div>

              <div class="col-md-6" style="padding: 0px 15px 30spx 15px;">
                <div class="col">
                  <div class="input-group mb-3">
                    <div class="input-group-prepend">
                      <label class="input-group-text" for="">Enseña</label>
                    </div>
                    <select class="custom-select" id="">
                      <option selected>Selecciona...</option>
                      <option value="1">Matematica</option>
                      <option value="2">Comunicación</option>
                      <option value="2">Educación Fisica</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <!--para que funcione como link debe quitar el disable dentro de la clase-->
          <button type="button" class="btn btn-primary">Enviar</button>
        </div>
      </div>
    </section>


    <section style="padding: 31.5px 31.5px 50px 31.5px;">
    <div id="outBuscar">
      <?php
        echo "<div class='container'>";
          echo "<div class='table-responsive-md'>";
          echo "<p>Número de Docentes Registrados: ".$resultado->num_rows."</p>";
            echo "<table class='table'>";
              echo "<thead>";
                echo "<tr>";
                  echo "<th scope='col'>#</th>";
                  echo "<th scope='col'>Sexo</th>";
                  echo "<th scope='col'>Nombre</th>";
                  echo "<th scope='col'>Enseña</th>";
                  echo "<th scope='col'>Ficha</th>";
                echo "</tr>";
              echo "</thead>";
              echo "<tbody>";
                while ($fila=$resultado->fetch_array(MYSQLI_ASSOC))
                {
                  echo "<tr>";
                    echo "<th scope='row'>".$fila['id']."</th>";
                    echo "<td>".$fila['sexo']."</td>";
                    echo "<td>".$fila['nombre']."</td>";
                    echo "<td>".$fila['curso']."</td>";
                    /*<td><a href="#">ver</a></td>*/
                  echo "</tr>";
                }
              echo "</tbody>";
            echo "</table>";
          echo "</div>";
        echo "</div>";
      ?>
    </div>
    </section>

        <!-- Footer -->
    <footer class="page-footer font-small pt-4" style="background-color: #D7DBDD" >

    <!-- Footer Links -->
    <div class="container text-center text-md-left">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Content -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Nuestra Ubicación</h5>
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7894.28160388115!2d-74.55748407039185!3d-8.387809025001971!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x5df688a0bf50c93d!2sColegio%20%22Daniel%20Alcides%20Carri%C3%B3n%22-%20Ex%20Tambo!5e0!3m2!1ses!2spe!4v1571323210361!5m2!1ses!2spe" width="300" height="250" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

        </div>

        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Datos del Colegio</h5>

          <ul class="list-unstyled">
            <li>
              <p><i class="fas fa-home mr-3"></i>Los Frutales, Pucallpa-Peru</p>
            </li>
            <li>
            <p><i class="fas fa-envelope mr-3"></i> ieidanielalcidescarrion@gmail.com</p>
            </li>
            <li>
              <p><i class="fas fa-phone mr-3"></i> 061 441 878</p>
            </li>
            <li>
              <p><i class="fas fa-clock mr-3"></i> De 8:00h a 17:00h</p>
            </li>
          </ul>

        </div>


        <hr class="clearfix w-100 d-md-none">

        <div class="col-md-3 mx-auto">
            <h5 class="font-weight-bold text-uppercase mt-3 mb-4" style="text-align: center;">Nuestras Redes Sociales</h5>
            <ul class="list-unstyled">
              <li style="text-align: center; font-size: 40px;">
                <a href="https://www.facebook.com/IE-479-64001-Daniel-Alcides-Carrion-107597247328421/" target="_blank"><i class="fab fa-facebook"></i></a>
              </li>
            </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <hr>
    <!-- Copyright -->
    <div class="footer-copyright text-center">© 2019 Colegio Daniel Alcides Carrion</div>
    <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <!--link JS-->
    <script src="https://kit.fontawesome.com/7908e5e0f5.js" crossorigin="anonymous"></script>
    <script src="js-carousel/jquery.slim.min.js"></script> 
    <script src="js-carousel/bootstrap.bundle.min.js"></script>
  </body>