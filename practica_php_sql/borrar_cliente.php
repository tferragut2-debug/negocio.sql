<?php
include "conexion.php"; // Conexión a la base de datos

// Obtener el ID del cliente desde la URL
$id = $_GET['id'];

// Actualizar el campo borrado a 1 (borrado lógico)
$sql = "UPDATE clientes SET borrado=1 WHERE id_cliente=$id";
$conn->query($sql);

// Volver a la lista de clientes
header("Location: clientes.php");
?>
