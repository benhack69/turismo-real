<?php 
include "conexion.php";
$id=$_GET["id"];
//$sql=$conn->query("select * from habitacion where id_habitacion=$id");
$sql=$conn->query("SELECT * from departamento join comuna on comuna.id_comuna = departamento.id_comuna join region on region.id_Region = comuna.id_Region where id_departamento=$id;");

?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Turismo Real</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito+Sans:200,300,400,700,900|Roboto+Mono:300,400,500"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/mediaelementplayer.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/fl-bigmug-line.css">
    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  
  <div class="site-loader"></div>
  
  <div class="site-wrap">

    <div class="site-mobile-menu">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->

    <div class="site-navbar mt-4">
        <div class="container py-1">
          <div class="row align-items-center">
            <div class="col-8 col-md-8 col-lg-4">
              <h1 class="mb-0"><a href="index.php" class="text-white h2 mb-0"><strong>TurismoReal<span class="text-danger">.</span></strong></a></h1>
            </div>
            <div class="col-4 col-md-4 col-lg-8">
              <nav class="site-navigation text-right text-md-right" role="navigation">

                <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li >
                    <a href="index.php">Inicio</a>
                  </li>
                  <li><a href="departamentos.php">Habitaciones</a></li>
                  </li>
                  <li class="has-children">
                    <a></a>
                    <ul class="dropdown arrow-top">
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="/controlador/login/logout.php">Cerrar Sesión</a></li>
                    </ul>
                  <li><a href="login.php">Registrate</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>



    <div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
      <div class="container">
        <div class="row align-items-center justify-content-center text-center">
          <div class="col-md-10">
            <h1 class="mb-2">Agendar</h1>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section site-section-sm">
    <?php
    while($datos=$sql->fetch_object()){?>
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            
            <div>
              <div class="slide-one-item home-slider owl-carousel">
                <div><img src="" alt="Image" class="img-fluid"></div>
              </div>
            </div>
            <div class="bg-white property-body border-bottom border-left border-right">
              <div class="row mb-5">
                <div class="col-md-6">
                  <h2 class="h4 text-black"><?= $datos->nombre_hab?></h2>
                  <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span><?= $datos->calle.', '.$datos->Descrip_comuna?></span>
                  <strong class="text-success h1 mb-3">$<?= $datos->valor_habitacion?></strong> <!-- precio -->
                </div>
                <div class="col-md-6">
                  <ul class="property-specs-wrap mb-3 mb-lg-0  float-lg-right">
                  <li>
                    <span class="property-specs">Ventanas</span>
                    <span class="property-specs-number"><?= $datos->ventanas?></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baños</span>
                    <span class="property-specs-number"><?= $datos->banos?></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Televisores</span>
                    <span class="property-specs-number"><?= $datos->televisores?></span>
                    
                  </li>
                </ul>
                </div>
              </div>
              <!--
              <div class="row mb-5">
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Sector</span> 
                  <strong class="d-block"></strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Year Built</span>
                  <strong class="d-block">2018</strong>
                </div>
                <div class="col-md-6 col-lg-4 text-center border-bottom border-top py-3">
                  <span class="d-inline-block text-black mb-0 caption-text">Price/Sqft</span>
                  <strong class="d-block">$520</strong>
                </div>
              </div>
              -->
              <h2 class="h4 text-black">Descripción</h2>
              <p><?= $datos->desc_habitacion?></p> <!--descripcion-->

              <div class="row no-gutters mt-5">
                <div class="col-12">
                  <h2 class="h4 text-black mb-3">Vistas del Departamento</h2>
                </div>
                <div class="col-sm-6 col-md-4 col-lg-3">
                  <a href="" class="image-popup gal-item"><img src="" alt="Image" class="img-fluid"></a>
                </div>
              </div>
            </div>
          </div>
          <?php } ?>
          <div class="col-lg-4">
            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Agendar</h3>
              <form method = "POST" enctype = "multipart/form-data" class="form-contact-agent">
                <div class="form-group">
                  <label for="checkin">Check-In</label>
                  <input type="date" id="checkin" class="form-control" required = "required">
                </div>
                
                <div class="form-group">
                  <input type="submit"  name = "agendar" class="btn btn-primary" value="Agendar Reserva">
                </div>
              </form>
            </div>

            <div class="bg-white widget border rounded">
              <h3 class="h4 text-black widget-title mb-3">Servicios Adicionales</h3>
              <p></p>
            </div>

          </div>
          
        </div>
      </div>
    </div>

    <!--
    <div class="site-section site-section-sm bg-light">
      <div class="container">

        <div class="row">
          <div class="col-12">
            <div class="site-section-title mb-5">
              <h2>Related Properties</h2>
            </div>
          </div>
        </div>
      
        <div class="row mb-5">
          <div class="col-md-6 col-lg-4 mb-4">
            <div class="property-entry h-100">
              <a href="property-details.html" class="property-thumbnail">
                <div class="offer-type-wrap">
                  <span class="offer-type bg-danger">Sale</span>
                  <span class="offer-type bg-success">Rent</span>
                </div>
                <img src="images/img_1.jpg" alt="Image" class="img-fluid">
              </a>
              <div class="p-4 property-body">
                <a href="#" class="property-favorite"><span class="icon-heart-o"></span></a>
                <h2 class="property-title"><a href="property-details.html">625 S. Berendo St</a></h2>
                <span class="property-location d-block mb-3"><span class="property-icon icon-room"></span> 625 S. Berendo St Unit 607 Los Angeles, CA 90005</span>
                <strong class="property-price text-primary mb-3 d-block text-success">$2,265,500</strong>
                <ul class="property-specs-wrap mb-3 mb-lg-0">
                  <li>
                    <span class="property-specs">Beds</span>
                    <span class="property-specs-number">2 <sup>+</sup></span>
                    
                  </li>
                  <li>
                    <span class="property-specs">Baths</span>
                    <span class="property-specs-number">2</span>
                    
                  </li>
                  <li>
                    <span class="property-specs">SQ FT</span>
                    <span class="property-specs-number">7,000</span>
                    
                  </li>
                </ul>

              </div>
            </div>
          </div>
        </div>
      </div>
      -->

      <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="mb-5">
              <h3 class="footer-heading mb-4">Turismo Real</h3>
              <p>Somos una empresa familiar que se ha dedicado por 10 años ofreciendo las mejores vacaciones a nuestros clientes.</p>
            </div>

            
            
          </div>
          <div class="col-lg-4 mb-5 mb-lg-0">
            <div class="row mb-5">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Navegación</h3>
              </div>
              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                  <li><a href="index.php">Inicio</a></li>
                  <li><a href="departamentos.php">Habitaciones</a></li>
                </ul>
              </div>

              <div class="col-md-6 col-lg-6">
                <ul class="list-unstyled">
                 
                </ul>
              </div>
            </div>
          </div>

          <div class="col-lg-4 mb-5 mb-lg-0">
            <h3 class="footer-heading mb-4">Siguenos!</h3>

                <div>
                  <a href="" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
                  <a href="" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
                  <a href="" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
                  <a href="" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
                </div>
          </div>
          
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
              Turismo Real
            </p>
          </div>
          
        </div>
      </div>
    </footer>

  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/mediaelement-and-player.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/circleaudioplayer.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>