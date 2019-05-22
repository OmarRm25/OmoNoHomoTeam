<?php
session_start();
//control de acceso
if ($_SESSION['u_usuario'] == ''){header('location: ./login.php');}
//cotejo
$conn = new mysqli('localhost', 'root', '', 'db_usuarios'); 
mysqli_set_charset($conn,'utf8');

//desplegar para visualizar las listas
$consulta_asignatura= $conn->query("select * from c_asignaturas");
$consulta_servicios= $conn->query("select * from c_servicios");

//traer los datos del usuario
$no_cuenta = $_SESSION['u_usuario'];
$proceso= $conn->query("SELECT * FROM usuarios WHERE no_cuenta='$no_cuenta'");

//listar los datos del usuario
if ($resultado = mysqli_fetch_array($proceso)){
        $nombre_formulario = $resultado[0];
        $no_cuenta_formulario = $resultado[2];
        $telefono_formulario = $resultado[4];        
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
            
             
            <h5 align="center">PRESTAMO DE EQUIPO Y AULAS</h5>
            
            <!--Empieza Formulario-->
            
            <form action="submit_prestamo.php" method="post" accept-charset="utf-8" class="form_cotact">
                
<!--                los datos de traen de la consulta  -->
                Nombre del Solicitante: <b><?php echo $nombre_formulario;?></b> <br>
                No de Cuenta: <b><?php echo $no_cuenta_formulario;?></b><br>
                Teléfono: <b><?php echo $telefono_formulario;?></b><br>
                
                <br>Asignatura: 
<!--				los datos de traen de la consulta-->
				<select required="required" class="browser-default"><?php     if (mysqli_num_rows($consulta_asignatura)>0){while($row = mysqli_fetch_assoc($consulta_asignatura)){?>
                
                <option value="<?php echo utf8_decode($row['Asignatura']); ?>"><?php echo utf8_decode($row['Asignatura']); ?></option>   
        <?php }
    } else {
        echo 'El numero de resultados es: 0 resultados';
    }
    ?>
</select><br>
				
				
                Profesor: <input required="required" type="text" name="nombre_solicitante" value="" placeholder="Ingrese el nombre del Profesor Responsable"><br>
                
                Servicio: 
				
				<select required="required" class="browser-default"><?php if (mysqli_num_rows($consulta_servicios)>0){while($row = mysqli_fetch_assoc($consulta_servicios)){?>
                <option value="<?php echo utf8_decode($row['Servicio']); ?>"><?php echo utf8_decode($row['Servicio']); ?></option>   
        <?php }
    } else {
        echo 'El numero de resultados es: 0 resultados';
    }
    ?>
</select><br>
<!--                falta la implementancion-->
                Mensaje Adicional:
                
                <textarea style="min-height:150px" rows="10" cols="500" id="mensaje_adicional" name="mensaje_adicional"></textarea>
                
        </form>
            
            <!--Termina Formulario-->
                 
    </div>
            </div>
                 
             
             
             
        
     <!--Script de nav pasarlo a un php-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">$(".brand-logo").sideNav();</script> 
    </body>
</html>