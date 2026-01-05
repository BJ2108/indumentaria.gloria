<?php
$conexion = new mysqli("localhost", "root", "", "indumentaria_gloria");

if ($conexion->connect_error) {
    die("Error de conexión: " . $conexion->connect_error);
}
?>
