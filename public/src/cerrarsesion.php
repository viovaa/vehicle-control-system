<?php

session_start();
$_SESSION['redireccion_desde_cerrarsesion.php'] = true;
header('location: ../home.php');
?>
