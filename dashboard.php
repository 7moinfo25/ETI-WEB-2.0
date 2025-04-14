<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    // If login form was submitted, verify credentials
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';
        
        // In a real application, you would verify against a database
        // This is a simplified example
        if ($username === 'admin' && $password === 'password') {
            // Set session variables
            $_SESSION['user_id'] = 1;
            $_SESSION['username'] = $username;
            $_SESSION['user_role'] = 'teacher';
        } else {
            // Redirect back to login page with error
            header('Location: ../index.html?login_error=1');
            exit;
        }
    } else {
        // Not logged in and no form submitted, redirect to login page
        header('Location: ../index.html');
        exit;
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Docentes - Escuela Técnica</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="css/admin.css">
    <link rel="icon" type="image/png" href="../imagenes/escudo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body class="admin-body">
    <!-- Admin Header -->
    <header class="admin-header">
        <div class="container">
            <div class="admin-header-content">
                <div class="admin-logo">
                    <img src="../imagenes/escudo.png" alt="Escuela Técnica">
                    <h1>Panel de Docentes</h1>
                </div>
                <div class="admin-user">
                    <span>Bienvenido, <?php echo htmlspecialchars($_SESSION['username']); ?></span>
                    <a href="logout.php" class="logout-btn"><i class="fas fa-sign-out-alt"></i> Cerrar sesión</a>
                </div>
            </div>
        </div>
    </header>

    <!-- Admin Sidebar and Main Content -->
    <div class="admin-container">
        <aside class="admin-sidebar">
            <nav class="admin-nav">
                <ul>
                    <li class="active">
                        <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="upload.php"><i class="fas fa-upload"></i> Subir Archivos</a>
                    </li>
                    <li>
                        <a href="files.php"><i class="fas fa-file-alt"></i> Mis Archivos</a>
                    </li>
                    <li>
                        <a href="profile.php"><i class="fas fa-user"></i> Mi Perfil</a>
                    </li>
                    <li>
                        <a href="settings.php"><i class="fas fa-cog"></i> Configuración</a>
                    </li>
                </ul>
            </nav>
        </aside>

        <main class="admin-main">
            <div class="admin-content">
                <div class="page-header">
                    <h2>Dashboard</h2>
                    <p>Bienvenido al panel de administración para docentes</p>
                </div>

                <!-- Dashboard Stats -->
                <div class="stats-container">
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-file-pdf"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Archivos PDF</h3>
                            <p class="stat-number">12</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-file-word"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Documentos</h3>
                            <p class="stat-number">8</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-image"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Imágenes</h3>
                            <p class="stat-number">24</p>
                        </div>
                    </div>
                    <div class="stat-card">
                        <div class="stat-icon">
                            <i class="fas fa-download"></i>
                        </div>
                        <div class="stat-info">
                            <h3>Descargas</h3>
                            <p class="stat-number">156</p>
                        </div>
                    </div>
                </div>

                <!-- Recent Uploads -->
                <div class="recent-uploads">
                    <div class="section-header">
                        <h3>Archivos Recientes</h3>
                        <a href="upload.php" class="btn btn-primary"><i class="fas fa-plus"></i> Subir Nuevo</a>
                    </div>
                    <div class="table-responsive">
                        <table class="admin-table">
                            <thead>
                                <tr>
                                    <th>Nombre del Archivo</th>
                                    <th>Tipo</th>
                                    <th>Tamaño</th>
                                    <th>Fecha</th>
                                    <th>Acciones</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Programa_Matemáticas_2023.pdf</td>
                                    <td>PDF</td>
                                    <td>1.2 MB</td>
                                    <td>10/04/2023</td>
                                    <td class="actions">
                                        <a href="#" class="action-btn view-btn"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="action-btn edit-btn"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="action-btn delete-btn"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Guía_Práctica_Física.docx</td>
                                    <td>DOCX</td>
                                    <td>845 KB</td>
                                    <td>05/04/2023</td>
                                    <td class="actions">
                                        <a href="#" class="action-btn view-btn"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="action-btn edit-btn"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="action-btn delete-btn"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Presentación_Historia.pptx</td>
                                    <td>PPTX</td>
                                    <td>3.5 MB</td>
                                    <td>01/04/2023</td>
                                    <td class="actions">
                                        <a href="#" class="action-btn view-btn"><i class="fas fa-eye"></i></a>
                                        <a href="#" class="action-btn edit-btn"><i class="fas fa-edit"></i></a>
                                        <a href="#" class="action-btn delete-btn"><i class="fas fa-trash"></i></a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <script src="js/admin.js"></script>
</body>
</html>