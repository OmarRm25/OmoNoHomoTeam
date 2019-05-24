<?php
include "conexion.php";
mysqli_set_charset($conexion,'utf8');

$cuenta = $_POST['no_cuenta'];
$nombre = $_POST['username'];
$pat = $_POST['ApPaterno'];
$mat = $_POST['ApMaterno'];
$mail = $_POST['correo'];
$pass = hash ('sha256', $_POST['password']);

// Filtro de repetición de Usuario

$result = $conexion->query("SELECT * FROM registro_user WHERE Num_cuenta = '$_POST[no_cuenta]'");
$count = mysqli_num_rows($result);

if ($count == 1) {
	echo '<br> El numero de cuenta ya ha sido registrado anteriormente.';
}

else{
//insertar nuevos usuarios

if ($conexion->query("INSERT INTO registro_user (
	Num_cuenta,
	Nombre,
	Ap_pat,
	Ap_mat,
	Correo,
	Passwd,
	Admin
	)
	VALUES (
		 '$cuenta',
		 '$nombre',
		 '$pat',
		 '$mat',
		 '$mail',
		 '$pass',
		 0
	 )")){
		 echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
	 }

else {
	echo "Error de inserción de usuario. Vuelva a intentarlo.";
}

echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
echo "<h5>" . "<a href='./login.php'>Iniciar Sesión</a>" . "</h5>";


}

mysqli_close($conexion);

//header ('Location:./registro.html');
?>
