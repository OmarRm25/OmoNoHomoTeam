<?php

session_start();

if ($_SESSION['g_usuario'] >= '3'){}

else{
        header ('location: ./dashboard.php');    
    }

$conn = new mysqli('localhost', 'root', '', 'db_usuarios');
mysqli_set_charset($conn,'utf8'); 

mysqli_query($conn,"DELETE FROM usuarios WHERE no_cuenta = '$_POST[no_cuenta]'");    //username

mysqli_close($conn);
header('Location:./c_usuarios_control.php');

//header ('Location:./registro.html');
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