<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css-login/face.css">
    <link rel="stylesheet" href="css-login/formularios.css">
</head>

<body>
    <div class="container">
    <div id="login" class="signin-card">
    <div class="logo-image">
    <a href="../index.html"><img src="img/logo.png" alt="Logo" title="Logo" width="138"></a>
    </div>
    <h1 class="display1">DANIEL ALCIDES CARRIÓN</h1>

    <?php
    
        if (isset($_GET['v'])) {
          $caso=$_GET['v'];
            switch ($caso) {
              case 2://mostrar mensaje de error en la clave
                echo "<p>Error en ingreso de la clave</p>";
                break;
              case 3://mostrar mensaje de error en el usuario
                echo "<p>Error en ingreso del usuario</p>";
                break;  
            }
        
        }

    ?>

    <form action="verificar.php" method="post" class="" role="form">

        <div id="form-login-username" class="form-group">
            <input id="username" class="form-control" name="user" type="text" size="18" alt="Usuario" required />
               <span class="form-highlight"></span>
                    <label for="username" class="float-label">Usuario</label>
        </div>

        <div id="form-login-password" class="form-group">
            <input id="passwd" class="form-control" name="clave" type="password" required>
                <span class="form-highlight"></span>
            <label for="password" class="float-label">Contraseña</label>
        </div>

        <div id="form-login-remember" class="form-group">
        <!--<div class="checkbox checkbox-default">       
            <input id="remember" type="checkbox" value="yes" alt="Remember me" class="">
            <label for="remember">Remember me</label>      
        </div>-->

            </div>
                <div>
                    <button class="btn btn-block btn-info ripple-effect" type="submit" name="submit">Iniciar</button>  
                </div>

            </div>
    </form>
        </div>
    </div>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
</body>
</html>