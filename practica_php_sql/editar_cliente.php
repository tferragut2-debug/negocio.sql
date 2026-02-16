<?php
include "conexion.php"; // Conexión a la base de datos

// Obtener el ID del cliente desde la URL
$id = $_GET['id'];

// Si se envía el formulario
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $telefono = $_POST['telefono'];

    // Actualizar datos del cliente
    $sql = "UPDATE clientes SET nombre='$nombre', email='$email', telefono='$telefono' WHERE id_cliente=$id";
    $conn->query($sql);

    header("Location: clientes.php");
}

// Traer datos actuales del cliente
$sql = "SELECT * FROM clientes WHERE id_cliente=$id";
$result = $conn->query($sql);
$cliente = $result->fetch_assoc();
?>

<h1>Editar Cliente</h1>
<form method="POST">
Nombre: <input type="text" name="nombre" value="<?php echo $cliente['nombre']; ?>" required><br><br>
Email: <input type="email" name="email" value="<?php echo $cliente['email']; ?>" required><br><br>
Teléfono: <input type="text" name="telefono" value="<?php echo $cliente['telefono']; ?>" required><br><br>
<input type="submit" value="Guardar Cambios">
</form>

<br>
<a href="clientes.php">Volver a lista de clientes</a>
