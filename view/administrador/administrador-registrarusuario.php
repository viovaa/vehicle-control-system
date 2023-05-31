<!doctype html>
<html lang="en">

<head>
  <title>Registrar Usuario</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="../../public/css/style.css">
  <link rel="shortcut icon" href="../../public/img/favicon-scv.png" type="image/x-icon">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <nav class="navbar navbar-dark bg-dark">
      <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Administrador</span>
        <button class="btn btn-danger ms-auto" onclick="cerrarSesion()">Cerrar Sesión</button>
      </div>
    </nav>
  </header>
  <main>
    <div class="container mt-4">
      <div class="card text-center">
        <div class="card-body">
          <h4 class="card-title">Registrar Nuevo Usuario</h4>
        </div>
    </div>
    <div>
      <form>
        <div class="col-md-6">
          <label for="fechaIngreso" class="form-label">Fecha de ingreso</label>
          <input type="text" class="form-control" id="fechaIngreso" name="fechaIngreso">
        </div>
        <div class="col-md-6">
          <label for="rut" class="form-label">Rut</label>
          <input type="text" class="form-control" id="rut" name="rut">
        </div>
        <div class="col-md-3">
          <label for="rol" class="form-label">Rol</label>
            <select class="form-select form-control" id="rol" name="rol">
                <option value="" disabled selected>-----</option>
                <option value="Oficial de aduana">Oficial de aduana</option>
                <option value="Policía de tráfico">Policía de tráfico</option>
                <option value="Agente aduanal">Agente aduanal</option>
            </select>
        </div>
        <div class="col-md-6">
            <label for="sanciones" class="form-label">Sanciones</label>
            <input type="text" class="form-control" id="sanciones" name="sanciones">
        </div>
        <div class="col-md-6">
            <label for="nombres" class="form-label">Nombres</label>
            <input type="text" class="form-control" id="nombres" name="nombres">
        </div>
        <div class="col-md-6">
            <label for="apellidos" class="form-label">Apellidos</label>
            <input type="text" class="form-control" id="apellidos" name="apellidos">
        </div>
        <div class="col-md-6">
            <label for="contacto" class="form-label">Número de contacto</label>
            <input type="text" class="form-control" id="contacto" name="contacto">
        </div>
        <div class="col-md-6">
            <label for="correo" class="form-label">Correo</label>
            <input type="email" class="form-control" id="correo" name="correo">
        </div>
      </form>
        <form action="administrador-home-listarusuario.php" method="POST">
          <!-- Form fields go here -->
        <button type="submit" class="btn btn-primary mt-3">Registrar</button>
        </form>
    </div>


    <script>
      function cerrarSesion() {
        window.location.href = "../../public/src/cerrarsesion.php";
      }     
    </script>




  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>
