<?php
$servidor = "localhost";
$usuario = "root";
$contrasena = "tecnica1"; // En Laragon, no hay contraseña por defecto
$basededatos = "logeo_hospital"; // Cambialo por el nombre real

$conn = new mysqli($servidor, $usuario, $contrasena, $basededatos); //$conn = new PDO($servidor, $usuario, $contrasena, $basededatos);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>


