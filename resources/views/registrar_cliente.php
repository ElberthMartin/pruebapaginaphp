<?php
// Configuración de la base de datos
$servername = "localhost"; // Reemplaza con la dirección de tu servidor MySQL
$username = "root";   // Reemplaza con tu nombre de usuario de MySQL
$password = " "; // Reemplaza con tu contraseña de MySQL
$dbname = "tienda_los_v";

// Conectar a la base de datos
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Error de conexión: " . $conn->connect_error);
}

// Recibir datos del formulario
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$edad = $_POST['edad'];
$producto = $_POST['producto'];
$precio = $_POST['precio'];
$dni = $_POST['dni'];
$telefono = $_POST['telefono'];

// Insertar los datos del cliente en la base de datos
$sql = "INSERT INTO clientes (nombre, apellido, edad, producto, precio, dni, telefono)
        VALUES ('$nombre', '$apellido', $edad, '$producto', $precio, '$dni', '$telefono')";

if ($conn->query($sql) === TRUE) {
    echo "Cliente registrado exitosamente.";
} else {
    echo "Error al registrar el cliente: " . $conn->error;
}

// Cerrar la conexión a la base de datos
$conn->close();
?>
