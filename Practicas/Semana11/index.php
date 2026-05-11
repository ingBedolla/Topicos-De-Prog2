<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Registro de Empleados</title>
  <link rel="stylesheet" type="text/css" href="estilos.css" />
</head>
<body>
  <header id="Encabezadoapp">
    <h1>Nueva Entrada</h1>
    <p><?php echo "Hoy es: " . date("d/m/Y"); ?></p>
  </header>

  <main id="interfazgrafica">
    <section id="Formulario">
      <h2 id="titulo">Datos del Empleado</h2>

      <form action="procesar.php" method="POST">
        <input type="text" name="nombre" placeholder="Nombre completo" required />
        <input type="email" name="correo" placeholder="Correo electrónico" required />
        <input type="number" name="edad" placeholder="Edad" required />
        
        <p id="etiqueta-fecha">Fecha de ingreso:</p>
        <input type="date" name="fecha_ingreso" required />
        
        <input type="text" name="puesto" placeholder="Indique su puesto" required />
        
        <div id="contenedor-botones">
         
          <input type="submit" value="Registrar" onclick="alert('accion realizada')" id="btn-registrar" />
          <input type="reset" value="Limpiar" onclick="alert('accion realizada')" id="btn-limpiar" />
        </div>
      </form>
    </section>
  </main>
</body>
</html>