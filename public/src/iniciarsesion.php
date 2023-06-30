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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">
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
    <div class="login-container">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">Inicio de Sesión</h3>
                    <div class="form-group">
                        <label for="email" alt="email">Correo:</label>
                        <input required type="email" name="email" id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password" alt="password">Contraseña:</label>
                        <input required type="password" name="password" class="form-control" id="password">
                    </div>
                    <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>
        </div>
    </div>

    <a href="../../public/home.php" class="btn btn-secondary btn-regresar">Regresar</a>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>        
</body>
</html>