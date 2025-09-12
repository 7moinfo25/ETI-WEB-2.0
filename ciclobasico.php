<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciclo Básico - Escuela Técnica</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/informatica.css">
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
    <main>
        <div class="container">
            <!-- Introduction Section -->
            <section class="intro-section">
                <div class="section-header">
                    <h2>Ciclo Básico</h2>
                </div>
                <div class="intro-content">
                    <p>El ciclo básico de la Escuela de Educación Secundaria Técnica N°1 Gral. Manuel Belgrano abarca de primer a tercer año y marca el inicio de la formación técnica. En esta etapa los estudiantes se adaptan a la vida escolar con jornadas de hasta 8 horas diarias, aprendiendo a organizarse, trabajar en equipo e integrarse a la comunidad educativa.</p>
                    <p>Los talleres son un pilar fundamental, ya que permiten explorar áreas como carpintería, hojalatería, electricidad, dibujo técnico y lenguaje informático. De esta manera, los alumnos adquieren una base sólida de conocimientos y experiencias que los preparan para elegir con seguridad su especialidad en el ciclo superior.</p>
                </div>
            </section>

            <!-- Subjects Section -->
            <section class="subjects-section">
                <div class="section-header">
                    <h2>Materias Específicas</h2>
                </div>
                
                <div class="subjects-grid">
                    <!-- Subject 1 -->
                    <div class="subject-card">
                        <div class="subject-image">
                            <img src="imagenes\informatica\seguridad-informatica.png" alt="Seguridad Informática">
                        </div>
                        <div class="subject-content">
                            <h3>Seguridad Informática</h3>
                            <p>Nos centramos en proteger sistemas, redes y datos contra ataques y accesos no autorizados. Esto incluye medidas como usar contraseñas seguras, actualizar software regularmente, usar antivirus, firewall y educar a los usuarios sobre prácticas seguras en línea.</p>
                        </div>
                    </div>

                    <!-- Subject 2 -->
                    <div class="subject-card">
                        <div class="subject-image">
                            <img src="imagenes\informatica\imagen-Sistemas.Digitales.jpg" alt="Sistemas Digitales">
                        </div>
                        <div class="subject-content">
                            <h3>Sistemas Digitales</h3>
                            <p>Materia fundamental en la electrónica y la informática, permitiendo la creación de dispositivos como computadoras, teléfonos inteligentes y sistemas embebidos. Se basan en principios como la lógica digital, que maneja circuitos que realizan operaciones lógicas y aritméticas.</p>
                        </div>
                    </div>

                    <!-- Subject 3 -->
                    <div class="subject-card">
                        <div class="subject-image">
                            <img src="imagenes\informatica\imagen-sistemas operativos.jpg" alt="Laboratorio de Sistemas Operativos">
                        </div>
                        <div class="subject-content">
                            <h3>Laboratorio de Sistemas Operativos</h3>
                            <p>Es un entorno donde se estudian y realizan pruebas prácticas relacionadas con el desarrollo, la implementación y el mantenimiento de sistemas operativos. Los estudiantes aprenden sobre la gestión de recursos del sistema, la administración de memoria, la planificación de procesos y la interacción con dispositivos de hardware.</p>
                        </div>
                    </div>

                    <!-- Subject 4 -->
                    <div class="subject-card">
                        <div class="subject-image">
                            <img src="imagenes\informatica\imagen-hardware.webp" alt="Laboratorio de Hardware">
                        </div>
                        <div class="subject-content">
                            <h3>Laboratorio de Hardware</h3>
                            <p>Entendimiento y composición de los componentes físicos de un sistema informático o electrónico. Esto incluye desde los circuitos integrados y placas de circuito en dispositivos electrónicos hasta periféricos como teclados y monitores en computadoras.</p>
                        </div>
                    </div>

                    <!-- Subject 5 -->
                    <div class="subject-card">
                        <div class="subject-image">
                            <img src="imagenes\informatica\imagen-Programación.jpg" alt="Laboratorio de Programación">
                        </div>
                        <div class="subject-content">
                            <h3>Laboratorio de Programación</h3>
                            <p>Es un espacio dedicado al aprendizaje y la práctica de la programación informática. En este entorno, los estudiantes pueden experimentar con diferentes lenguajes de programación, resolver problemas algorítmicos, desarrollar aplicaciones y mejorar sus habilidades en la escritura de código eficiente y mantenible.</p>
                        </div>
                    </div>

                    <!-- Subject 6 -->
                    <div class="subject-card">
                        <div class="subject-image">
                            <img src="imagenes\informatica\teleinformatica.jpg" alt="Teleinformática">
                        </div>
                        <div class="subject-content">
                            <h3>Teleinformática</h3>
                            <p>Es el campo que estudia la transmisión de información a distancia, utilizando tecnologías de telecomunicaciones y redes de datos. Involucra la transferencia eficiente y segura de datos, voz y video entre diferentes puntos geográficos utilizando infraestructuras como redes de telecomunicaciones, Internet y tecnologías inalámbricas.</p>
                        </div>
                    </div>
    </main>
    <!-- Desktop Navigation -->
    <?php include 'footer.php'; ?>
</body>
</html>