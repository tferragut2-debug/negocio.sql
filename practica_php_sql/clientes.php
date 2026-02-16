<?php
include "conexion.php"; // Conexión a la base de datos

// Consulta para traer clientes no borrados
$sql = "SELECT * FROM clientes WHERE borrado = 0";
$result = $conn->query($sql);
?>

<h1>Lista de Clientes</h1>
<table border="1">
<tr>
<th>ID</th>
<th>Nombre</th>
<th>Email</th>
<th>Teléfono</th>
<th>Acciones</th>
</tr>

<?php
if($result->num_rows > 0){
    while($row = $result->fetch_assoc()){
        echo "<tr>";
        echo "<td>".$row['id_cliente']."</td>";
        echo "<td>".$row['nombre']."</td>";
        echo "<td>".$row['email']."</td>";
        echo "<td>".$row['telefono']."</td>";
        echo "<td>
                <a href='editar_cliente.php?id=".$row['id_cliente']."'>Editar</a> | 
                <a href='borrar_cliente.php?id=".$row['id_cliente']."'>Borrar</a>
              </td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='5'>No hay clientes</td></tr>";
}
?>
</table>

<br>
<a href="agregar_cliente.php">Agregar nuevo cliente</a>
