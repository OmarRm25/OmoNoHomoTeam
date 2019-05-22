<?php
//inicializamos la sesión
session_start();

if ($_SESSION['u_usuario'] == '')
{
    header('location: ./login.php');
}

?>

<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include('./styles.php') //acarreo de los estilos ?>
    <title>Home</title>
    <?php include ('./nav.php'); //acarreo del nav ?>
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

    <div class="row">
        <div class="col s8 offset-s2">
    <?php?>
        <p align="Justify"> Por favor seleccione una de las siguientes Opciones del Menú:</p>
            
        </div>
    </div>
    
    <?php
$conn = new mysqli('localhost', 'root', '', 'db_usuarios');
mysqli_set_charset($conn,'utf8'); 

$condicion = $_SESSION['g_usuario'];//traer botones a el dashboard desde la DB
$botones= $conn->query("SELECT * FROM botones WHERE Permisos <='".$condicion."'ORDER BY ColorOrder");
    
    ?>
    
<div class="row">
        <div class="col s8 offset-s2">
    
    <?php //acomodo de los botones del dashboard
    
        if (mysqli_num_rows($botones)>0){// si no se cumple la condicion no se mostrara nada 
        while($row = mysqli_fetch_assoc($botones)){?>
    
            <?php //se traen los datos con la URL -> Se puede aprencia en al posicionar los botones
            
            echo '<div class="col s4    ">
            <a href="./'.$row['URL'].'.php" style="width:100%;"  class="waves-effect waves-light btn '.$row['Color'].'">
            <i style="font-size:35px"class="material-icons left">'.$row['Icono'].'</i>
            
            
            <font color="white">'.$row['Boton'].'</font>
        
            
            </a>
            <br> </div>';
            
            

            
            ?>
        <?php }
    } else {
        echo 'El numero de resultados es: 0 resultados';
    }
    ?>
    

    </div>
        </div>
    
    
    
    <!--Script de nav pasarlo a un php-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">$(".brand-logo").sideNav();</script> 
</body>
 </html>