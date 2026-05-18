<?php

$nombre    = $_POST['nombre'];
$correo    = $_POST['correo'];
$edad      = $_POST['edad'];
$password1 = $_POST['password1'];
$password2 = $_POST['password2'];


if ($password1 !== $password2 ) {
    header("Location: index.php");
    exit;
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Logeado!!!, Verifique sus datos </title>
  <link rel="stylesheet" type="text/css" href="estilos.css" />
</head>
<body>
     <section id="Formulario">
    <h2 class="titulo">El formulario fue procesado correctamente</h2>
    <h3 class="subtitulo">Reporte de actividad:</h3>
    
    <p><strong>Nombre:</strong> <?= htmlspecialchars($nombre) ?></p>
    <p><strong>Correo:</strong> <?= htmlspecialchars($correo) ?></p>
    <p><strong>Edad:</strong> <?= htmlspecialchars($edad) ?></p>
    
    <p><a href="index.php"><button>Regresar al Login</button></a></p>
     </section>
    <br>
</body>
</html>
