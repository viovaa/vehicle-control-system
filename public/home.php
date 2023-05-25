<?php
    session_start();
    #$email = $_POST['email']; ######
    //Se muestra un alert si se haya redirigido a home.php desde cerrarsesion.php
    if ($_SESSION['redireccion_desde_cerrarsesion.php'] == true) {
        echo '<script>alert("Redireccionado desde cerrarsesion.php");</script>';
        // Restablecer la variable de sesión para futuras redirecciones
        $_SESSION['redireccion_desde_cerrarsesion.php'] = false;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema de control de vehículos</title>
    <link rel="shortcut icon" href="./img/favicon-scv.png" type="image/x-icon">
</head>
<body> 
    <h3>gollqa</h3>
    
</body>
</html>

<!--  la página ./src/iniciarsecion.php ya esta creada, solo tienes que hacer un hipervinculo>