<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclo Básico - Escuela Técnica</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/ciclobasico.css">
    <link rel="icon" href="imagenes/escudo.png" type="image/png">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="container">
            <div class="header-content">
                <div class="logo">
                    <a href="index.php">
                        <img src="imagenes/escudo.png" alt="Escudo de la Escuela Técnica">
                        <h1>Escuela Técnica N°1</h1>
                    </a>
                </div>
                <div class="search-container">
                    <input type="text" placeholder="Buscar..." class="search-input">
                    <button class="search-button"><i class="fas fa-search"></i></button>
                </div>
                <div class="mobile-menu">
                    <button class="menu-button" id="mobile-menu-btn"><i class="fas fa-bars"></i></button>
                </div>
            </div>
        </div>
    </header>
    <!-- Desktop Navigation -->
    <?php include 'header.php'; ?>
</body>
</html>