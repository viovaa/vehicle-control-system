<?php
/*
    session_start();
    $patente = $_POST['patente'];
    $marca = $_POST['marca'];
    $modelo = $_POST['modelo'];
    $agnovehiculo = $_POST['agnovehiculo'];
    $tipoCarga = $_POST['pesocarga'];
    $valorCarga = $_POST['valorcarga'];
    $nombresConductor = $_POST['nombresconductor'];
    $apellidosConductor = $_POST['apellidosconductor'];
    $rutConductor = $_POST['rutconductor'];
    $emailConductor = $_POST['emailconductor'];
    $celularConductor = $_POST['celularconductor'];
    $tipovehiculo = $_POST['tipovehiculo'];
    $fecha = date("Y-m-d");
    $boton = '<button class="btn btn-primary" type="button"><a href="./oficialaduanal-seleccionarvehiculodecarga.php">detalle</a> </button>';
*/
?>
<!doctype html>
<html lang="en">

<head>
  <title>Listartramitesvehiculodecarga</title>
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
  <link rel="stylesheet" href="../../public/css/style.css">
  <link rel="shortcut icon" href="../../public/img/favicon-scv.png" type="image/x-icon">
  
</head>
<body> 
    <nav>
        <ul class="nav nav-pills nav-justified">
            <li>
                <h3>Agente aduanal - "usuario</h3>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="./oficialaduana-cuenta.php">cuenta</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="../../public/src/cerrarsesion.php">teminar sesión</a>
            </li>

        </ul>
    </nav> 
    <table class="table">
        <thead>
            <tr>
            <th scope="col">fecha</th>
            <th scope="col">tipo de vehículo</th>
            <th scope="col">patente</th>
            <th scope="col">identificación conductor</th>
            <th scope="col">conductor</th>
            <th scope="col">tipo de carga</th>
            <th scope="col">detalle vehículo</th>
            <th scope="col">estado</th>
            </tr>
        </thead>
        <tbody>
        <?php
        /*
          echo "<tr>";
              echo "<td scope='row'>" . $fecha . "</td>";
              echo "<td scope='row'>" . $tipovehiculo . "</td>";
              echo "<td scope='row'>" . $patente . "</td>";
              echo "<td scope='row'>" . $rutConductor . "</td>";
              echo "<td scope='row'>" . $nombresConductor . ' ' . $apellidosConductor .  "</td>";
              echo "<td scope='row'>" . $tipoCarga . "</td>";
              echo "<td scope='row'>" . $boton .  "</td>";
              echo "<td scope='row'> nada </td>";
          echo "</tr>";*/
        ?>




            <tr>
            <td>16-04-2023</td>
            <td>camion</td>
            <td>ABC-123</td>
            <td>21543443K</td>
            <td>Juan René Pérez Izopa</td>
            <td>Productos alimenticios y agrícolas</td>
            <td><button class="btn btn-primary" type="button"><a href="./oficialaduanal-seleccionarvehiculodecarga.php">detalle</a> </button></td>
            <td>estado</td>
            </tr>       
        </tbody>
    </table>
    <button class="btn btn-primary" type="button"><a href="./oficialaduanal-registrarvehiculodecarga.php">Registrar vehículo</a> </button>
  
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