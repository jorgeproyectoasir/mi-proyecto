<?php
include 'conexion.php';

$sql = "SELECT * FROM usuarios";
$resultado = $conexion->query($sql);

if ($resultado->num_rows > 0) {
    while ($fila = $resultado->fetch_assoc()) {
        echo "Nombre: " . $fila["nombre"] . " | Email: " . $fila["email"] . "<br>";
    }
} else {
    echo "No hay usuarios registrados.";
}

$conexion->close();
?>
