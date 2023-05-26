<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Oficial Inspección Aduana</title>
  <link rel="stylesheet" href="../../public/css/style.css">
  
</head>
<body>
  <h1>Bienvenido al sistema de control de vehículos</h1>
  <div>
    <p>¿Qué desea ver?</p>
    
  </div>
  <div>
    <button class="button" onclick="redirectToCarga()">Vehículos de Carga</button>
    <button class="button" onclick="redirectToParticulares()">Vehículos Particulares</button>
  </div>
  
  <a href="../../public/home.php" class="btn btn-secondary btn-regresar">Regresar</a>

  
  <script>
    function redirectToCarga() {
      window.location.href = "vehiculos_carga.php";
    }
    
    function redirectToParticulares() {
      window.location.href = "vehiculos_particulares.php";
    }
  </script>
  
</body>
</html>
