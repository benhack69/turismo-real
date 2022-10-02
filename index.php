<?php 
session_start();
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
                  <li class="active">
                    <a href="index.html">Inicio</a>
                  </li>
                  <li><a href="departamentos.php">Habitaciones</a></li>
                  </li>
                  <li class="has-children">
                    <a><?=$_SESSION["nombre"]." ".$_SESSION["apellido"]?></a>
                    <ul class="dropdown arrow-top">
                      <li><a href="#"></a></li>
                      <li><a href="#"></a></li>
                      <li><a href="controlador/login/logout.php">Cerrar Sesión</a></li>
                    </ul>
                  <li><a href="login.php">Registrate</a></li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="slide-one-item home-slider owl-carousel">

      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_1.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <h1 class="mb-2">¡Elige tus vacaciones!</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">Disfruta</strong></p>
              <p><a href="login.php" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Registrate</a></p>
            </div>
          </div>
        </div>
      </div>  

      <div class="site-blocks-cover overlay" style="background-image: url(images/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">
            <div class="col-md-10">
              <h1 class="mb-2">¡Elige tus vacaciones!</h1>
              <p class="mb-5"><strong class="h2 text-success font-weight-bold">Disfruta</strong></p>
              <p><a href="login.php" class="btn btn-white btn-outline-white py-3 px-5 rounded-0 btn-2">Registrate</a></p>
            </div>
          </div>
        </div>
      </div>  
    </div>


    <div class="site-section site-section-sm pb-0">
      <div class="container">
        <div class="row">
          <form class="form-search col-md-12" style="margin-top: -100px;">
            <div class="row  align-items-end">
              <div class="col-md-3">
                <label for="list-types">Lugar</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="list-types" id="list-types" class="form-control d-block rounded-0">
                    <option value="">Valdivia</option>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="offer-types">Piezas</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="offer-types" id="offer-types" class="form-control d-block rounded-0">
                    <option value="">2</option>

                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <label for="select-city">Baños</label>
                <div class="select-wrap">
                  <span class="icon icon-arrow_drop_down"></span>
                  <select name="select-city" id="select-city" class="form-control d-block rounded-0">
                    <option value="">1</option>

                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <input type="submit" class="btn btn-success text-white btn-block rounded-0" value="Buscar">
              </div>
            </div>
          </form>
        </div>  
       
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-7 text-center">
            <div class="site-section-title">
              <h2>¿Quiénes somos?</h2>
            </div>
            <p>Somos una empresa familiar que se ha dedicado por 10 años ofreciendo las mejores vacaciones a nuestros clientes.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4">
            <a class="service text-center">
              <span class="icon flaticon-flat"></span>
              <h2 class="service-heading">Habitaciones</h2>
              <p>La mejores habitaciones para disfrutar el verano.</p>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="service text-center">
              <span class="icon flaticon-location"></span>
              <h2 class="service-heading">Tours</h2>
              <p>Ofrecemos servicios de tour por tu zona de alojamiento.</p>
            </a>
          </div>
          <div class="col-md-6 col-lg-4">
            <a class="service text-center">
              <span class="icon flaticon-house"></span>
              <h2 class="service-heading">Transporte</h2>
              <p>Contamos con servicios de transporte para tu mayor comodidad.</p>
            </a>
          </div>
        </div>
      </div>
    </div>

    <!--
    <div class="site-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <div class="site-section-title">
              <h2>Recent Blog</h2>
            </div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Debitis maiores quisquam saepe architecto error corporis aliquam. Cum ipsam a consectetur aut sunt sint animi, pariatur corporis, eaque, deleniti cupiditate officia.</p>
          </div>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="100">
            <a href="#"><img src="images/img_4.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="#">Art Gossip by Mike Charles</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="200">
            <a href="#"><img src="images/img_2.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="#">Art Gossip by Mike Charles</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.</p>
            </div>
          </div>
          <div class="col-md-6 col-lg-4 mb-5" data-aos="fade-up" data-aos-delay="300">
            <a href="#"><img src="images/img_3.jpg" alt="Image" class="img-fluid"></a>
            <div class="p-4 bg-white">
              <span class="d-block text-secondary small text-uppercase">Jan 20th, 2019</span>
              <h2 class="h5 text-black mb-3"><a href="#">Art Gossip by Mike Charles</a></h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias enim, ipsa exercitationem veniam quae sunt.</p>
            </div>
          </div>

        </div>

      </div>
    </div>

-->

    
    <div class="site-section">
    <div class="container">
      <div class="row mb-5 justify-content-center">
        <div class="col-md-7">
          <div class="site-section-title text-center">
            <h2>Nuestros Agentes</h2>
          </div>
        </div>
      </div>
      <div class="row">
          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">

              <img src="images/person_1.jpg" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Benjamin Castro</h2>
                <span class="d-block mb-3 text-white-opacity-05">Dueño</span>
                <p>
                  <a href="" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">

              <img src="images/person_2.jpg" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Sebastian Carrié</h2>
                <span class="d-block mb-3 text-white-opacity-05">Agente</span>
                <p>
                  <a href="" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>

          <div class="col-md-6 col-lg-4 mb-5 mb-lg-5">
            <div class="team-member">

              <img src="images/person_3.jpg" alt="Image" class="img-fluid rounded mb-4">

              <div class="text">

                <h2 class="mb-2 font-weight-light text-black h4">Alan Aguilera</h2>
                <span class="d-block mb-3 text-white-opacity-05">Agente</span>
                <p>
                  <a href="" class="text-black p-2"><span class="icon-facebook"></span></a>
                  <a href="" class="text-black p-2"><span class="icon-twitter"></span></a>
                  <a href="" class="text-black p-2"><span class="icon-linkedin"></span></a>
                </p>
              </div>

            </div>
          </div>

          

        </div>
    </div>
    </div>
    

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

  <script src="js/main.js"></script>
    
  </body>
</html>
