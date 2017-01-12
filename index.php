<?php
  define('BASE_URL', 'http://cabin.com');
  function base_url($path=''){
    return BASE_URL . '/' . $path;
  }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>CABIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="Indary">
    <meta name="theme-color" content="#12356b">
    <!-- TWITTER -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@cabin">
    <meta name="twitter:creator" content="@indary">
    <meta name="twitter:title" content="Cabin">
    <meta name="twitter:description" content="">
    <meta name="twitter:image:src" content="<?php echo base_url('img/logo.png')?>">
    <!-- FACEBOOK -->
    <meta property="og:site_name" content="CABIN">
    <meta property="og:url" content="<?php echo base_url()?>">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Cabin">
    <meta property="og:description" content="">
    <meta property="og:image" content="<?php echo base_url('img/logo.png')?>">
    <!-- G++ -->
    <meta itemprop="name" content="CABIN">
    <meta itemprop="description" content="">
    <meta itemprop="image" content="<?php echo base_url('img/logo.png')?>">
    <link rel="shortcut icon" type="image/png" href="img/favicon.png" />
    <!--Import Google Icon Font-->
     <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="libs/materialize/css/materialize.min.css" type="text/css">
    <link rel="stylesheet" href="libs/wow/css/libs/animate.css" type="text/css">
    <script src="libs/jquery/jquery-1.11.3.min.js"></script>
    <script src="libs/materialize/js/materialize.min.js"></script>
    <script src="libs/wow/wow.min.js"></script>
    <script src="js/global.js"></script>
  </head>
  <body>
    <header>
      <nav id="nav">
        <div class="nav-wrapper">
          <div class="brand-logo center">
            <img id="logo_white" src="img/logo_white.png"/>
            <img id="logo_blue" src="img/logo.png"/>
          </div>
          <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
          <ul id="menu" class="right hide-on-med-and-down">
            <li class="menu-item" data-target="bg">INICIO</li>
            <li class="menu-item" data-target="us">NOSOTROS</li>
            <li class="menu-item" data-target="services">SERVICIOS</li>
            <li class="menu-item" data-target="turns">TURNOS</li>
            <li class="menu-item" data-target="contact">CONTACTO</li>
          </ul>
          <ul class="side-nav bg-blue" id="mobile-demo">
            <li class="menu-item" data-target="bg">INICIO</li>
            <li class="menu-item" data-target="us">NOSOTROS</li>
            <li class="menu-item" data-target="services">SERVICIOS</li>
            <li class="menu-item" data-target="turns">TURNOS</li>
            <li  class="menu-item" data-target="contact">CONTACTO</li>
          </ul>
        </div>
      </nav>
    </header>
    <div id="bg">
      <div class="override">
      </div>
      <div class="center">
        <h4 class="text">Centro de Aplicaciones Bionucleares</h4>
        <h6 class="text text-min"><b>Comodoro Rivadavia</b></h6>
      </div>
    </div>
    <div id="full-wrapper">
      <section id="us" class="white">
        <?php include("sections/us.php"); ?>
      </section>
      <section id="direction" class="white-text">
        <?php include("sections/direction.php"); ?>
      </section>
      <section id="services" class="white-text">
        <?php include("sections/services.php"); ?>
      </section>
      <section id="turns" class="white-text">
        <?php include("sections/turns.php"); ?>
      </section>
    </div>
    <div id="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2778.1629867667007!2d-67.48862248455616!3d-45.86804864378965!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xbde4545882692bf7%3A0xa8552c7076b2530d!2sRoque+S%C3%A1enz+Pe%C3%B1a+%26+Democracia%2C+Comodoro+Rivadavia%2C+Chubut!5e0!3m2!1ses-419!2sar!4v1475718073928" width="100%" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <footer id="contact" class="bg-black-blue white-text">
      <?php include("sections/contact.php"); ?>
    </footer>
  </body>
</html>
