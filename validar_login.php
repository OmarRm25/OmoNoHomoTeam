<?php
session_start();
date_default_timezone_set('GMT-6');
$conn = new mysqli('localhost', 'root', '', 'cursos_inter');
mysqli_set_charset($conn,'utf8');//Conexion a DB con codificacion UTF-8

$usuario = $_POST['no_cuenta'];
$password = $_POST['password'];

$proceso= $conn->query("SELECT * FROM registro_user WHERE Num_cuenta ='$usuario' and passwd='$password'");

if ($resultado = mysqli_fetch_array($proceso)){
  $_SESSION['u_usuario'] = $usuario; // Número de cuenta
  $_SESSION['g_usuario'] = $resultado[7]; // Bandera de administrador
  $_SESSION['u_nombre'] = $resultado[1]; // Nombre del usuario
  $privilegio = $_SESSION['g_usuario'];


  $hora_login = date("d-m-y h:i:sa");

  $usuario = $_POST['no_cuenta'];

//REGISTRA LOS LOGINS
//$proceso3 = $conn->query("INSERT INTO connections (numero_empleado,area,hora_login,hora_logout) VALUES ('$numero_empleado','$area_empleado',now(),'')");

  echo 'conexion exitosa';
  header ('location: ./dashboard.php');
}

else{
  header ('location: ./login_error.php');
}
?>
