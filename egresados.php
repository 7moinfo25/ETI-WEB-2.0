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
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <style>
        
.swiper.mySwiper {
  position: relative;
  z-index: 0;
  overflow: hidden;
}

.swiper.mySwiper::before,
.swiper.mySwiper::after {
  content: "";
  position: absolute;
  top: 0;
  bottom: 0;
  width: 10%;
  z-index: 2;
  pointer-events: none;
}

.swiper.mySwiper::before {
  left: 0;
  background: linear-gradient(to right, white, transparent);
}

.swiper.mySwiper::after {
  right: 0;
  background: linear-gradient(to left, white, transparent);
}




  .swiper {
    width: 100%;
    max-width: 900px;
    padding-top: 50px;
    padding-bottom: 50px;
    margin: auto;
    margin-top: 3px;
    margin-bottom: 3px;
  }

  .swiper-slide {
    background: #fff;
    border-radius: 10px;
    text-align: center;
    transition: transform 0.3s;
    width: 80%;
    height: 60%;
    :
  }

  .swiper-slide img {
    display: block;
    width: 100%;
    border-radius: 10px;
  }

  .caption {
    margin-top: 8px;
    font-weight: bold;
  }
.search-container-sw {

  display: flex;
  justify-content: center;
  align-items: center;
  gap: 10px;
  margin-bottom: 30px;
  margin-top: -20px;
}

.search-input-sw {
    color: #0ea5e9;  
  padding: 8px 12px;
  border: 1px solid #075985;
  border-radius: 5px;
  font-size: 16px;
  width: 250px;
}

.search-input-sw::placeholder {
  color:rgba(14, 164, 233, 0.47); 
}


.search-button-sw {
  padding: 8px 12px;
  background-color: #075985;
  color: white;
  border: 2px solid #075985;
  border-radius: 5px;
  cursor: pointer;
  transition: background-color 0.3s;
}

.search-button:hover {
  background-color: #0ea5e9;
}


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
                    <input type="text" placeholder="Buscar..." class="search-input">
                    <button class="search-button"><i class="fas fa-search"></i></button>
                </div>
                <div class="mobile-menu">
                    <button class="menu-button" id="mobile-menu-btn"><i class="fas fa-bars"></i></button>
                </div>
            </div>
        </div>
    </header>
    </header>
    <?php include 'header.php'; ?>

    <div class="swiper mySwiper ">
         <div class="search-container-sw">
            <input type="text" placeholder="Buscar por año o por nombre..." class="search-input-sw" id="searchInput-sw">
            <button class="search-button-sw" onclick="searchImage()"><i class="fas fa-search"></i></button>
        </div>
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <img src="imagenes/egresados/1971.jpg" alt="1971">
                <div class="caption">1971<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/1972.jpg" alt="1972">
                <div class="caption">1972<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/1973.jpg" alt="1973">
                <div class="caption">1973<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/1974.jpg" alt="1974">
                <div class="caption">1974<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/1975.jpg" alt="1975">
                <div class="caption">1975<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/1976.jpg" alt="1976">
                <div class="caption">1976<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/1977.jpg" alt="1977">
                <div class="caption">1977<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/1979.jpg" alt="1979">
                <div class="caption">1979<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/1983.jpg" alt="1983">
                <div class="caption">1983<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/1985.jpg" alt="1985">
                <div class="caption">1985<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/1986.jpg" alt="1986">
                <div class="caption">1986<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/1987.jpg" alt="1987">
                <div class="caption">1987<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/1989.jpg" alt="1989">
                <div class="caption">1989<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/1995.jpg" alt="1995">
                <div class="caption">1995<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/1997.jpg" alt="1997">
                <div class="caption">1997<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/1999.jpg" alt="1999">
                <div class="caption">1999<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/2001.jpg" alt="2001">
                <div class="caption">2001<br><br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/2001a.jpg" alt="2001">
                <div class="caption">2001<br><br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/2002.jpg" alt="2002">
                <div class="caption">2002<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/2003.jpg" alt="2003">
                <div class="caption">2003<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/2004.jpg" alt="2004">
                <div class="caption">2004<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/2005.jpg" alt="2005">
                <div class="caption">2005<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/2006.jpg" alt="2006">
                <div class="caption">2006<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/2007.jpg" alt="2007">
                <div class="caption">2007<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/2008.jpg" alt="2008">
                <div class="caption">2008<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/2009.jpg" alt="2009">
                <div class="caption">2009<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/2011.jpg" alt="2011">
                <div class="caption">2011<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/2012.jpg" alt="2012">
                <div class="caption">2012<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/2014.jpg" alt="2014">
                <div class="caption">2014<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/2015.jpg" alt="2015">
                <div class="caption">2015<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/2017.jpg" alt="2017">
                <div class="caption">2017<br></div>
            </div>
            <div class="swiper-slide">
                <img src="imagenes/egresados/2021.jpg" alt="2021">
                <div class="caption">2021<br></div>
            </div>
        </div>
        <!-- Botones de navegación -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>

    <!-- Footer -->
    <?php include 'footer.php'; ?>

<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<script>
  const swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: "auto",
    loop: true,
    coverflowEffect: {
      rotate: 50,
      stretch: 0,
      depth: 200,
      modifier: 1,
      slideShadows: true,
    },
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
  });

  document.getElementById('searchInput-sw').addEventListener('keypress', (e) => {
    if (e.key === 'Enter') {
      searchImage();
    }
  });

  function searchImage() {
  const query = document.getElementById('searchInput-sw').value.toLowerCase().trim();
  const slides = swiper.slides;
  for (let i = 0; i < slides.length; i++) {
    const img = slides[i].querySelector('img');
    const caption = slides[i].querySelector('.caption')?.textContent.toLowerCase() || '';
    const imgName = img?.getAttribute('src').toLowerCase() || '';
    if (imgName.includes(query) || caption.includes(query)) {
      swiper.slideTo(i);
      return;
    }
  }
  alert('No se encontró ninguna coincidencia.');
}

</script>


</body>
</body>
</html>
