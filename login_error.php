<?php
session_start();

if ($_SESSION['u_usuario'] = ''){}else{header('location: ./dashboard.php');}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include ('./styles.php'); ?>
   
    <title>Index</title>
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
<?php include ('./nav.php'); ?>
<body>
<p align="center" style="color:red;">El usuario o la contraseña son incorrectos</p>

  <form action="validar_login.php" method="POST">
  <div class="form-group">
    <label for="exampleInputEmail1">Numero de Cuenta</label>
    <input type="text" onkeypress="return valida(event)" maxlength="10" placeholder="Numero de cuenta" name="no_cuenta" require class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">Ingresa tu numero de Cuenta.</small>
  </div>
  
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" placeholder="Contraseña" name="password" require class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  
   <button type="submit" class="btn btn-primary">Iniciar Sesion</button>
   <button type="button" class="btn"><a href="./registro.php" > Registrar</a></button>
  </form>
<!--Script de nav pasarlo a un php-->
<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script type="text/javascript" src="assets/js/materialize.js"></script>
<script type="text/javascript">$(".brand-logo").sideNav();</script> 
 
</body>
</html>