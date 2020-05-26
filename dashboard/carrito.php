<!DOCTYPE html>
<html lang="es">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <title>Carrito | Empresa Mental Care Company</title>
      <link rel="icon" href="ico/logo2.ico">
      <link rel="stylesheet" href="css-carousel/bootstrap.min.css">
      <link rel="stylesheet" href="css-carousel/carrito.css">
      <script src="js-dashboard/leer-mas.js"></script>
  </head>
  <body>
      <!--navegacion-->
      <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        
          <div class="container">
            <a class="navbar-brand" id="navbarIE">Mental Care Company</a>
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
                  <a class="nav-link" style="color: #900c3f;" href="producto.php">Productos</a>
                </li>
              </ul>
            </div>
          </div>
      </nav>
    <!--esto solo es darle forma xD arribita-->
    <section style="padding: 100px 0px 0px 0px;"></section>

    <!--Desde aca comienza el html del carrito-->
    <section style="padding: 0px 10px 25px 150px;">
      <div class="row">
            <div class="col-md-6" style="padding: 100px 15px 100px 15px;">
              <div class="container">
                <h4>
                  <label for="">Mi Carrito</label>
                </h4>
                <hr style=" border-color: #333333; margin:0px 0px; padding-top: 10px;">
                <div class="row">
                  <div class="col-md-6">
                      <div class="container">
                        <div class="row">
                          <div class="col-md-6" style="border: black .5px solid; padding: 0px 0px;">
                            <span><a href="descripcion.php"><img src="img/img2/product.jpeg" alt="" style="width: 128px; height: 100px;"></a></span>
                          </div>
                          <div class="col-md-6">
                            <div>
                              <h6>MC 2020</h6>
                              <!--precio-->
                              <input type="text" name="precio" id="precio" class="monto" value="S/199.90" style="width: 60px;" disabled>
                            </div>
                          </div>
                        </div>  
                      </div>
                  </div>
                  <div class="col-md-6" style="padding-top:35px;">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-4" style="padding-top:6px;">
                          <h6>Cantidad:</h6>
                        </div>
                        <div class="col-md-6">
                          <!--cantidad-->
                          <input type="text" name="precio" id="precio" class="monto" value="1" style="width: 60px;" disabled>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <hr style=" border-color: #333333; margin:0px 0px; margin:10px 0px 0px 0px;">
              </div>
            </div>
              
            <div class="col-md-4" style="padding: 100px 15px 100px 15px;">
                <div class="container" >
                  <h4>
                     <label for="" style="margin: 0px 0px 0px;">Resumen Pedido</label> 
                  </h4>
                  <hr style=" border-color: #333333; margin:0px 0px; margin: 15px 0px 15px 0px;">
                </div>
                
                <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <h6>Sub Total:</h6>
                      <h6>IGV</h6>
                      <h6 style="padding: 17px 0px 10px 0px;">Envio</h6>
                    </div>
                    <div class="col-md-6">
                      <!--sub total-->
                      <label for="" id="subtotal">
                        <h6>S/169.41</h6>
                      </label>
                      <h6>S/30.49</h6>
                      <h6 style="padding: 17px 0px 10px 0px;">GRATIS</h6>
                    </div>
                  </div>
                    
                    
                </div>
                <div class="container">
                    <hr style=" border-color: #333333; margin:0px 0px; padding-top: 10px;">

                    <div class="row">
                      <div class="col-md-6">
                        <h4>TOTAL</h4>
                      </div>
                      <div class="col-md-4">
                        <h6>S/.199.90</h6>
                      </div>
                      
                    </div>
                    <!--El BOTON DE FINALIZAR COMPRA-->
                    <div class="row">
                      <div class="col-md-8">
                        <a href="#"><span class='btn btn-primary' style="font-size: 15px; background-color: #900c3f;">FINALIZAR COMPRA</span></a>
                      </div>
                    </div>   
                </div>   
            </div>
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
          <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1950.6000679097565!2d-77.02638157199263!3d-12.0984472093764!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c86f0fd4f33d%3A0xc5964699952ce946!2sAv.%20Paseo%20de%20la%20Republica%2C%20San%20Isidro%2015047!5e0!3m2!1ses!2spe!4v1590422845577!5m2!1ses!2spe" width="300" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

        </div>

        <!-- Grid column -->

        <hr class="clearfix w-100 d-md-none">

        <!-- Grid column -->
        <div class="col-md-4 mx-auto">

          <!-- Links -->
          <h5 class="font-weight-bold text-uppercase mt-3 mb-4">Datos de la Empresa</h5>

          <ul class="list-unstyled">
            <li>
              <p><i class="fas fa-home mr-3"></i> San Isidro, Lima-Peru</p>
            </li>
            <li>
            <p><i class="fas fa-envelope mr-3"></i> mentalcarecompany@gmail.com</p>
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
                <a href="https://m.facebook.com/Mental-Care-Company-106684234394915/" target="_blank"><i class="fab fa-facebook"></i></a>
              </li>
            </ul>

        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->

    </div>
    <hr>
    <!-- Copyright -->
    <div class="footer-copyright text-center">© 2020 Empresa Mental Care Company</div>
    <!-- Copyright -->

    </footer>
    <!-- Footer -->
    <!--link JS-->
    <script src="https://kit.fontawesome.com/7908e5e0f5.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="js-carousel/jquery.slim.min.js"></script>
    <script src="js-carousel/bootstrap.bundle.min.js"></script>
    
    
  </body>