<?php
$conexion = new mysqli("localhost", "jorge", "Jorge1234!", "plataforma_it");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>

