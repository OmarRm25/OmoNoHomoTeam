
<?php
session_start();
//nivel de permisos de usuario
if ($_SESSION['g_usuario'] >= '2'){}

else{
        header ('location: ./dashboard.php');    
    }

$conn = new mysqli('localhost', 'root', '', 'db_usuarios');
mysqli_set_charset($conn,'utf8'); 

//consulta para acrrerar 
$consulta= $conn->query("select * from usuarios");
?>

<!DOCTYPE html>
  <html>
    <head>
        <meta charset="UTF-8">
        <?php include('./styles.php')?>
    </head>
        
<body>
<?php include('./nav.php')?>
    
    
<table class="stripped highlight" style="width:100%; border:2px">
<thead>
    
    <tr>
    <!--seccion A-->
    
        
    <th align="center">Usuario</th>
	<th align="center">Cuenta/Trabajador</th>
    <th align="center">Carrera</th>
	<th align="center">Dirección</th>
	<th align="center">Teléfono</th>
	<th align="center">Institución</th>
	<th align="center">Correo Electrónico</th>
	<th align="center">Registro</th>
	<th align="center">Restricción</th>
    <th align="center">Motivo</th>
    <th align="center">Grado</th>        
    <th align="center">Comentarios</th>       
    <th align="center">Controles</th>
    </tr>
</thead>
    
    
    <?php 
    if (mysqli_num_rows($consulta)>0){
        while($row = mysqli_fetch_assoc($consulta)){?>
    
            <tr>
            
            <td align="Left"><?php echo $row['nombre_usuario']; ?></td>
            <td align="center"><?php echo $row['no_cuenta']; ?></td>
            <td align="center"><?php echo $row['carrera']; ?></td>
            <td align="center"><?php echo $row['direcion']; ?></td>
            <td align="center"><?php echo $row['telefono']; ?></td>
            <td align="center"><?php echo $row['institucion']; ?></td>
            <td align="center"><?php echo $row['email']; ?></td>
            <td align="center"><?php echo $row['FechaRegistro']; ?></td>
            <td align="center"><?php echo $row['Restriccion']; ?></td>
            <td align="center"><?php echo $row['Motivo']; ?></td>
            <td align="center"><?php echo $row['Grado']; ?></td>
            <td align="center"><?php echo $row['Comentarios']; ?></td>
            
            
<!--                acciones de los botones por cada usuario se usa el acarreo de la URL-->
            <td align="center"><?php echo '<button type="button" class="btn black"><a href="./form_usuarios_edit.php?no_cuenta='.$row['no_cuenta'].'"><font color="white"><i class="material-icons">edit</i></font></a></button>'; ?></td>
                
                
            <td align="center"><?php echo '<button type="button" class="btn red"><a href="./form_usuarios_delete.php?no_cuenta='.$row['no_cuenta'].'"><font color="white"><i class="material-icons">delete</i></font></a></button>'; ?></td>
                
            <td align="center"><?php echo '<button type="button" class="btn grey"><a href="./form_usuarios_view.php?no_cuenta='.$row['no_cuenta'].'"><font color="white"><i class="material-icons">person</i></font></a></button>'; ?></td>
                            
    </tr>
        <?php }
    } else {
        echo 'El numero de resultados es: 0 resultados';
    }
    ?>
    
</table>
    <!--Script de nav pasarlo a un php-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">$(".brand-logo").sideNav();</script> 
</body>
</html>