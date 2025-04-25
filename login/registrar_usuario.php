<?php
include("conexion.php");

$email = $_POST['email'];
$password = $_POST['password'];
$hash = password_hash($password, PASSWORD_DEFAULT); // encriptar contraseña

$stmt = $conn->prepare("INSERT INTO usuarios (email, password) VALUES (?, ?)");
$stmt->bind_param("ss", $email, $hash);

if ($stmt->execute()) {
    header("Location: login.php?msg=registrado");
} else {
    echo "Error: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
