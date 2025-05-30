<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Egresados - Escuela Técnica</title>
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/egresados.css">
    <link rel="icon" href="imagenes/egresados/escudo.png" type="image/png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .carrousel {
            position: relative;
            overflow: hidden;
            width: 100%;
            max-width: 800px;
            margin: auto;
        }
        .carrousel-track {
            display: flex;
            transition: transform 0.5s ease-in-out;
        }
        .carrousel-item {
            min-width: 100%;
            text-align: center;
        }
        .carrousel-item img {
            width: 100%;
            height: auto;
        }
        .caption {
            margin-top: 8px;
            font-weight: bold;
        }
        .prev,
        .next {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: rgba(0,0,0,0.5);
            color: #fff;
            border: none;
            font-size: 2rem;
            cursor: pointer;
            z-index: 1;
            padding: 0 10px;
        }
        .prev { left: 10px; }
        .next { right: 10px; }
    </style>
</head>
<body>
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
                    <input type="text" placeholder="Buscar..." class="search-input" id="searchInput">
                    <button class="search-button" onclick="searchImage()"><i class="fas fa-search"></i></button>
                </div>
                <div class="mobile-menu">
                    <button class="menu-button" id="mobile-menu-btn"><i class="fas fa-bars"></i></button>
                </div>
            </div>
        </div>
    </header>
    </header>
    <?php include 'header.php'; ?>

    <div class="carrousel">
        <div class="carrousel-track">
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (1).jpg" alt="Imagen 1">
                <div class="caption">1971</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (2).jpg" alt="Imagen 2">
                <div class="caption">1972</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (3).jpg" alt="Imagen 3">
                <div class="caption">1973</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (4).jpg" alt="Imagen 4">
                <div class="caption">1974</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (5).jpg" alt="Imagen 5">
                <div class="caption">1975</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (6).jpg" alt="Imagen 6">
                <div class="caption">1976</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (7).jpg" alt="Imagen 7">
                <div class="caption">1977</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (8).jpg" alt="Imagen 8">
                <div class="caption">1979</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (9).jpg" alt="Imagen 9">
                <div class="caption">1983</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (10).jpg" alt="Imagen 10">
                <div class="caption">1985</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (11).jpg" alt="Imagen 11">
                <div class="caption">1986</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (12).jpg" alt="Imagen 12">
                <div class="caption">1987</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (13).jpg" alt="Imagen 13">
                <div class="caption">1989</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (14).jpg" alt="Imagen 14">
                <div class="caption">1995</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (15).jpg" alt="Imagen 15">
                <div class="caption">1997</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (16).jpg" alt="Imagen 16">
                <div class="caption">1999</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (17).jpg" alt="Imagen 17">
                <div class="caption">2001</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (18).jpg" alt="Imagen 18">
                <div class="caption">2001</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (19).jpg" alt="Imagen 19">
                <div class="caption">2002</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (20).jpg" alt="Imagen 20">
                <div class="caption">2003</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (21).jpg" alt="Imagen 21">
                <div class="caption">2004</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (22).jpg" alt="Imagen 22">
                <div class="caption">2005</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (23).jpg" alt="Imagen 23">
                <div class="caption">2006</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (24).jpg" alt="Imagen 24">
                <div class="caption">2007</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (25).jpg" alt="Imagen 25">
                <div class="caption">2008</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (26).jpg" alt="Imagen 26">
                <div class="caption">2009 o 2010?</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (27).jpg" alt="Imagen 27">
                <div class="caption">2011</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (28).jpg" alt="Imagen 28">
                <div class="caption">2012</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (29).jpg" alt="Imagen 29">
                <div class="caption">2014</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (30).jpg" alt="Imagen 30">
                <div class="caption">2015</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (31).jpg" alt="Imagen 31">
                <div class="caption">2017</div>
            </div>
            <div class="carrousel-item">
                <img src="imagenes/egresados/img (32).jpg" alt="Imagen 32">
                <div class="caption">2021</div>
            </div>
        </div>
        <button class="prev">‹</button>
        <button class="next">›</button>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

    <script>
        const track = document.querySelector('.carrousel-track');
        const items = document.querySelectorAll('.carrousel-item');
        let currentIndex = 0;

        document.querySelector('.next').addEventListener('click', () => {
            currentIndex = (currentIndex + 1) % items.length;
            updateCarousel();
        });

        document.querySelector('.prev').addEventListener('click', () => {
            currentIndex = (currentIndex - 1 + items.length) % items.length;
            updateCarousel();
        });

        document.getElementById('searchInput').addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                searchImage();
            }
        });

        function updateCarousel() {
            const offset = -currentIndex * 100;
            track.style.transform = `translateX(${offset}%)`;
        }

        function searchImage() {
            const query = document.getElementById('searchInput').value.toLowerCase().trim();
            for (let i = 0; i < items.length; i++) {
                const img = items[i].querySelector('img');
                const caption = items[i].querySelector('.caption').textContent.toLowerCase();
                const imgName = img.getAttribute('src').toLowerCase();

                if (imgName.includes(query) || caption.includes(query)) {
                    currentIndex = i;
                    updateCarousel();
                    return;
                }
            }
            alert('No se encontró ninguna coincidencia.');
        }
    </script>
</body>
</body>
</html>
