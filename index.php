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

    
    <div class="row">

        <div class="col s8 offset-s2">

            <div class="carousel carousel-slider center" style="min-height:250px">
    <div class="carousel-fixed-item center">
      
    </div>
    <div class="carousel-item white-text">
      <img src="./img/carrusel/1.jpg" width="100%">
      <p class="white-text"></p>
    </div>
    <div class="carousel-item amber white-text">
            <img src="./img/carrusel/2.jpg" width="100%">
      <p class="white-text"></p>
    </div>
    <div class="carousel-item green white-text">
      <img src="./img/carrusel/3.jpg" width="100%">
      <p class="white-text"></p>
    </div>
    <div class="carousel-item blue white-text">
      <img src="./img/carrusel/4.jpg" width="100%">
      <p class="white-text"></p>
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
    indicators: true
  });
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
</html>
