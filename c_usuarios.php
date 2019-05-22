<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'db_usuarios');
mysqli_set_charset($conn,'utf8'); 

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
    
    <div class="row">
        <div class="col s8 offset-s2">
<table class="stripped highlight" style="width:100%; border:2px">
<thead>
    
    <tr>
    <!--seccion A-->
    
    <th align="center">Nombre</th>
	<th align="center">Cuenta/Trabajador</th>
	<th align="center">Restricción</th>
    <th align="center">Motivo de la Restricción</th>
    <th align="center">Comentarios</th>        
    
    </tr>
</thead>
    
    
    <?php 
    if (mysqli_num_rows($consulta)>0){
        while($row = mysqli_fetch_assoc($consulta)){?>
    
            <tr>
            
            <td align="Left"><?php echo $row['nombre_usuario']; ?></td>
            <td align="center"><?php echo $row['no_cuenta']; ?></td>
            <td align="center"><?php echo $row['Restriccion']; ?></td>
            <td align="center"><?php echo $row['Motivo']; ?></td>
            <td align="center"><?php echo $row['Comentarios']; ?></td>
                            
    </tr>
        <?php }
    } else {
        echo 'El numero de resultados es: 0 resultados';
    }
    ?>
    
</table>
    </div>
        </div>
    
    <!--Script de nav pasarlo a un php-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">$(".brand-logo").sideNav();</script> 
</body>
</html>