<?php
// Start session
session_start();

// Check if user is logged in
if (!isset($_SESSION['user_id'])) {
    header('Location: ../index.html');
    exit;
}

// Handle file upload
$uploadMessage = '';
$uploadSuccess = false;

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['file'])) {
    $targetDir = "uploads/";
    
    // Create directory if it doesn't exist
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }
    
    $fileName = basename($_FILES["file"]["name"]);
    $targetFilePath = $targetDir . $fileName;
    $fileType = pathinfo($targetFilePath, PATHINFO_EXTENSION);
    
    // Allow certain file formats
    $allowTypes = array('pdf', 'doc', 'docx', 'ppt', 'pptx', 'jpg', 'jpeg', 'png', 'gif');
    
    if (in_array($fileType, $allowTypes)) {
        // Upload file to server
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)) {
            $uploadMessage = "El archivo " . $fileName . " ha sido subido correctamente.";
            $uploadSuccess = true;
            
            // Here you would typically save file information to database
            // For example: file name, path, upload date, user who uploaded, etc.
        } else {
            $uploadMessage = "Lo sentimos, hubo un error al subir su archivo.";
        }
    } else {
        $uploadMessage = "Lo sentimos, solo se permiten archivos PDF, DOC, DOCX, PPT, PPTX, JPG, JPEG, PNG y GIF.";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subir Archivos - Panel de Docentes</title>
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
                    <li>
                        <a href="dashboard.php"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                    </li>
                    <li class="active">
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
                    <h2>Subir Archivos</h2>
                    <p>Suba documentos, presentaciones e imágenes para sus estudiantes</p>
                </div>

                <?php if (!empty($uploadMessage)): ?>
                <div class="alert <?php echo $uploadSuccess ? 'alert-success' : 'alert-error'; ?>">
                    <?php echo $uploadMessage; ?>
                </div>
                <?php endif; ?>

                <!-- Upload Form -->
                <div class="upload-container">
                    <form action="upload.php" method="post" enctype="multipart/form-data" class="upload-form">
                        <div class="upload-area" id="drop-area">
                            <input type="file" name="file" id="fileInput" class="file-input" required>
                            <label for="fileInput" class="file-label">
                                <div class="upload-icon">
                                    <i class="fas fa-cloud-upload-alt"></i>
                                </div>
                                <div class="upload-text">
                                    <span class="primary-text">Arrastre y suelte archivos aquí</span>
                                    <span class="secondary-text">o haga clic para seleccionar archivos</span>
                                </div>
                            </label>
                            <div id="file-info" class="file-info"></div>
                        </div>

                        <div class="form-group">
                            <label for="title">Título del archivo:</label>
                            <input type="text" id="title" name="title" required>
                        </div>

                        <div class="form-group">
                            <label for="description">Descripción:</label>
                            <textarea id="description" name="description" rows="3"></textarea>
                        </div>

                        <div class="form-group">
                            <label for="category">Categoría:</label>
                            <select id="category" name="category">
                                <option value="">Seleccione una categoría</option>
                                <option value="matematicas">Matemáticas</option>
                                <option value="fisica">Física</option>
                                <option value="quimica">Química</option>
                                <option value="informatica">Informática</option>
                                <option value="electromecanica">Electromecánica</option>
                                <option value="lengua">Lengua y Literatura</option>
                                <option value="historia">Historia</option>
                                <option value="geografia">Geografía</option>
                                <option value="otros">Otros</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="visibility">Visibilidad:</label>
                            <select id="visibility" name="visibility">
                                <option value="public">Público (todos los estudiantes)</option>
                                <option value="private">Privado (solo con enlace)</option>
                                <option value="specific">Curso específico</option>
                            </select>
                        </div>

                        <div class="form-group" id="course-select" style="display: none;">
                            <label for="course">Curso:</label>
                            <select id="course" name="course">
                                <option value="">Seleccione un curso</option>
                                <option value="1a">1° Año A</option>
                                <option value="1b">1° Año B</option>
                                <option value="2a">2° Año A</option>
                                <option value="2b">2° Año B</option>
                                <option value="3a">3° Año A</option>
                                <option value="3b">3° Año B</option>
                                <option value="4a">4° Año A</option>
                                <option value="4b">4° Año B</option>
                                <option value="5a">5° Año A</option>
                                <option value="5b">5° Año B</option>
                                <option value="6a">6° Año A</option>
                                <option value="6b">6° Año B</option>
                                <option value="7a">7° Año A</option>
                                <option value="7b">7° Año B</option>
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary upload-btn">
                            <i class="fas fa-upload"></i> Subir Archivo
                        </button>
                    </form>
                </div>
            </div>
        </main>
    </div>

    <script>
        // Show/hide course select based on visibility option
        document.getElementById('visibility').addEventListener('change', function() {
            const courseSelect = document.getElementById('course-select');
            if (this.value === 'specific') {
                courseSelect.style.display = 'block';
            } else {
                courseSelect.style.display = 'none';
            }
        });

        // File upload preview
        const dropArea = document.getElementById('drop-area');
        const fileInput = document.getElementById('fileInput');
        const fileInfo = document.getElementById('file-info');

        // Prevent default drag behaviors
        ['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, preventDefaults, false);
        });

        function preventDefaults(e) {
            e.preventDefault();
            e.stopPropagation();
        }

        // Highlight drop area when item is dragged over it
        ['dragenter', 'dragover'].forEach(eventName => {
            dropArea.addEventListener(eventName, highlight, false);
        });

        ['dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, unhighlight, false);
        });

        function highlight() {
            dropArea.classList.add('highlight');
        }

        function unhighlight() {
            dropArea.classList.remove('highlight');
        }

        // Handle dropped files
        dropArea.addEventListener('drop', handleDrop, false);

        function handleDrop(e) {
            const dt = e.dataTransfer;
            const files = dt.files;
            fileInput.files = files;
            updateFileInfo();
        }

        // Handle selected files
        fileInput.addEventListener('change', updateFileInfo);

        function updateFileInfo() {
            if (fileInput.files.length > 0) {
                const file = fileInput.files[0];
                const fileSize = (file.size / 1024).toFixed(2) + ' KB';
                const fileName = file.name;
                
                fileInfo.innerHTML = `
                    <div class="selected-file">
                        <i class="fas fa-file"></i>
                        <div class="file-details">
                            <span class="file-name">${fileName}</span>
                            <span class="file-size">${fileSize}</span>
                        </div>
                        <button type="button" class="remove-file" onclick="removeFile()">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                `;
                dropArea.classList.add('has-file');
            } else {
                fileInfo.innerHTML = '';
                dropArea.classList.remove('has-file');
            }
        }

        function removeFile() {
            fileInput.value = '';
            fileInfo.innerHTML = '';
            dropArea.classList.remove('has-file');
        }
    </script>
</body>
</html>