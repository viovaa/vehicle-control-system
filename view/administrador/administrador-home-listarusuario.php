<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Administrador</title>
  <link rel="stylesheet" href="../../public/css/style.css">
  <link rel="shortcut icon" href="../../public/img/favicon-scv.png" type="image/x-icon">
  
</head>
<body>
    <h1>Bienvenido al sistema de control de usuarios</h1>
    <div>
    <p>¿Qué desea realizar?</p>
    
    <div>
        <button class="button" onclick="redirectToListaUsuarios()">Ver lista de usuarios</button>
        <button class="button" onclick="redirectToRegistroUsuario()">Registrar usuario</button>
    </div>
  
    <form action="../../public/src/cerrarsesion.php" method="POST" class="btn btn-secondary btn-regresar">
        <input type="submit" value="Cerrar Sesión">
        
    <script>
    function redirectToListaUsuarios() {
        window.location.href = "administrador-listarusuario.php";
    }
    
    function redirectToRegistroUsuario() {
      window.location.href = "administrador-registrarusuario.php";
    }
    </script>
  
</body>
</html>
