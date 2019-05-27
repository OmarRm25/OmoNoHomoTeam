
<?php
session_start();
//nivel de permisos de usuario

$conn = new mysqli('localhost', 'root', '', 'cursos_inter');
mysqli_set_charset($conn,'utf8');

// Consulta para acarrerar
$consulta = $conn->query("SELECT * FROM REGISTRO_USER");
?>

<!DOCTYPE html>
<html>

  <head>
    <meta charset="UTF-8">
    <link rel="icon" type="image/jpg" sizes="120x120" href="assets/media/favicon.jpg">
    <?php include('./styles.php')?>
  </head>

  <body>
  <?php include('./nav.php')?>
  <table class="stripped highlight" style="width:80%; border:2px; margin:10%; margin-top:3%;">
    <thead>
      <tr>
        <!--seccion A-->
        <th align="center">Numero de cuenta</th>
    	  <th align="center">Nombre</th>
        <th align="center">Apellido paterno</th>
    	  <th align="center">Apellido materno</th>
    	  <th align="center">Correo</th>
      </tr>
    </thead>
    <?php
    if (mysqli_num_rows($consulta)>0){
      while($row = mysqli_fetch_assoc($consulta)){
      ?>
              <tr>
                <td align="Left"><?php echo $row['Num_cuenta']; ?></td>
                <td align="center"><?php echo $row['Nombre']; ?></td>
                <td align="center"><?php echo $row['Ap_pat']; ?></td>
                <td align="center"><?php echo $row['Ap_mat']; ?></td>
                <td align="center"><?php echo $row['Correo']; ?></td>
                <!-- Acciones de los botones por cada usuario se usa el acarreo de la URL-->
                <td align="center"><?php echo '<button type="button" class="btn black"><a href="./form_usuarios_edit.php?Num_cuenta='.$row['Num_cuenta'].'"><font color="white"><i class="material-icons">edit</i></font></a></button>'; ?></td>
                <td align="center"><?php echo '<button type="button" class="btn red"><a href="./form_usuarios_delete.php?Num_cuenta='.$row['Num_cuenta'].'"><font color="white"><i class="material-icons">delete</i></font></a></button>'; ?></td>
                <td align="center"><?php echo '<button type="button" class="btn grey"><a href="./form_usuarios_view.php?Num_cuenta='.$row['Num_cuenta'].'"><font color="white"><i class="material-icons">person</i></font></a></button>'; ?></td>
            </tr>
          <?php
      }
    }

    else {
      echo 'No se ha encontrado resultados.';
    }
?>

  </table>
      <!--Script de nav pasarlo a un php-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="assets/js/materialize.js"></script>
  <script type="text/javascript">$(".brand-logo").sideNav();</script>
  </body>
  <?php include ('./foot.php'); ?>
</html>
