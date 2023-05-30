<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Administrador</title>
  <link rel="stylesheet" href="../../public/css/style.css">
  <link rel="shortcut icon" href="../../public/img/favicon-scv.png" type="image/x-icon">
  
</head>
<body>
    <h1>Bienvenido</h1>
    <div>
    <p>Pulse para acceder a la lista de documentos</p>
    
    <div>
        <button class="button" onclick="redirectToDocumentos()">Lista de Documentos</button>
    </div>
  
    <form action="../../public/src/cerrarsesion.php" method="POST" class="btn btn-secondary btn-regresar">
        <input type="submit" value="Cerrar Sesión">

    <script>
    function redirectToDocumentos() {
        window.location.href = "agenteaduanal-documentos.php";
    }
       
    </script>
  
</body>
</html>
