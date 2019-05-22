<?php
//nav menu de arriba 
if (empty($_SESSION['u_usuario'])){

echo '
<nav class="nav-wrapper card-panel accent-2 left-align panel2" style="background:#00BCD4">
	    <div class="panel" >

				<ul class="rigth" >
                
                    <li><a data-activates="slide-out" class="brand-logo"><i class="material-icons ">&#xE5D2;</i></a></li>
				
				</ul>



          <ul class="right" id="centrado" >
	        <li><a href="./"><i class="material-icons">home</i></a></li>
	        

	      </ul>



	      <ul id="slide-out" class="side-nav fondomenu"  style="background:#00BCD4">

            <li>
            <div class="user-view" >
            <div class="background">
            </div>
            </div>
			</li>

          <li>
            <a href="./login.php">
            <i class="material-icons">
            <font color="white">account_circle</font>          
            </i> <font color="white">Iniciar Sesión</font></a>
          </li>
          
          <li>
            <a href="./form_contacto.php">
            <i class="material-icons">
            <font color="white">mail</font>          
            </i> <font color="white">Contáctanos</font></a>
          </li>
        </ul>


	    </div>


	</nav>
        

    '
    ;
}

else
    
{
    
    echo '
<nav class="nav-wrapper card-panel accent-2 left-align panel2" style="background:#00BCD4">
	    <div class="panel" >

				<ul class="rigth" >
                


                    <li><a data-activates="slide-out" class="brand-logo"><i class="material-icons">&#xE5D2;</i></a></li>
					<li><a id="carga"><i class="brand-logo" class="material-icons"></i>
                    
                        <img src="./assets/media/img/logo_unam.png" height="50px">
                    
                    </a></li>
				
				</ul>



          <ul class="right" id="centrado" >
	      
          
          <li>'?>

        <?php

        if ($_SESSION['g_usuario'] == '1'|| $_SESSION['g_usuario'] == '2'|| $_SESSION['g_usuario'] == '3')    
    {
        echo '<b>'. ($_SESSION['u_nombre']).'</b>
        ';
     
    }
//si se cumple la condicion se muestran las diferentes opciones del menu?>
        
        
                
        
        
        
        <?php echo '</li>
        
          
          <li><a href="./session_destroy.php"><i class="material-icons">exit_to_app</i></a></li>
          <li><a href="./settings.php"><i class="material-icons">settings</i></a></li>
          <li><a href="./dashboard.php"><i class="material-icons">dashboard
</i></a></li>
          <li><a href="./"><i class="material-icons">home</i></a></li>
	        

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
            <a href="./form_contacto.php">
            <i class="material-icons">
            <font color="white">mail</font>          
            </i> <font color="white">Contáctanos</font></a>
          </li>
                
          <li>
            <a href="./c_asignaturas.php">
            <i class="material-icons">
            <font color="white">list</font>          
            </i> <font color="white">Asignaturas</font></a>
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
    
    ';
    
}
    ?>