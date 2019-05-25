<?php
include "conexion.php";
mysqli_set_charset($conexion,'utf8');

$nombre = $_POST['Nombre_curso'];
$carrer = $_POST['Carrera'];
$cupo = $_POST['Cupo'];
$sal = $_POST['Salon'];
$hor = $_POST['Horario'];

// Filtro de repetición de Usuario

$result = $conexion->query("SELECT * FROM cursos WHERE Nombre_curso = '$_POST[Nombre_curso]'");
$count = mysqli_num_rows($result);

if ($count == 1) {
	echo '<br> Curso ya existente.';
}

else{
//insertar nuevos usuarios

if ($conexion->query("INSERT INTO cursos (
	Nombre_curso,
	Carrera,
	Cupo,
	Salon,
	Horario
	)
	VALUES (
		 '$nombre',
		 '$carrer',
		 '$cupo',
		 '$sal',
		 '$hor'
	 )")){
		 echo "<br />" . "<h2>" . "Curso creado con éxito!" . "</h2>";
	 }

else {
	echo "Error de inserción de curso, vualva a intentarlo.";
}


echo "<h5>" . "<a href='./dashboard.php'>Volver al menú</a>" . "</h5>";


}

mysqli_close($conexion);


?>