<?php
session_start();
if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}
?>
<h1>¡Bienvenido, <?php echo $_SESSION['usuario_email']; ?>!</h1>
<a href="logout.php">Cerrar sesión</a>
