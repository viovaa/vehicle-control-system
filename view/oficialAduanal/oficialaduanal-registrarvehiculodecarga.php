


<!doctype html>
<html lang="en">

<head>
  <title>registrar vehiculo de carga</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="shortcut icon" href="../../public/img/favicon-scv.png" type="image/x-icon">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
  <form action="./oficialaduanal-home-listarvehiculodecarga.php" method="post" class="row g-3">
        <div class="seccion-vehiculo">
            <h2>Datos del vehículo</h2>
            <!-- Campos del vehículo -->
            <div class="col-md-6">
                <label for="patente" class="form-label">Patente</label>
                <input type="text" class="form-control" id="patente" name="patente">
            </div>

            <div class="col-md-4">
                <label for="marca" class="form-label">Marca</label>
                <select id="marca" class="form-select" name="marca">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="tipovehiculo" class="form-label">Tipo de vehículo</label>
                <select id="tipovehiculo" class="form-select" name="tipovehiculo">
                <option selected>Choose...</option>
                <option>camion</option>
                <option>camioneta</option>
                <option>furgoneta</option>
                </select>
            </div>

            <div class="col-md-4">
                <label for="modelo" class="form-label">Modelo</label>
                <select id="modelo" class="form-select" name="modelo">
                <option selected>Choose...</option>
                <option>...</option>
                </select>
            </div>

            <div class="col-md-6">
                <label for="agnovehiculo" class="form-label">Año</label>
                <input type="text" class="form-control" id="agnovehiculo" name="agnovehiculo">
            </div>
        </div>

        <div class="seccion-carga hidden">
            <h2>Datos de carga</h2>
            <!-- Campos de carga -->
            <div class="col-md-4">
                    <label for="tipocarga" class="form-label">Tipo de carga</label>
                    <select id="tipocarga" class="form-select" name="tipocarga">
                    <option selected>Choose</option>
                    <option>Productos alimenticios y agrícolas</option>
                    <option>Productos químicos y peligrosos</option>
                    <option>Productos electrónicos</option>
                    <option>Carga mixta</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label for="pesocarga" class="form-label">Peso en toneladas</label>
                    <input type="text" class="form-control" name="pesocarga" id="pesocarga">          
                </div>
                <div class="col-md-6">
                    <label for="valorcarga" class="form-label">valor total en $US</label>
                    <input type="text" class="form-control" name="valorcarga" id="valorcarga">          
                </div>
        </div>

        <div class="seccion-conductor hidden">
            <h2>Datos del conductor</h2>
            <!-- Campos del conductor -->
            <div class="col-md-6">
                    <label for="nombresconductor" class="form-label">Nombres</label>
                    <input type="text" class="form-control" name="nombresconductor" id="nombresconductor">          
                </div>
                <div class="col-md-6">
                    <label for="apellidosconductor" class="form-label">Apellidos</label>
                    <input type="text" class="form-control" name="apellidosconductor" id="apellidosconductor">          
                </div>
                <div class="col-md-6">
                    <label for="rutconductor" class="form-label">RUT</label>
                    <input type="text" class="form-control" name="rutconductor" id="rutconductor">          
                </div>
                <div class="col-md-6">
                    <label for="emailconductor" class="form-label">Email</label>
                    <input type="email" class="form-control" name="emailconductor" id="emailconductor">
                </div>

                <div class="col-md-6">
                    <label for="celularconductor" class="form-label">Celular</label>
                    <input type="text" class="form-control" name="celularconductor" id="celularconductor">          
                </div>
            </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary finalizar">Finalizar</button>
        </div>
    </form>
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