<?php
$host_db = "localhost";//url o ip
$user_db = "root";//credenciales
$pass_db = "";//credenciales 
$db_name = "db_usuarios";// nombre de la base de datos
$tbl_name = "registro"; //nombre de la tabla

$conexion = new mysqli('localhost', 'root', '', 'db_usuarios');

if ($conexion->connect_error) {//error por algun error
 die("La conexion falló: " . $conexion->connect_error);
}
?>
