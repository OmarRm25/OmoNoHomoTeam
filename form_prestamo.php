<?php
session_start();
//control de acceso
if ($_SESSION['u_usuario'] == '')
{
    header('location: ./login.php');
}
//cotejo
$conn = new mysqli('localhost', 'root', '', 'cursos_inter');
mysqli_set_charset($conn,'utf8');

//desplegar para visualizar las listas
$consulta_cursos = $conn->query("SELECT * FROM cursos");

//traer los datos del usuario
$cuenta = $_SESSION['u_usuario'];
$proceso= $conn->query("SELECT * FROM registro_user WHERE Num_cuenta='$cuenta'");

//listar los datos del usuario
if ($resultado = mysqli_fetch_array($proceso)){
        $nombre_formulario = $resultado[2]." ".$resultado[3]." ".$resultado[1];
        $no_cuenta_formulario = $resultado[0];
 }
?>

<!DOCTYPE html>
  <html>
    <head>
        <meta charset="UTF-8">
        <title>Formulario_prestamo</title>

        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <?php include('styles.php'); ?>
    </head>
<?php include ('./nav.php'); ?>
    <body>

<div class="row">
        <div class="col s8 offset-s2">


            <h5 align="center">Consulta de Cursos Intersemestrales</h5>

            <!--Empieza Formulario-->

            <form action="submit_prestamo.php" method="post" accept-charset="utf-8" class="form_cotact">

<!--                los datos de traen de la consulta  -->
                Nombre: <b><?php echo $nombre_formulario;?></b><br><br>
                No de Cuenta: <b><?php echo $no_cuenta_formulario;?></b><br>

                <br>Carrera:
<!--				los datos de traen de la consulta-->
				<select required="required" class="browser-default"><?php     if (mysqli_num_rows($consulta_asignatura)>0){while($row = mysqli_fetch_assoc($consulta_asignatura)){?>

                <option value="<?php echo utf8_decode($row['Asignatura']); ?>"><?php echo utf8_decode($row['Asignatura']); ?></option>
        <?php }
    } else {
        echo 'El numero de resultados es: 0 resultados';
    }
    ?>
</select><br>
s
        <?php }
    } else {
        echo 'El numero de resultados es: 0 resultados';
    }
    ?>
</select><br>
<!--                falta la implementancion-->

        </form>

            <!--Termina Formulario-->

    </div>
            </div>





     <!--Script de nav pasarlo a un php-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">$(".brand-logo").sideNav();</script>
    </body>
    <?php include ('./foot.php'); ?>
</html>
