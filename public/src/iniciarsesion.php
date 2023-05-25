<?php
    session_start();

    # variable superglobal desarrollador
    $_SESSION["Grupo_de_desarrollo"] = "nullsoftware";
    
    # inicia los intentos
    if (!isset($_SESSION["intentos"])) $_SESSION["intentos"] = 0;
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iniciar seción</title>
    <link rel="shortcut icon" href="../img/favicon-scv.png" type="image/x-icon">
</head>
<body>

    <!--iniciar sesion-->
    <form action="../../config/validaciones.php" method="post">
    <?php
        #se cuendo 
        if ($_SESSION["intentos"] === 1) {
            echo "<h1>tiene solo 2 intentos de ingresar al sic</h1>";
        } elseif ($_SESSION["intentos"] === 2) {
            header("location: src/cerrarSesion.php");
        }
    ?>
    <!-- correo -->
    <label for="email"><img src="../img/correo.png" alt="email"></label><br>
    <input required type="email" name="email" id="email" placeholder="ingrese su correo">
    <br><br>
    <!-- contraseña -->
    <label for="password"><img src="../img/contraseña.png" alt="password"></label><br>
    <input required type="password" name="password" id="password" placeholder="ingrese su contraseña">
    <br><br>
    <input type="submit" value="ingresar">

    </form>
    
</body>
</html>