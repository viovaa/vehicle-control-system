<?php
    session_start();

    include("../../config/verificar.php");
    include("../../config/connection.php");
    $con = connect();
    $sql = "select * from funcionario;";
    $query = mysqli_query($con, $sql);

?>
<!doctype html>
    <html lang="en">
    <head>
    <title>Lista de usuarios</title>
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
        <div>
          <div class="table-responsive-sm">
            <div class="card text-center">
              <div class="card-body">
                <h4 class="card-title">Lista de usuarios registrados</h4>
              </div>
            </div>
            <table class="table table-light
            table-striped
            caption-top
            table-bordered
            align-botton">
              <thead class="table-dark">
                  <caption>Usuarios</caption>         
                  <th>Fecha de ingreso</th>
                  <th>Rut</th>
                  <th>nombre</th>
                  <th>apellido</th>
                  <th>email</th>
                  <th>telefono</th>
                  <th>contraseña</th>
                  <th>asignación</th>
                  <th>eliminar</th>
                  <th>modificar</th>
                </thead>
                <tbody>
                    <?php
                      while ($funcionario = mysqli_fetch_assoc($query)) {
                        $fechaingreso = $funcionario["Edad"];
                        $rut = $funcionario["Rut"];
                        $nombre = $funcionario["Nombre"];
                        $apellido = $funcionario["Apellido"];
                        $email = $funcionario["Email"];
                        $telefono = $funcionario["Telefono"];
                        $password = $funcionario["password"];
                        $asignacion = $funcionario["Asignacion_ID"];
                        $eliminar = "<a href='eliminarUsuario.php?correo=$email'><img src='../../public/img/eliminar.png' alt='' width='30px' height='30px'></a>";
                        $modificar = "<img src='../img/ajustes.png' alt='' width='30px' height='30px' onClick='modificar(" . '"' . $fechaingreso . '", ' . '"' . $rut . '",' . '"' . $nombre . '"' . ")'>";
                        echo "<tr>";
                        echo "<td> $fechaingreso </td>";
                        echo "<td> $rut</td>";
                        echo "<td> $nombre </td>";
                        echo "<td> $apellido </td>";
                        echo "<td> $email </td>";
                        echo "<td> $telefono </td>";
                        echo "<td> $password </td>";
                        echo "<td> $asignacion </td>";
                        echo "<td> $eliminar  </td>";
                        echo "<td> $modificar  </td>";
                        echo "</tr>";
                      }
                    ?>
                </tbody>
                <tfoot>
                  
                </tfoot>
            </table>
          </div>  
        </div>
        <div class="text-center mt-4">
          <a href="administrador-registrarusuario.php" class="btn btn-primary">Registrar Usuario</a>
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



                    