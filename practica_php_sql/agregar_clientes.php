<?php
include "conexion.php"; // conexión a la base de datos

// Si se envía el formulario
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    $sql = "INSERT INTO clientes (nombre,email,telefono) VALUES ('$nombre','$email','$telefono')";
    $conn->query($sql);

    // Redirige a la lista de clientes
    header("Location: clientes.php");
}
?>

<h1>Agregar Cliente</h1>
<form method="POST">
Nombre: <input type="text" name="nombre" required><br><br>
Email: <input type="email" name="email" required><br><br>
Teléfono: <input type="text" name="telefono" required><br><br>
<input type="submit" value="Guardar">
</form>

<br>
<a href="clientes.php">Volver a lista de clientes</a>
