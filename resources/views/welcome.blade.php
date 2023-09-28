<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Registro de Cliente</title>
</head>
<body>
    <h2>Registrar Cliente</h2>
    <form action="registrar_cliente.php" method="POST">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" required><br>

        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" required><br>

        <label for="edad">Edad:</label>
        <input type="number" name="edad" required><br>

        <label for="producto">Producto:</label>
        <input type="text" name="producto" required><br>

        <label for="precio">Precio:</label>
        <input type="number" name="precio" step="0.01" required><br>

        <label for="dni">DNI:</label>
        <input type="text" name="dni" required><br>

        <label for="telefono">Teléfono:</label>
        <input type="text" name="telefono" required><br>

        <input type="submit" value="Registrar Cliente">
    </form>
</body>
</html>

