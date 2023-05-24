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
    <form action="../config/validaciones.php" method="post">

    </form>
    
</body>
</html>