<?php

session_start();
//nivel de usuario
if ($_SESSION['g_usuario'] >= '2'){}

else{
        header ('location: ./dashboard.php');    
    }

$conn = new mysqli('localhost', 'root', '', 'db_usuarios');
mysqli_set_charset($conn,'utf8'); 

mysqli_query($conn,"UPDATE usuarios SET nombre_usuario = '$_POST[username]' WHERE no_cuenta = '$_POST[no_cuenta]'");    //username
mysqli_query($conn,"UPDATE usuarios SET carrera = '$_POST[carrera]' WHERE no_cuenta = '$_POST[no_cuenta]'");            //carrera
mysqli_query($conn,"UPDATE usuarios SET no_cuenta = '$_POST[no_cuenta]' WHERE no_cuenta = '$_POST[no_cuenta]'");        //no_cuenta
mysqli_query($conn,"UPDATE usuarios SET institucion = '$_POST[institucion]' WHERE no_cuenta = '$_POST[no_cuenta]'");    //institucion
mysqli_query($conn,"UPDATE usuarios SET direcion = '$_POST[direccion]' WHERE no_cuenta = '$_POST[no_cuenta]'");         //direccion
mysqli_query($conn,"UPDATE usuarios SET telefono = '$_POST[telefono]' WHERE no_cuenta = '$_POST[no_cuenta]'");          //telefono
mysqli_query($conn,"UPDATE usuarios SET email = '$_POST[correo]' WHERE no_cuenta = '$_POST[no_cuenta]'");                //correo
mysqli_query($conn,"UPDATE usuarios SET Restriccion = '$_POST[Restriccion]' WHERE no_cuenta = '$_POST[no_cuenta]'");    //Restriccion
mysqli_query($conn,"UPDATE usuarios SET Motivo = '$_POST[Motivo]' WHERE no_cuenta = '$_POST[no_cuenta]'");              //Motivo
mysqli_query($conn,"UPDATE usuarios SET Permisos = '$_POST[Permisos]' WHERE no_cuenta = '$_POST[no_cuenta]'");          //Permisos
mysqli_query($conn,"UPDATE usuarios SET Grado = '$_POST[Grado]' WHERE no_cuenta = '$_POST[no_cuenta]'");                //Grado
mysqli_query($conn,"UPDATE usuarios SET Comentarios = '$_POST[Comentarios]' WHERE no_cuenta = '$_POST[no_cuenta]'");    //Comentarios

mysqli_close($conn);
header('Location:./c_usuarios_control.php');


?>

<!DOCTYPE html>

<html lang="en">

<head>
 <title>Editar Usuario</title>
 <meta charset = "utf-8">
            <?php include('./styles.php')?>

</head>


<script>
    function valida(e){
        tecla = (document.all) ? e.keyCode : e.which;
        //Tecla de retroceso para borrar, siempre la permite
        if (tecla==8){
            return true;
        }

        //patron de entrada, en este caso solo acepta numero
        patron =/[0-9]/;
        tecla_final = String.fromCharCode(tecla);
        return patron.test(tecla_final);
    }
</script>

<body>
<?php include('./nav.php')?>
<br />

<!--Script de nav pasarlo a un php-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">$(".brand-logo").sideNav();</script> 
 </body>
</html>