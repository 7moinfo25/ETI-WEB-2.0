<?php
// Obtiene el nombre del archivo actual
$current_page = basename($_SERVER['PHP_SELF']);
?>

<nav class="main-nav">
    <div class="container">
        <ul class="nav-list">
            <li class="nav-item dropdown">
                <a href="#" class="nav-link">Institucional <i class="fas fa-chevron-down"></i></a>
                <ul class="dropdown-menu">
                    <li><a href="autoridades.php">Autoridades</a></li>
                    <li><a href="informacion-administrativa.php">Información Administrativa</a></li>
                    <li><a href="acuerdo-convivencia.php">Acuerdo de convivencia</a></li>
                    <li><a href="profesores.php">Profesores</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="ciclo_basico.php" class="nav-link <?php echo ($current_page == 'ciclo_basico.php') ? 'active' : ''; ?>">Ciclo Básico</a>
            </li>
            <li class="nav-item">
                <a href="informatica.php" class="nav-link <?php echo ($current_page == 'informatica.php') ? 'active' : ''; ?>">Informática</a>
            </li>
            <li class="nav-item">
                <a href="electromecanica.php" class="nav-link <?php echo ($current_page == 'electromecanica.php') ? 'active' : ''; ?>">Electromecánica</a>
            </li>
            <li class="nav-item">
                <a href="noticias.php" class="nav-link <?php echo ($current_page == 'noticias.php') ? 'active' : ''; ?>">Noticias</a>
            </li>
        </ul>
    </div>
</nav>