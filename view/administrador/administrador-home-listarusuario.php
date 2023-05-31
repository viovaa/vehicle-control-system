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
                  <th>Rol</th>
                  <th>Sanciones</th>
                  <th>Nombres</th>
                  <th>Apellidos</th>
                  <th>Número de contacto</th>
                  <th>Correo</th>
                  <th>Acciones</th>
                  <th>Acciones</th>
                </thead>
                <tbody>
                    <tr>
                        <td>12-05-2020</td>
                        <td>204359645</td>
                        <td>Oficial de aduana</td>
                        <td>0</td>
                        <td>Martina Gonzáles</td>
                        <td>Valdés Várgas</td>
                        <td>930245002</td>
                        <td>mgonzalesvaldes@gmail.com</td>
                        <td>
                          <a href="adiministrador-modificarusuario.php" class="btn btn-primary">Modificar</a>
                        </td>
                        <td>
                          <a href="administrador-eliminarusuario.php" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>05-06-2020</td>
                        <td>24563496k</td>
                        <td>Policia de tráfico</td>
                        <td>1</td>
                        <td>Felipe Muñoz</td>
                        <td>Silva Soto</td>
                        <td>940343512</td>
                        <td>felipe.munozs@hotmail.com</td>
                        <td>
                          <a href="adiministrador-modificarusuario.php" class="btn btn-primary">Modificar</a>
                        </td>
                        <td>
                          <a href="administrador-eliminarusuario.php" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <tr>
                        <td>12-01-2022</td>
                        <td>205032542</td>
                        <td>Agente aduanal</td>
                        <td>0</td>
                        <td>Camila López</td>
                        <td>Torres Castro</td>
                        <td>9432540531</td>
                        <td>camilalopeztorres@yahoo.com</td>
                        <td>
                          <a href="adiministrador-modificarusuario.php" class="btn btn-primary">Modificar</a>
                        </td>
                        <td>
                          <a href="administrador-eliminarusuario.php" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
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