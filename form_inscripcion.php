<?php 
include "conexion.php";
session_start();

if ($_SESSION['u_usuario'] == '')
{
  header('location: ./login.php');
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<title>Inscribir curso</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/jpg" sizes="120x120" href="assets/media/favicon.jpg">
<meta http-equiv="X-UA-Compatible" content="ie=edge">

<?php include('./styles.php') ?>

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
<link rel="stylesheet" type="text/css" href="assets/css/estilos.css">

<?php include('./nav.php'); ?>
</head>

<body>

<header>
	<h1 style="text-align: center">Inscribir curso</h1>
</header>
<br>
<form action="submit_inscripcion.php" method="post" name="cursos">
	<div class="container">
		<div class="row">
			<div class="col s6">
				<label for="id_curso">ID de curso: </label>
				<input type="text" name="id_curso" maxlength="10" required>
				</div>
		</div>
	</div>

	<br>
	<div class="container center-align">
		
	<button type="submit" name="Inscribir curso" class="btn btn-primary" style="background-color: #00BCD4" value="Inscribir curso">Inscribir curso</button>
	</div>
</form>
</body>
<br>
<br>

<?php include ('./foot.php'); ?>

</html>
