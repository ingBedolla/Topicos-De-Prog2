<?php
session_start();
$tareas = [
    "Hacer tarea de programación",
    "Estudiar para examen",
    "Leer documentación",
    "Practicar código"
];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mis Tareas</title>
    <link rel="stylesheet" href="estilos.css?v=1.1">
</head>
<body>

<header>
    <nav>
        <a href="index.php">Inicio</a>
        <a href="tareas.php">Mis Tareas</a>
    </nav>
    <h2>Tus tareas</h2>
</header>

<main>
    <?php foreach($tareas as $tarea): ?>
        <div class="card">
            <strong>Tarea:</strong> <?php echo $tarea; ?>
        </div>
    <?php endforeach; ?>
    
    <a href="index.php" class="btn btn-secundario">Volver al Inicio</a>
</main>

</body>
</html>