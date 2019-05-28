<?php

session_start();
$conn = new mysqli('localhost', 'root', '', 'cursos_inter');
include "conexion.php";

$curso = $_POST['id_curso'];
$cuenta = $_SESSION['u_usuario'];

// Filtro de repetición de Usuario

$result = $conexion->query("SELECT * FROM cursos_inscritos WHERE Registro_user_Num_cuenta = '$_SESSION[u_usuario]' AND Cursos_idCursos = '$_POST[id_curso]'");
$count = mysqli_num_rows($result);

if ($count == 1) {
	echo '<br> El curso ya ha sido inscrito.';
}

else{
//insertar nuevos usuarios

if ($conexion->query("INSERT INTO cursos_inscritos(
	Registro_user_Num_cuenta,
	Cursos_idCursos
	)
	VALUES (
		 '$cuenta',
		 '$curso'
	)")){
		echo "<br />" . "<h2>" . "¡Curso inscrito con éxito!" . "</h2>";
	}

else {
	echo "Error de inscripción de curso, vualva a intentarlo.";
}


echo "<h5>" . "<a href='./dashboard.php'>Volver al menú</a>" . "</h5>";


}

mysqli_close($conexion);


?>