<?php
session_start();
require_once 'config/database.php'; // Archivo de conexión a la BD

// Procesar el formulario de login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $remember = isset($_POST['remember']) ? true : false;
    
    // Validación básica
    if (empty($username) || empty($password)) {
        $_SESSION['error'] = "Por favor, complete todos los campos";
        header("Location: ../index.php");
        exit();
    }
    
    try {
        // Conexión a la base de datos
        $conn = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASS);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Buscar usuario
        $stmt = $conn->prepare("SELECT id, username, password, nombre_completo, rol FROM usuarios WHERE username = ? AND activo = TRUE");
        $stmt->execute([$username]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);
        
        // Verificar contraseña
        if ($user && password_verify($password, $user['password'])) {
            // Iniciar sesión
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['nombre'] = $user['nombre_completo'];
            $_SESSION['rol'] = $user['rol'];
            $_SESSION['logged_in'] = true;
            
            // Actualizar último acceso
            $updateStmt = $conn->prepare("UPDATE usuarios SET ultimo_acceso = NOW() WHERE id = ?");
            $updateStmt->execute([$user['id']]);
            
            // Registrar acceso exitoso
            $ip = $_SERVER['REMOTE_ADDR'];
            $logStmt = $conn->prepare("INSERT INTO registros_acceso (usuario_id, ip, exito) VALUES (?, ?, TRUE)");
            $logStmt->execute([$user['id'], $ip]);
            
            // Manejar "recordarme"
            if ($remember) {
                $token = bin2hex(random_bytes(32));
                $expiry = date('Y-m-d H:i:s', strtotime('+30 days'));
                
                $rememberStmt = $conn->prepare("INSERT INTO sesiones_recordadas (usuario_id, token, fecha_expiracion) VALUES (?, ?, ?)");
                $rememberStmt->execute([$user['id'], $token, $expiry]);
                
                // Establecer cookie segura
                setcookie('remember_token', $token, strtotime('+30 days'), '/', '', true, true);
            }
            
            // Redirigir al dashboard
            header("Location: dashboard/index.php");
            exit();
        } else {
            // Si las credenciales son incorrectas
            if ($user) {
                // Registrar intento fallido
                $ip = $_SERVER['REMOTE_ADDR'];
                $logStmt = $conn->prepare("INSERT INTO registros_acceso (usuario_id, ip, exito) VALUES (?, ?, FALSE)");
                $logStmt->execute([$user['id'], $ip]);
            }
            
            $_SESSION['error'] = "Nombre de usuario o contraseña incorrectos";
            header("Location: ../index.php");
            exit();
        }
    } catch (PDOException $e) {
        $_SESSION['error'] = "Error de conexión: " . $e->getMessage();
        header("Location: ../index.php");
        exit();
    }
} else {
    // Si alguien intenta acceder directamente a este archivo
    header("Location: ../index.php");
    exit();
}
?>