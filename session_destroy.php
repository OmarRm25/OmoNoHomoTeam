<?php
session_start();
$_SESSION['u_nombre']='text';
$_SESSION['n_usuario'] = '';
$_SESSION['g_usuario'] = '';
session_destroy();
        
header('location: ./index.php');
?>