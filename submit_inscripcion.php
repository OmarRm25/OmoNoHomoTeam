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
		include('./styles.php');
		include('./nav.php');
		echo "<br />" . "<h2 class=\"center-align\">" . "¡Curso inscrito con éxito!" . "</h2>". "<br>";
	}

else {
	echo "Error de inscripción de curso, vuelva a intentarlo.";
}


echo "<h5 class=\"center-align\">" . "<a class=\"btn btn-primary\" href='./dashboard.php'>Volver al menú</a>" . "</h5>". "<br>";


}

mysqli_close($conexion);

include('foot.php');

?>