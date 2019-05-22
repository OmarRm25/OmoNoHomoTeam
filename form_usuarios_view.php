<?php
session_start();

if ($_SESSION['g_usuario'] >= '2'){}

else{
        header ('location: ./dashboard.php');    
    }
$conn = new mysqli('localhost', 'root', '', 'db_usuarios');
mysqli_set_charset($conn,'utf8'); 


$NoCuenta = $_GET['no_cuenta'];
$consulta= $conn->query("
SELECT * FROM usuarios WHERE no_cuenta = '$NoCuenta'
");
    
    $row = mysqli_fetch_assoc($consulta);

?>

<!DOCTYPE html>

<html lang="en">

<head>
 <title>Editar Usuario</title>
 <meta charset = "utf-8">
<?php include('./styles.php')?>

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
<?php include('./nav.php')?>
    


 <form action="<?php
               echo 'submit_delete_usuario.php'
               ?>
               
               
               " method="post">
<div class="row">
<div class="col s8 offset-s2">
    <h4>Editar al usuario (<?php
     echo $NoCuenta;
     ?>)</h4> 
    <div class="row">
        <div class="col s3">
<!--Nombre-->
 <label for="nombre">Nombre Completo:</label><br>
 <input disabled type="text" name="username" value="<?php echo $row['nombre_usuario']; ?>" maxlength="255" required>
 <br/><br/>
         
        </div>
        
         <div class="col s3">
             <!-- Carrera -->
<label for="carrera">Carrera:</label><br>
<input disabled type="text" name="carrera" value="<?php echo $row['carrera']; ?>" maxlength="255" required>
             <br/><br/></div>
         
         
         
         <div class="col s3">
         <!-- Institucion -->
<label for="institucion">Institucion:</label><br>
<input disabled type="text" name="institucion" maxlength="35" value="<?php echo $row['institucion']; ?>" required>
<br/><br/>
         </div>
        
        <div class="col s3">
         <!-- No_Cuenta SE ENVIA AL EXTREMO IZQUIERDO PARA NO VISUALIZARLO-->

<input style="margin-left:-5000px" tabindex="-1" type="text" name="no_cuenta" maxlength="10" value="<?php echo $row['no_cuenta']; ?>">
<br/><br/>
         </div>
         
         <div class="col s12">
        <!-- Direcion -->
<label for="direcion">Direccion:</label><br>
<input disabled type="text" name="direccion" maxlength="255" required value="<?php echo $row['direcion']; ?>">
             <br/><br/></div>
         
         
     
 
 

<div class="col s3">
<!-- Telefono -->
<label for="telefono">Telefono:</label><br>
<input disabled type="text" onkeypress="return valida(event) "name="telefono" maxlength="15" value="<?php echo $row['telefono']; ?>" required>
<br/><br/></div>

<div class="col s3">
<!-- Email -->
<label for="correo">Email:</label><br>
<input disabled type="email" name="correo" maxlength="35" required value="<?php echo $row['email']; ?>">
<br/><br/>
</div>

<div class="col s3">

<label for="restrcciones">¿Tiene Restricciones?: </label><br>

     <select disabled class="browser-default" name="Restriccion">
         
     <?php
         $res = $row['Restriccion'];
               
         if($res == 0){
             echo '<option value="0" selected>NO</option>';
             echo '<option value="1" >Si</option>';
             
         }else{
             echo '<option value="1" selected>SI</option>';
             echo '<option value="0" >No</option>';
            
         }
         
         ?>
     </select>
     
    <br/><br/></div>
         
<div class="col s3">

<label for="Motivo">Motivo de la restrcción?:</label><br>

 <?php if($res == 0){
    echo '<input disabled type="text" name="Motivo" maxlength="255" value="No Restringido">';
    
}else{
    
    echo '<input disabled type="text" name="Motivo" maxlength="255" value="'.$row['Motivo'].'">';
}?>
     
    <br/><br/></div>
     
     <div class="col s1">
<label for="Permisos">Permisos</label><br>

     <select disabled class="browser-default" name="Permisos">
         
     <?php
         $lvl = $row['Permisos'];
               
         if($lvl == 1){
             echo '<option value="1" selected>Usuario</option>';
             echo '<option value="2">Administrativo/Servicio Social/CAE</option>';
             echo '<option value="3">Root</option>';}
         
         if($lvl == 2){
             echo '<option value="1">Usuario</option>';
             echo '<option value="2"selected>Administrativo/Servicio Social/CAE</option>';
             echo '<option value="3">Root</option>';}
         
          if($lvl == 3){
             echo '<option value="1">Usuario</option>';
             echo '<option value="2">Administrativo/Servicio Social/CAE</option>';
             echo '<option value="3" selected>Root</option>';}
         
         ?>
     </select><br><br></div>
         
         <div class="col s3">
     <label for="Grado">Grado</label><br>

     <select disabled class="browser-default" name="Grado">
         
     <?php
         $grd = $row['Grado'];
               
         if($grd == ''){
             echo '<option value="Alumno" selected>Alumno</option>';
             echo '<option value="Profesor">Profesor</option>';
             echo '<option value="Visitante">Visitante</option>';}
         
         if($grd == 'Alumno'){
             echo '<option value="Alumno" selected>Alumno</option>';
             echo '<option value="Profesor">Profesor</option>';
             echo '<option value="Visitante">Visitante</option>';}
         
         if($grd == 'Profesor'){
             echo '<option value="Alumno" >Alumno</option>';
             echo '<option value="Profesor" selected>Profesor</option>';
             echo '<option value="Visitante">Visitante</option>';}
         
         if($grd == 'Visitante'){
             echo '<option value="Alumno" >Alumno</option>';
             echo '<option value="Profesor" >Profesor</option>';
             echo '<option value="Visitante" selected>Visitante</option>';}
         
         ?>
     </select><br><br></div>
     
  <div class="col s8"   >
<label for="Comentarios">Comentarios:</label><br>
<input disabled type="text" name="Comentarios" maxlength="35" value="<?php echo $row['Comentarios']; ?>">
</div>
     
     </div>

 <br/><br/>
    
    
    <a href="./c_usuarios_control.php" class="waves-effect waves-light grey btn"><i class="material-icons left">cancel</i>Cancelar</a>
    
 </div></div>
 
    

 </form>

<br />

<!--Script de nav pasarlo a un php-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">$(".brand-logo").sideNav();</script> 
 </body>
</html>