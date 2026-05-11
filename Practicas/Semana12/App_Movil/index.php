<?php
session_start();
if (!isset($_SESSION['usuario'])) {
    $_SESSION['usuario'] = "Pepe";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Tareas - Inicio</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<header>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="tareas.php">Mis Tareas</a>
    </nav>
    <h2>Hola, <?php echo $_SESSION['usuario']; ?></h2>
</header>

<main>
    <div class="card">
        <p>Bienvenido a tu administrador de tareas rápido.</p>
        <p>Optimizado para tu dispositivo móvil.</p>
    </div>
    <a href="tareas.php" class="btn">Ver lista de tareas</a>
</main>

</body>
</html>