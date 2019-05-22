<?php

session_start();
if (empty($_SESSION['u_usuario'])){}else{header('location: ./dashboard.php');}
?>

<html>
<head>
<meta charset="utf-8">    
</head>
<body>
    
<?php

    //Conexión con la base de datos
$conn = new mysqli('localhost', 'root', '', 'db_usuarios'); 
mysqli_set_charset($conn,'utf8');
    
//llamada a los campos
$Nombre = utf8_decode($_POST['nombre']);
$Apellido = utf8_decode($_POST['apellido']);

$correo = utf8_decode($_POST['email']);
$no_cuenta = utf8_decode($_POST['no_cuenta']);
$mensaje = utf8_decode($_POST['mensaje']);
    
//Destinatario y asunto

$asunto = "CAE - Contacto";
    

//Query
$query= $conn->query("

INSERT INTO `mail`(

`Nombre`,
`Apellidos`,
`Correo`,
`NoCuenta`,
`Mensaje`

) 
VALUES
(

'$Nombre',
'$Apellido',
'$correo',
'$no_cuenta',
'$mensaje'

)

");

mysqli_close($conexion);    
    
header('Location: ./form_contacto.php');
?>

</body>
</html>