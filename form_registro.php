<?php
session_start();
?>

<!DOCTYPE html>

<html lang="en">

<head>
 <title>Registrar Usuario</title>
  <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="icon" type="image/jpg" sizes="120x120" href="assets/media/favicon.jpg">
 <meta http-equiv="X-UA-Compatible" content="ie=edge">
 <?php include('./styles.php') //acarreo de los estilos ?>
 <!--Materialize files-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
    <link rel="stylesheet" type="text/css" href="assets/css/estilos.css">
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

 <header>
 <h1 style="text-align:center" >Regístrate </h1>
 </header>
<div class="row" style="margin-top:50px">
<div class="col s6 offset-s3">

 <form action="submit_registrar_usuario.php" method="post">

 <hr />
 <h3 style="text-align: center">Crea tu cuenta</h3>

<!-- No_Cuenta -->
<label for="no_cuenta">Número de Cuenta:</label><br>
<input type="text" name="no_cuenta" maxlength="10" required>
<br/><br/>

 <!--Nombre-->
<div>
 <label for="nombre">Nombre:</label><br>
 <input type="text" name="username" maxlength="255" required>
 <br/><br/>
</div>

<!--ApPaterno-->
<div>
 <label for="nombre">Apellido Paterno:</label><br>
 <input type="text" name="ApPaterno" maxlength="255" required>
 <br/><br/>
</div>

<!--ApMaterno-->
<div>
 <label for="nombre">Apellido Materno:</label><br>
 <input type="text" name="ApMaterno" maxlength="255" required>
 <br/><br/>
</div>

<!-- Email -->
<label for="correo">Email:</label><br>
<input type="email" name="correo" maxlength="35" required>
<br/><br/>

<!--Password-->
<label for="xxx">Contraseña:</label><br>
<input type="password" name="password" maxlength="8" required>

 <br/><br/>
<input type="submit" name="submit" class="btn btn-primary" style="background-color: #00BCD4" value="Registrar">
<input type="reset" name="clear" class="btn btn-primary" style="background-color: #00BCD4" value="Borrar">
<hr>
<label style="text-decoration-color: black" for="login">¿Ya tienes una cuenta? Ingresa aquí:</label>
<br>
<button type="button" class="btn" style="background-color:#CDDC39"> <a href="./login.php" ><font color="white">Login</font></a></button>



 </form>
    </div>
    </div>
<hr /><br />
 <!--Script de nav pasarlo a un php-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">$(".brand-logo").sideNav();</script>

 </body>
 <?php include ('./foot.php'); ?>
</html>
