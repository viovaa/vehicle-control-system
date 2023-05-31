<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tramites | Seleccionar Tramites</title>
    <link rel="shortcut icon" href="../../public/img/favicon-scv.png" type="image/x-icon">
    
    
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
      
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-dark">
        <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">Seleccionar Tramite</span>
    </div>
</header>
    <h1 class="display-3">Seleccione un tramite de algún usuario</h1>
    <div>
        <p>
            <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-success btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample1" aria-expanded="false" aria-controls="collapseExample1">
              Tramite de <b><i>Juan René Pérez Izopa</i></b>
            </button>
        </div>
          </p>
          <div class="collapse" id="collapseExample1">
            <div class="card" style="width: 18rem;">
                <img src="src\Suzuki_Vstrom.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Suzuki Vstrom 650</h5>
                  <p class="card-text">Este vehiculo carga con <b>Productos alimenticios y
                    agrícolas</b></p>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-primary btn-sm">Descargar Documento de Vehiculo</a>
                        <button class="btn btn-primary btn-sm" type="button" onclick="redirectToSeleccionarVehiculoDeCarga()">Solicitud de Carga</button>
                    </div>
                </div>
              </div>
          </div>
    </div>

    <div>
        <p>
            <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-success btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample2" aria-expanded="false" aria-controls="collapseExample2">
              Tramite de <b><i>Isabelle Alca Olivares Ortiz</i></b>
            </button>
        </div>
          </p>
          <div class="collapse" id="collapseExample2">
            <div class="card" style="width: 18rem;">
                <img src="src\Suzuki_Dzire.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Suzuki Dzire</h5>
                  <p class="card-text"><b>Este vehiculo carga con Productos químicos y
                    peligrosos</b></p>
                    <div class="d-grid gap-2">
                        <a href="#" class="btn btn-primary btn-sm">Descargar Documento de Vehiculo</a>
                        <button class="btn btn-primary btn-sm" type="button" onclick="redirectToSeleccionarVehiculoDeCarga()">Solicitud de Carga</button>
                    </div>
                </div>
              </div>
          </div>
    </div>
    
    <div>
        <p>
            <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-success btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample3" aria-expanded="false" aria-controls="collapseExample3">
              Tramite de <b><i>Pablo Neruda Antonio Suazo</i></b>
            </button>
        </div>
          </p>
          <div class="collapse" id="collapseExample3">
            <div class="card" style="width: 18rem;">
                <img src="src\Kia_Stinger.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Kia Stinger</h5>
                  <p class="card-text">Este vehiculo carga con <b>Productos electrónicos</b></p>
                  <div class="d-grid gap-2">
                    <a href="#" class="btn btn-primary btn-sm">Descargar Documento de Vehiculo</a>
                    <button class="btn btn-primary btn-sm" type="button" onclick="redirectToSeleccionarVehiculoDeCarga()">Solicitud de Carga</button>
                  </div>
                </div>
              </div>
          </div>
    </div>
    
    <div>
        <!-- data-bs-target y la id define cuales colapsan y cuales no, debido a eso hay que mantenerlos iguales si no quieres que se abran todos-->
        <p>
            <div class="d-grid gap-2 d-md-block">
            <button class="btn btn-success btn-lg" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample4" aria-expanded="false" aria-controls="collapseExample">
              Tramite de <b><i>Cristian de la flor</i></b>
            </button>
        </div>
          </p>
          <div class="collapse" id="collapseExample4">
            <div class="card mb-3" style="width: 18rem;">
                <img src="src\Kia_Sorento.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                  <h5 class="card-title">Kia Sorento</h5>
                  <p class="card-text"><b>Este vehiculo carga con Carga mixta</b></p>
                  <div class="d-grid gap-2">
                    <a href="#" class="btn btn-primary btn-sm">Descargar Documento de Vehiculo</a>
                    <button class="btn btn-primary btn-sm" type="button" onclick="redirectToSeleccionarVehiculoDeCarga()">Solicitud de Carga</button>
                  </div>
                </div>
              </div>
          </div>
    </div>  

    <div>
        <a name="button" id="boton" class="btn btn-dark d-grid gap-2 col-6 mx-auto btn-lg" onclick="redirectToMenu()" role="button">Volver al Menu Principal</a>
    </div>


    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
    </script>
      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
        integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
    </script>
    
</body>



<script>
    function redirectToSeleccionarVehiculoDeCarga() {
        window.location.href = "agenteaduanal-seleccionarvehiculodecarga.php";
    }

    function redirectToMenu() {
        window.location.href = "agenteaduanal-home-listartramitesvehiculodecarga.php";
    }


</script>
</html>