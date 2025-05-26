<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egresados - Escuela Técnica</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/egresados.css">
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


        <!-- Carrousel de imagenes -->
<div class="carrousel">
<div class="carrousel-track">
    <img src="img1.jpg" alt="Imagen 1" />
    <img src="img2.jpg" alt="Imagen 2" />
    <img src="img3.jpg" alt="Imagen 3" />
    <img src="img4.jpg" alt="Imagen 4" />
    <img src="img5.jpg" alt="Imagen 5" />
    <img src="img6.jpg" alt="Imagen 6" />
    <img src="img7.jpg" alt="Imagen 7" />
    <img src="img8.jpg" alt="Imagen 8" />
    <img src="img9.jpg" alt="Imagen 9" />
    <img src="img10.jpg" alt="Imagen 10" />
    <img src="img11.jpg" alt="Imagen 11" />
    <img src="img12.jpg" alt="Imagen 12" />
    <img src="img13.jpg" alt="Imagen 13" />
    <img src="img14.jpg" alt="Imagen 14" />
    <img src="img15.jpg" alt="Imagen 15" />
    <img src="img16.jpg" alt="Imagen 16" />
    <img src="img17.jpg" alt="Imagen 17" />
    <img src="img18.jpg" alt="Imagen 18" />
    <img src="img19.jpg" alt="Imagen 19" />
    <img src="img20.jpg" alt="Imagen 20" />
    <img src="img21.jpg" alt="Imagen 21" />
    <img src="img22.jpg" alt="Imagen 22" />
    <img src="img23.jpg" alt="Imagen 23" />
    <img src="img24.jpg" alt="Imagen 24" />
    <img src="img25.jpg" alt="Imagen 25" />
    <img src="img26.jpg" alt="Imagen 26" />
    <img src="img27.jpg" alt="Imagen 27" />
    <img src="img28.jpg" alt="Imagen 28" />
    <img src="img29.jpg" alt="Imagen 29" />
    <img src="img30.jpg" alt="Imagen 30" />
    <img src="img31.jpg" alt="Imagen 31" />
    <img src="img32.jpg" alt="Imagen 32" />
    <img src="img33.jpg" alt="Imagen 33" />
    <img src="img34.jpg" alt="Imagen 34" />
    <img src="img35.jpg" alt="Imagen 35" />
    <img src="img36.jpg" alt="Imagen 36" />
    <img src="img37.jpg" alt="Imagen 37" />
    <img src="img38.jpg" alt="Imagen 38" />
    <img src="img39.jpg" alt="Imagen 39" />
    <img src="img40.jpg" alt="Imagen 40" />
    <img src="img41.jpg" alt="Imagen 41" />
    <img src="img42.jpg" alt="Imagen 42" />
    <img src="img43.jpg" alt="Imagen 43" />
    <img src="img44.jpg" alt="Imagen 44" />
    <img src="img45.jpg" alt="Imagen 45" />
    <img src="img46.jpg" alt="Imagen 46" />
    <img src="img47.jpg" alt="Imagen 47" />
    <img src="img48.jpg" alt="Imagen 48" />
    <img src="img49.jpg" alt="Imagen 49" />
    <img src="img50.jpg" alt="Imagen 50" />
    <img src="img51.jpg" alt="Imagen 51" />
    <img src="img52.jpg" alt="Imagen 52" />
    <img src="img53.jpg" alt="Imagen 53" />
    <img src="img54.jpg" alt="Imagen 54" />
    <img src="img55.jpg" alt="Imagen 55" />
</div>
<button class="prev">‹</button>
<button class="next">›</button>
</div>

<script>
const track = document.querySelector('.carousel-track');
const images = document.querySelectorAll('.carousel img');
let currentIndex = 0;

document.querySelector('.next').addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % images.length;
    updateCarousel();
});

document.querySelector('.prev').addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    updateCarousel();
});

function updateCarousel() {
    const offset = -currentIndex * 100;
    track.style.transform = `translateX(${offset}%)`;
}
</script>

</body>
</html>