<?php

session_start();
include('../../config/validaciones.php');
$mensaje = "No se encontro una cuenta asociada a $hola";
echo "<script>alert('$mensaje');</script>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php include("../home.php"); ?>
    
</body>
</html>