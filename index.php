<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
<head>
<meta charset="UTF-8">
	<title>Menu</title>
<link rel="icon" type="image/jpg" sizes="120x120" href="assets/media/favicon.jpg">
<?php include('./styles.php') ?>
<style>
    .backdrop{
       background-color: #00BCD4;
     }
  </style>

</head>

    <?php include ('./nav.php');?>

<body >

    <div class="container">
    <div class="row">

        <div class="col s8 offset-s2">

            <div class="carousel carousel-slider center" style="max-height:350px">
    <div class="carousel-fixed-item center">

    </div>
    <div class="carousel-item">
      <img src="assets/media/img/carrusel/derecho.jpg"  width="100%">
    </div>
    <div class="carousel-item">
      <img src="assets/media/img/carrusel/planos.gif" width="100%">
    </div>
    <div class="carousel-item">
      <img src="assets/media/img/carrusel/python.jpeg" width="100%">
    </div>
    <div class="carousel-item">
      <img src="assets/media/img/carrusel/Office365.png" width="100%">
    </div>
    <div class="carousel-item">
      <img src="assets/media/img/carrusel/git.jpeg" width="100%">
    </div>
    <div class="carousel-item">
      <img src="assets/media/img/carrusel/banderas.jpg" width="100%">
    </div>
    <div class="carousel-item">
      <img src="assets/media/img/carrusel/redaccion.jpg" width="100%">
    </div>
    <div class="carousel-item">
      <img src="assets/media/img/carrusel/Planeacion_rural.jpg" width="100%">
    </div>
    <div class="carousel-item">
      <img src="assets/media/img/carrusel/administracion.jpg" width="100%">
    </div>
  </div>
    </div>
    </div>
  </div>
<br>
    <div class="container center-align">
      <div class="col s12">
        <h1>Inscríbete en nuestros cursos intersemestrales</h1>
      </div>
    </div>


	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>

	<script type="text/javascript" src="assets/js/materialize.js"></script>

	<script type="text/javascript">$(".brand-logo").sideNav();</script>
    <script>
    $('.carousel.carousel-slider').carousel({
    fullWidth: true,
    indicators: true,
    duration: 200
  });
    autoplay();
    function autoplay( ){
      $('.carousel').carousel('next');
      setTimeout(autoplay, 4500);
    }
    </script>

    <script>$( document ).ready(function)</script>

<script>document.addEventListener('DOMContentLoaded', function() {
    var elems = document.querySelectorAll('.sidenav');
    var instances = M.Sidenav.init(elems, options);
  });

  // Or with jQuery

  $(document).ready(function(){
    $('.sidenav').sidenav();
  });</script>

</body>
<?php include ('./foot.php'); ?>
</html>
