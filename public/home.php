<?php
    /*
    session_start();
    #$email = $_POST['email']; ######
    //Se muestra un alert si se haya redirigido a home.php desde cerrarsesion.php
    if (isset($_SESSION['redireccion_desde_cerrarsesion.php']) == true) {
        $_SESSION['redireccion_desde_cerrarsesion.php'] = false;
        echo '<script>alert("Redireccionado desde cerrarsesion.php");</script>';
        // Restablecer la variable de sesión para futuras redirecciones
        
    }
    */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sistema de control de vehículos</title>
    <link rel="shortcut icon" href="./img/favicon-scv.png" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <?php include 'src/menu.php'; ?>

    <div>
        <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];

                if ($page === 'acercade') {
                    include 'src/acercade.php';
                } elseif ($page === 'sugerencias') {
                    include 'src/sugerencias.php';
                } elseif ($page === 'contacto') {
                    include 'src/contacto.php';
                } elseif ($page === 'iniciarsesion') {
                    include 'src/iniciarsesion.php';
                } elseif ($page === 'oficial1') {
                    include 'src/oficial1.php';
                }
            }
        ?>
    </div>
</body>
</html>

