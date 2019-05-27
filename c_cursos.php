<?php
session_start();
// Control de acceso
if ($_SESSION['u_usuario'] == '')
{
  header('location: ./login.php');
}
//cotejo
$conn = new mysqli('localhost', 'root', '', 'cursos_inter');
mysqli_set_charset($conn,'utf8');

//desplegar para visualizar las listas

$consulta_cursos = $conn->query("SELECT DISTINCT Carrera FROM cursos");

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
    <title>Consulta de cursos</title>
    <link rel="icon" type="image/jpg" sizes="120x120" href="assets/media/favicon.jpg">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php include('styles.php'); ?>

  </head>

  <?php include ('./nav.php'); ?>

  <body>

    <div class="row">
      <div class="col s8 offset-s2">
        <h1 align="center">Consulta de Cursos Intersemestrales</h1>

        <br><br>
          <!--Empieza Formulario-->
          <form action="#" method="post" accept-charset="utf-8" class="form_cotact">
          <!-- Los datos de traen de la consulta -->
            Nombre: <b><?php echo $nombre_formulario;?></b><br><br>
            Número de Cuenta: <b><?php echo $no_cuenta_formulario;?></b><br><br>
            Carrera:
            <!-- Los datos de traen de la consulta -->
				    <select name="carreras" method="post" class="browser-default">
            <?php
            if (mysqli_num_rows($consulta_cursos)>0){
              do {
                echo "<option value=".$row['Carrera'].">".$row['Carrera']."</option>";
              } while($row = mysqli_fetch_assoc($consulta_cursos));
              echo "<option value=\"Mostrar todo\">Mostrar Todo</option>";
            }

            else {
              echo "";
            }

            ?>
            </select><br>
<br>
            <div class="container center-align">
            <input type="submit" name="consulta" class="btn btn-primary" style="background-color: #00BCD4" value="Consultar Cursos" />
            </div>

            <br><br>
            <?php
            if(isset($_POST['consulta'])){
            ?>
              Cursos:
              <table style="width:80%; border:2px">
                <thead>
                  <tr>
                  <!--seccion A-->
                  <th>Clave de Curso</th>
                	<th>Tema</th>
                	<th>Carrera</th>
                	<th>Cupo</th>
                  <th>Salón</th>
                  <th>Horario</th>
                  </tr>
                </thead>

              <?php
              if($_POST['carreras'] != "Mostrar todo"){
                $consulta_c = $conn->query("SELECT * FROM cursos WHERE Carrera = \"".$_POST['carreras']."\"");
              }
              else {
                $consulta_c = $conn->query("SELECT * FROM cursos");  
              }
                while($row = mysqli_fetch_array($consulta_c)){
                ?>
                  <tr>
                    <td><?php echo $row['idCursos']; ?></td>
                    <td><?php echo $row['Nombre_curso']; ?></td>
                    <td><?php echo $row['Carrera']; ?></td>
                    <td><?php echo $row['Cupo']; ?></td>
                    <td><?php echo $row['Salon']; ?></td>
                    <td><?php echo $row['Horario']; ?></td>
                  </tr>
                <?php
                }
              }
            ?>
            </table><br>
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
