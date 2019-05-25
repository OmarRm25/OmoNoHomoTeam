<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">

<head>
 <title>Añadir nuevo curso</title>
  <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <?php include('./styles.php') //acarreo de los estilos ?>
 <!--Materialize files-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
</head>


<body>

 <header>
 <h1 style="text-align:center" >Añadir curso </h1>
 </header>
<div class="row" style="margin-top:50px">
<div class="col s6 offset-s3">

 <form action="submit_registrar_curso.php" method="post">

 <hr />
 <h3 style="text-align: center">Crear curso</h3>

<!-- Nombre -->
<label for="nombre">Nombre:</label><br>
<input type="text" name="Nombre_curso" maxlength="255" required>
<br/><br/>

 <!--Carrera-->
<div>
 <label for="carrera">Carrera:</label><br>
 <input type="text" name="Carrera" maxlength="255" required>
 <br/><br/>
</div>

<!--Cupo-->
<div>
 <label for="cupo">Cupo:</label><br>
 <input type="text" name="Cupo" maxlength="255" required>
 <br/><br/>
</div>

<!--Salon-->
<div>
 <label for="salon">Salon:</label><br>
 <input type="text" name="Salon" maxlength="255" required>
 <br/><br/>
</div>

<!-- Horario -->
<label for="hor">Horario:</label><br>
<input type="text" name="Horario" maxlength="35" required>
<br/><br/>


 <br/><br/>
<input type="submit" name="submit" class="btn btn-primary" style="background-color: #00BCD4" value="Registrar">
<input type="reset" name="clear" class="btn btn-primary" style="background-color: #00BCD4" value="Borrar">
<hr>

<br>



 </form>
    </div>
    </div>
<hr /><br />
 <!--Script de nav pasarlo a un php-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">$(".brand-logo").sideNav();</script>

 </body>
 <?php include ('./foot.php'); ?>
</html>
