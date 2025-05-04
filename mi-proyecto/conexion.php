<?php
$conexion = new mysqli("localhost", "root", "", "mi_base");
if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
