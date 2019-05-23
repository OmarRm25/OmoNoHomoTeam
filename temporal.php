<?php
session_start();
$conn = new mysqli('localhost', 'root', '', 'cursos_inter');
mysqli_set_charset($conn,'utf8'); 

$consulta= $conn->query("select * from registro_user");
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
	<th align="center">Numero de Cuenta</th>
	<th align="center">Correo</th>     
    
    </tr>
</thead>
    
    
    <?php 
    if (mysqli_num_rows($consulta)>0){
        while($row = mysqli_fetch_assoc($consulta)){?>
    
            <tr>
            
            <td align="Left"><?php echo $row['Nombre(s)']; ?></td>
            <td align="center"><?php echo $row['Num_cuenta']; ?></td>
            <td align="center"><?php echo $row['correo']; ?></td>
            
                            
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