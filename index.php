<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Gestión de Artículos</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>

<div class="contenedor">

    <h1>Gestión de Artículos</h1>

    <form action="guardar.php" method="POST">

        <input type="text" name="nombre" placeholder="Nombre" required>

        <input type="text" name="marca" placeholder="Marca" required>

        <input type="number" name="cantidad" placeholder="Cantidad" required>

        <input type="text" name="bodega" placeholder="Bodega" required>

        <button type="submit">Guardar</button>

    </form>

    <hr>

    <?php include("listar.php"); ?>

</div>

</body>
</html>