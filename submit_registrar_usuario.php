<?php
include "conexion.php";
mysqli_set_charset($conexion,'utf8');

	

	$form_pass = $_POST['password'];
	$hash = $_POST['password'];
	//$hash = password_hash($form_pass, PASSWORD_BCRYPT);

	//comprobacion de usuario existente
	$buscarUsuario = "SELECT * FROM usuarios WHERE no_cuenta = '$_POST[no_cuenta]'";
   
	$result = $conexion->query($buscarUsuario);
   	$count = mysqli_num_rows($result);
   
if ($count == 1) {
echo '<br> El numero de cuenta ya ha sido registrado antes';
//echo '<a href="./recovery.html">Recuperar contraseña</a>'
}else{
//insertar nuevos usuarios

mysqli_query($conexion, "INSERT INTO usuarios (
	nombre_usuario,
	carrera,
	no_cuenta,
	direcion,
	telefono,
	institucion,
	email,
	password
	)
	   VALUES (
   '$_POST[username]',
   '$_POST[carrera]',
   '$_POST[no_cuenta]',
   '$_POST[direccion]',
   '$_POST[telefono]',
   '$_POST[institucion]',
   '$_POST[correo]',
   '$hash'
   )");

echo "<br />" . "<h2>" . "Usuario Creado Exitosamente!" . "</h2>";
 echo "<h4>" . "Bienvenido: " . $_POST['username'] . "</h4>" . "\n\n";
 echo "<h5>" . "<a href='./login.php'>Iniciar Sesión</a>" . "</h5>";


}

mysqli_close($conexion);

//header ('Location:./registro.html');
?>