<!DOCTYPE html>
<html>
<head>
  <title>Formulario de Contacto</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">

</head>
<body>
  <h2>Formulario de Contacto</h2>
  <form id="contact-form" method="post" action="">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="correo">Correo electrónico:</label>
    <input type="email" id="correo" name="correo" required>

    <label for="telefono">Teléfono:</label>
    <input type="text" id="telefono" name="telefono">

    <label for="mensaje">Mensaje:</label>
    <textarea id="mensaje" name="mensaje" rows="4" required></textarea>

    <div>
      <input type="submit" value="Enviar">
      <input type="button" value="Reiniciar" onclick="resetForm()">
    </div>
  </form>

  <script>
    function resetForm() {
      document.getElementById("contact-form").reset();
    }

    document.getElementById("contact-form").addEventListener("submit", function(event) {
      event.preventDefault(); 
      var nombre = document.getElementById("nombre").value;
      var correo = document.getElementById("correo").value;
      var telefono = document.getElementById("telefono").value;
      var mensaje = document.getElementById("mensaje").value;

      alert("Mensaje recibido, " + nombre + " nos comunicaremos con usted pronto");

      resetForm();
    });
  </script>
</body>
</html>
