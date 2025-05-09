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

<button aria-label="Toggle menu" class="menu-btn" id="navToggle" aria-expanded="false" aria-controls="mobileNavMenu">
<i class ="fas fa-bars" id="burger"></i>
</button>

<div id="mobileNavMenu" aria-hidden="true" class="mobile-nav-menu">
  <a href="#" tabindex="-1">Home</a>
  <a href="#" tabindex="-1">Profile</a>
  <a href="#" tabindex="-1">Messages</a>
  <a href="#" tabindex="-1">Settings</a>
  <a href="#" tabindex="-1">Logout</a>
</div>

<div id="overlay" tabindex="-1" class="overlay"></div>

<style>
  /* Hide mobile nav by default */
  .menu-btn,
  .mobile-nav-menu,
  .overlay {
    display: none;
  }

  /* Show only on mobile */
  @media (max-width: 768px) {
    .menu-btn {
      display: flex;
      background: none;
      border: none;
      cursor: pointer;
      padding: 6px;
      align-items: center;
      justify-content: center;
      transition: transform 0.3s ease;
      position: absolute;
      top: 20px;
      right: 20px;
      z-index: 1002;
      flex-direction: column;
      height: 36px;
      width: 36px;
      user-select: none;
      background-color:rgb(9,44,87);
      border-radius: 4px;
      box-shadow: 0 0 8px rgba(0,0,0,0.6);
    }
    .menu-btn:focus {
      outline: 2px solid #4fc3f7;
      outline-offset: 2px;
    }
    #burger{
        color: white;
        font-size: 20px;
    }
    .menu-btn .bar {
      display: block;
      width: 24px;
      height: 3px;
      margin: 4px 0;
      background-color: white;
      border-radius: 2px;
      transition: all 0.3s ease;
    }

    .menu-btn.open .bar:nth-child(1) {
      transform: rotate(45deg) translate(5px, 5px);
    }
    .menu-btn.open .bar:nth-child(2) {
      opacity: 0;
    }
    .menu-btn.open .bar:nth-child(3) {
      transform: rotate(-45deg) translate(6px, -6px);
    }

    .mobile-nav-menu {
      display: flex;
      position: fixed;
      top: 0;
      right: 0;
      width: 250px;
      height: 100vh;
      background: #272727;
      box-shadow: 2px 0 12px rgba(0,0,0,0.8);
      flex-direction: column;
      padding-top: 70px;
      transform: translateX(+100%);
      transition: transform 0.3s ease;
      z-index: 1001;
    }
    .mobile-nav-menu.open {
      transform: translateX(0);
    }

    .mobile-nav-menu a {
      color: #eee;
      text-decoration: none;
      padding: 16px 24px;
      font-size: 1.1rem;
      border-left: 4px solid transparent;
      transition: background 0.2s, border-color 0.2s;
      user-select:none;
    }
    .mobile-nav-menu a:hover,
    .mobile-nav-menu a:focus {
      background-color: #4fc3f7;
      color: #121212;
      border-left-color: #0288d1;
      outline: none;
    }

    .overlay {
      display: block;
      position: fixed;
      top: 0;
      left: 0;
      width: 100vw;
      height: 100vh;
      background: rgba(0,0,0,0.6);
      opacity: 0;
      pointer-events: none;
      transition: opacity 0.3s ease;
      z-index: 1000;
    }
    .overlay.visible {
      opacity: 1;
      pointer-events: auto;
    }
  }
</style>

<script>
  const navToggle = document.getElementById('navToggle');
  const mobileNavMenu = document.getElementById('mobileNavMenu');
  const overlay = document.getElementById('overlay');
  const navLinks = mobileNavMenu.querySelectorAll('a');

  function openMenu() {
  navToggle.classList.add('open');
  navToggle.setAttribute('aria-expanded', 'true');
  mobileNavMenu.classList.add('open');
  mobileNavMenu.setAttribute('aria-hidden', 'false');
  overlay.classList.add('visible');
  navLinks.forEach(link => link.tabIndex = 0);
  // Block background scroll
  document.body.style.overflow = 'hidden';
}

function closeMenu() {
  navToggle.classList.remove('open');
  navToggle.setAttribute('aria-expanded', 'false');
  mobileNavMenu.classList.remove('open');
  mobileNavMenu.setAttribute('aria-hidden', 'true');
  overlay.classList.remove('visible');
  navLinks.forEach(link => link.tabIndex = -1);
  navToggle.focus();
  // Restore scroll
  document.body.style.overflow = '';
}


  navToggle.addEventListener('click', () => {
    if (mobileNavMenu.classList.contains('open')) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  overlay.addEventListener('click', closeMenu);

  document.addEventListener('keydown', e => {
    if (e.key === 'Escape' && mobileNavMenu.classList.contains('open')) {
      closeMenu();
    }
  });

  navLinks.forEach(link => link.tabIndex = -1);
</script>


