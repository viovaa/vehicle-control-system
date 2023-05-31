<!doctype html>
<html lang="en">

<head>
  <title>Tramites | Solicitud de Carga</title>
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
        <span class="navbar-brand mb-0 h1">Solicitud de Carga</span>
    </div>
  </header>
  <div class="d-grid gap-2">
    <button type="button" name="button" id="button" class="btn btn-success" onclick="redirectToAprobado()">Aprobar Solicitud</button>
  </div>
  <div class="d-grid gap-2">
    <button type="button" name="button" id="button" class="btn btn-danger" onclick="redirectToRechazado()">Reprobar Solicitud</button>
  </div>
  <main>

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


<script>
  function redirectToAprobado() {
    window.location.href = "agenteaduanal-aprobado.php";
  }
  function redirectToRechazado() {
    window.location.href = "agenteaduanal-rechazado.php";
  }
</script>

</html>