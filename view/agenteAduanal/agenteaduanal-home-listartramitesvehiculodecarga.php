<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Administrador</title>
  <link rel="stylesheet" href="../../public/css/style.css">
  <link rel="shortcut icon" href="../../public/img/favicon-scv.png" type="image/x-icon">

  
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    
  
</head>
<body>
    <h1>Bienvenido</h1>
    <div>
    <p>Seleccione Acciones...</p>
    
    <div>
        
    </div>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Pulse para acceder a Lista de Documentos</h4>
            <p class="card-text"><button type="button" class="btn btn-dark" onclick="redirectToDocumentos()">Lista de Documentos</button></p>
            <h4 class="card-title">Pulse para acceder a Vista de Tramites</h4>
            <p class="card-text"><button type="button" class="btn btn-dark" onclick="redirectToSeleccionarTramite()">Seleccionar Tramite</button></p>

            <form action="../../public/src/cerrarsesion.php" method="POST" class="btn btn-secondary btn-regresar">
                <input type="submit" value="Cerrar Sesión">
        </div>
    </div>


    <script>
    function redirectToDocumentos() {
        window.location.href = "agenteaduanal-documentos.php";
    }

    function redirectToSeleccionarTramite() {
        window.location.href = "agenteaduanal-seleccionartramite.php";
    }

       
    </script>
  
</body>
</html>
