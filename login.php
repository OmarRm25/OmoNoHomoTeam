<?php
session_start();
if (empty($_SESSION['u_usuario']))
{

}
else
{
    header('location: ./dashboard.php');
}//seguridad para no poder acceder a el dashboard

?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php include ('./styles.php'); //traen los estilos?>

    <title>Login</title>
</head>
<script>// codigo para no poder insertar letras solo numeros
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
<?php include ('./nav.php'); // se trae el nav bajo el nivel de permisos ver el nav.php?>

<body>

  <div class="row" style="margin-top:50px">
    <div class="col s6 offset-s3">
      <form action="validar_login.php" method="POST">
      <div class="form-group">
        <label for="exampleInputEmail1">Numero de Cuenta</label>
        <input type="text" onkeypress="return valida(event)" maxlength="10" placeholder="Numero de cuenta" name="no_cuenta" require class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
      </div>
      <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" placeholder="Contraseña" name="password" require class="form-control" id="exampleInputPassword1" placeholder="Password">
      </div>
      <button type="submit" class="btn btn-primary" style="background-color:#CDDC39;color:white">Iniciar Sesion</button>
      <button type="button" class="btn" style="background-color:#CDDC39"> <a href="./form_registro.php" ><font color="white">Registrar</font></a></button>
      </form>
    </div>
  </div>
  <!--Script de nav pasarlo a un php-->
  <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>
	<script type="text/javascript">$(".brand-logo").sideNav();</script>

</body>
</html>
