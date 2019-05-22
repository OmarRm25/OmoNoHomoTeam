<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'db_usuarios');
mysqli_set_charset($conn,'utf8'); 

$consulta= $conn->query("select * from c_asignaturas");
?>

<!DOCTYPE html>
  <html>
    <head>
        <meta charset="UTF-8">
                <?php include('./styles.php')?>

    </head>
        
<body>
    <?php include('./nav.php')?>


<table style="width:100%; border:2px">
<thead>
    
    <tr>
    <!--seccion A-->
    <th>Clave</th>
	<th>Asignatura</th>
	<th>Semestre</th>
	<th>Comentarios</th>        
    </tr>
</thead>
    
    
    <?php
    //acarreo de las asignaturas en una tabla 
    if (mysqli_num_rows($consulta)>0){
        while($row = mysqli_fetch_assoc($consulta)){?>
    
            <tr>
            <td><?php echo $row['Clave']; ?></td>
            <td><?php echo $row['Asignatura']; ?></td>
            <td><?php echo $row['Semestre']; ?></td>
            <td><?php echo $row['Comentarios']; ?></td>
                            
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