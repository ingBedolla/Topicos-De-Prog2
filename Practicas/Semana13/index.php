<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Bienvenido :3</title>
  <link rel="stylesheet"  type="text/css" href="estilos.css" />
</head>
<body>
  <section id="Formulario">
    <p id="titulo"><h1>Inicie Sesion</h1></p>

    <!-- inicia formulario -->
    <form action="procesar.php" method="POST">
      <p><input type="text" name="nombre" id="nombre" placeholder="Nombre completo" required /></p>
      <p><input type="email" name="correo" id="correo" placeholder="Correo electrónico" required /></p>
      <p><input type="number" name="edad" id="edad" placeholder="Introduzca su edad" required /></p>
      <p><input type="password" name="password1" id="password1" placeholder="Introduzca su contraseña" required /></p>
      <p><input type="password" name="password2" id="password2" placeholder="Confirme su contraseña" required /></p>
      
      <p><input type="submit" value="Registrar" /></p>
      <p><input type="reset" value="Limpiar" /></p>
    </form>
  </section>
</body>
</html>