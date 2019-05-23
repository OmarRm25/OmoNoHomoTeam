<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'cursos_inter');
mysqli_set_charset($conn,'utf8'); 

$consulta= $conn->query("select * from cursos");
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
    <th>ID</th>
	<th>Curso</th>
	<th>Carrera</th>
	<th>Cupo</th>
    <th>Salón</th>
    <th>Horario</th>        
    </tr>
</thead>
    
    
    <?php
    //acarreo de las asignaturas en una tabla 
    if (mysqli_num_rows($consulta)>0){
        while($row = mysqli_fetch_assoc($consulta)){?>
    
            <tr>
            <td><?php echo $row['idCursos']; ?></td>
            <td><?php echo $row['Nombre_curso']; ?></td>
            <td><?php echo $row['Carrera']; ?></td>
            <td><?php echo $row['Cupo']; ?></td>
            <td><?php echo $row['Salon']; ?></td>
            <td><?php echo $row['Horario']; ?></td>
                            
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