<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<!--<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" /> -->
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	<title>Menu</title>
  <?php include('styles.php'); ?>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="assets/css/materialize-social.css">

</head>

<?php include('./nav.php') ?>
<body>

	<section class="container">
		<div class="row">
			<h3 class="center-align">Contáctanos</h3>
			<article class="col s6 ">
				<form method="POST" action="submit_contacto.php">
					<div class="input-field">
						<i class="material-icons prefix">perm_identity</i>
						<label for="nombre">Nombre</label>
						<input type="text" name="nombre" required>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">person_pin</i>
						<label for="apellido">Apellido</label>
						<input type="text" name="apellido" required>
					</div>
                    <div class="input-field">
						<i class="material-icons prefix">email</i>
						<label for="email">Correo</label>
						<input type="text" name="email" required>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">art_track</i>
						<label for="no_cuenta">Numero de cuenta</label>
						<input type="text" name="no_cuenta" maxlength="10" required>
					</div>

					<div class="input-field">
						<i class="material-icons prefix">mode_edit</i>
						<label for="mensaje">Mensaje</label>
						<textarea name="mensaje" id="" rows="10" class="materialize-textarea" length="140" required></textarea>
					</div>

					<p class="center-align">
						<button class="waves-effect waves-light btn" type="submit"><i class="material-icons right">send</i>enviar</button>
					</p>

				</form>

			</article>

			<p class="center-aling">
				<a class="waves-effect waves-light btn-floating social facebook" href="https://www.facebook.com/">
					<i class="fa fa-facebook"></i> Sign in with facebook
				</a>

				<a class="waves-effect waves-light btn-floating social twitter" href="https://twitter.com/?lang=es">
					<i class="fa fa-twitter"></i> Sign in with twitter
				</a>
				<a class="waves-effect waves-light btn-floating social instagram" href="https://www.instagram.com/?hl=es-la" >
						<i class="fa fa-instagram"></i> Sign in with instagram
				</a>

			</p>
		</div>
	</section>



	<script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script type="text/javascript" src="assets/js/materialize.js"></script>

	<script type="text/javascript">
		$(".brand-logo").sideNav();
	</script>
</body>

</html>
