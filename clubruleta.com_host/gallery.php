<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Bienvenido a nuestro mejor hotel en España con todas las comodidades. Galería">
  <meta property="og:site_name"
    content="Nuestro hotel está ubicado en un hermoso lugar, rodeado de paisajes y vistas impresionantes del océano o las montañas. Aquí puede disfrutar del cálido sol y el clima cálido.">
  <meta property="og:url" content="clubruleta.com">
  <meta property="og:image" content="clubruleta.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Bienvenido a nuestro mejor hotel en España con todas las comodidades. Galería">
  <meta name="twitter:description"
    content="Nuestro hotel está ubicado en un hermoso lugar, rodeado de paisajes y vistas impresionantes del océano o las montañas. Aquí puede disfrutar del cálido sol y el clima cálido.">
  <meta name="twitter:site" content="clubruleta.com">
  <meta name="twitter:image" content="clubruleta.com/main.png">
  <meta name="description"
    content="Nuestro hotel está ubicado en un hermoso lugar, rodeado de paisajes y vistas impresionantes del océano o las montañas. Aquí puede disfrutar del cálido sol y el clima cálido.">
  <title>Bienvenido a nuestro mejor hotel en España con todas las comodidades. Galería</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Merriweather-Black.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Poppins-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./resources/swiper/swiper.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <script src="./resources/swiper/swiper.js"></script>
  <script defer src="./js/main.js"></script>
</head>

<body>
  <div class="page">
    <!-- start header -->
    <?php
    include 'header.php';
    ?>
    <!-- end header -->
    <main>
      <!-- start gallery -->
      <section class="gallery gallery_2">
        <div class="gallery__container container">
          <div class="gallery__head">
            <h1 class="gallery__title tt-2">
              Galería
            </h1> 
          </div>
          <div class="gallery-slider gallery-slider_2 swiper">
            <div class="gallery-slider__wrapper swiper-wrapper">
              <div class="gallery-slider__slide swiper-slide">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-1.webp" type="image/webp">
                  <img src="./img/gallery-1.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
              <div class="gallery-slider__slide swiper-slide">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-2.webp" type="image/webp">
                  <img src="./img/gallery-2.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
              <div class="gallery-slider__slide swiper-slide">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-3.webp" type="image/webp">
                  <img src="./img/gallery-3.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
              <div class="gallery-slider__slide swiper-slide">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-4.webp" type="image/webp">
                  <img src="./img/gallery-4.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
              <div class="gallery-slider__slide swiper-slide">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-5.webp" type="image/webp">
                  <img src="./img/gallery-5.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
              <div class="gallery-slider__slide swiper-slide">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-6.webp" type="image/webp">
                  <img src="./img/gallery-6.jpg" loading="lazy" width="300" height="300" alt="Image">
                </picture>
              </div>
            </div>
          </div> 
        </div>
      </section>
      <!-- end gallery -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>