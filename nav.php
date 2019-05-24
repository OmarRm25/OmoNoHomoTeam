<?php
//nav menu de arriba
if (empty($_SESSION['u_usuario'])) {
	echo '
		<nav class="nav-wrapper card-panel accent-2 left-align panel2" style="background:#00BCD4 ; min-height: 90px;">

		  <div class="panel" >

				<ul class="rigth" >

				</ul>

		    <ul class="right" id="centrado" >
		    	<li><a href="./"><i class="material-icons">home</i></a></li>
		    </ul>

		    <ul style="background:#00BCD4">
		      <li>
		        <div class="user-view" >
		          <div class="background">
		          </div>
		        </div>
					</li>

		      <li>
		        <a href="./login.php">
		        <i class="material-icons tooltipped" data-position="bottom" data-tooltip="Iniciar Sesión">
		        <font color="white">account_circle</font>
		        </i> </a>
		      </li>
		    </ul>

		  </div>

		</nav>

';}

else {
	echo '
		<nav class="nav-wrapper card-panel accent-2 left-align panel2" style="background:#00BCD4; min-height: 90px;">

			<div class="panel" >

				<ul class="rigth" >

        	<li><a data-activates="slide-out" class="brand-logo"><i class="material-icons">&#xE5D2;</i></a></li>

				</ul>

        <ul class="right" id="centrado" >

			    <li>';

						if ($_SESSION['g_usuario'] == '1'|| $_SESSION['g_usuario'] == '2'|| $_SESSION['g_usuario'] == '3'){
							echo '<b>'. ($_SESSION['u_nombre']).'</b>';
						}
							//si se cumple la condicion se muestran las diferentes opciones del menu
		echo '</li>

	        <li><a href="./"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Pantalla principal">home</i></a></li>
			<li><a href="./session_destroy.php"><i class="material-icons tooltipped" data-position="bottom" data-tooltip="Cerrar sesión">exit_to_app</i></a></li>
      	</ul>

	      <ul id="slide-out" class="side-nav fondomenu"  style="background:#00BCD4">

	        <li>
	          <div class="user-view" >
	            <div class="background">
	            </div>
	          </div>
					</li>

	        <li>
	          <a href="./dashboard.php">
	          <i class="material-icons">
	          <font color="white">dashboard</font>
	          </i> <font color="white">Dashboard</font></a>
	        </li>

	        <li>
	          <a href="./index.php">
	          <i class="material-icons">
	          <font color="white">home</font>
	          </i> <font color="white">Inicio</font></a>
	        </li>

	        <li>
	          <a href="./form_prestamo.php">
	          <i class="material-icons">
	          <font color="white">computer</font>
	          </i> <font color="white">Servicios y Prestamos</font></a>
	        </li>

	        <li>
	          <a href="./session_destroy.php">
	          <i class="material-icons">
	          <font color="white">exit_to_app</font>
	          </i> <font color="white">Cerrar Sesión</font></a>
	        </li>

	      </ul>

			</div>

		</nav>

';}
?>
