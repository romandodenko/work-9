<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Bienvenido a nuestro mejor hotel en España con todas las comodidades.">
  <meta property="og:site_name"
    content="Nuestro hotel está ubicado en un hermoso lugar, rodeado de paisajes y vistas impresionantes del océano o las montañas. Aquí puede disfrutar del cálido sol y el clima cálido.">
  <meta property="og:url" content="clubruleta.com">
  <meta property="og:image" content="clubruleta.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Bienvenido a nuestro mejor hotel en España con todas las comodidades.">
  <meta name="twitter:description"
    content="Nuestro hotel está ubicado en un hermoso lugar, rodeado de paisajes y vistas impresionantes del océano o las montañas. Aquí puede disfrutar del cálido sol y el clima cálido.">
  <meta name="twitter:site" content="clubruleta.com">
  <meta name="twitter:image" content="clubruleta.com/main.png">
  <meta name="description"
    content="Nuestro hotel está ubicado en un hermoso lugar, rodeado de paisajes y vistas impresionantes del océano o las montañas. Aquí puede disfrutar del cálido sol y el clima cálido.">
  <title>Bienvenido a nuestro mejor hotel en España con todas las comodidades.</title>
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
      <!-- start popup -->
      <div class="popup popup-active" id="popup">
        <div class="popup__close"></div>
        <div class="popup__body">
          <p class="popup__text">Nuestros juegos están destinados a un público ADULTO mayor de 18 años. Haz clic en Aceptado para confirmar tu edad..</p>
          <button class="popup__button">Aceptado</button>
        </div>
      </div>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="container">
          <div class="hero__head">
            <h1 class="hero__title tt-1">
              Hoteles en España
            </h1>
            <p class="hero__text tx-2">
              Este nuevo hotel en España es uno de los mejores de su categoría y ofrece a sus huéspedes una estancia
              inolvidable.
            </p>
          </div>
          <div class="hero__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/hero.webp" type="image/webp">
              <img src="./img/hero.jpg" loading="lazy" width="1312" height="514" alt="Image">
            </picture>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start habitaciones -->
      <section class="habitaciones">
        <div class="container">
          <h2 class="habitaciones__title tt-2">
            Habitaciones
          </h2>
          <div class="habitaciones__content">
            <div class="habitaciones__left">
              <ul class="habitaciones__list">
                <li class="habitaciones__item">
                  <div class="habitaciones__image">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/habitaciones-1.webp" type="image/webp">
                      <img src="./img/habitaciones-1.jpg" loading="lazy" width="416" height="296" alt="Image">
                    </picture>
                  </div>
                  <div class="habitaciones__name tt-3">
                    SUITES ÚNICAS
                  </div>
                </li>
                <li class="habitaciones__item">
                  <div class="habitaciones__image">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/habitaciones-2.webp" type="image/webp">
                      <img src="./img/habitaciones-2.jpg" loading="lazy" width="416" height="296" alt="Image">
                    </picture>
                  </div>
                  <div class="habitaciones__name tt-3">
                    SUITES GRANDES
                  </div>
                </li>
              </ul>
            </div>
            <div class="habitaciones__right">
              <p class="habitaciones__text tx-1">
                Nuestras nuevas habitaciones de hotel en España se encuentran entre las mejores de la región y ofrecen
                excelentes servicios para una estancia confortable. Combinando un diseño moderno y un ambiente acogedor,
                crean el ambiente perfecto para el descanso y la relajación.
              </p>
              <a class="habitaciones__link but-1" href="habitaciones.php">
                Ver todo
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- end habitaciones -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <div class="about__head">
            <h2 class="about__title tt-2">
              Sobre nosotros
            </h2>
          </div>
          <div class="about__content">
            <div class="about__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/about.webp" type="image/webp">
                <img src="./img/about.jpg" loading="lazy" width="752" height="462" alt="Image">
              </picture>
            </div>
            <div class="about__right">
              <div class="about__texts">
                <p class="about__text tx-1">
                  Aquí encontrarás lujosas habitaciones, servicio de primera y entretenimiento de primera que harán que
                  tu estadía sea inolvidable.
                </p>
                <p class="about__text tx-1">
                  Los servicios calientes del hotel incluyen restaurantes excepcionales donde podrá disfrutar de una
                  cocina gourmet y de impresionantes vistas al mar. Los bares ofrecen una amplia selección de cócteles,
                  vinos y otras bebidas para diversificar sus vacaciones y agregar algo de emoción a la noche.
                </p>
                <p class="about__text tx-1">
                  El hotel también ofrece una variedad de actividades para mantenerlo en movimiento y disparar su
                  adrenalina. Puede nadar en la piscina climatizada o probar suerte en el gimnasio. Si prefiere
                  actividades al aire libre, puede ir en bicicleta o jugar una partida de golf en el campo cercano.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end about -->

      <!-- start gallery -->
      <section class="gallery">
        <div class="gallery__container container">
          <div class="gallery__head">
            <h2 class="gallery__title tt-2">
              Galería
            </h2>
            <a class="gallery__link but-1" href="gallery.php">
              Todas las fotos
            </a>
          </div>
          <div class="gallery-slider gallery-slider-init swiper">
            <div class="swiper-wrapper">
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
          <div class="gallery__controls">
            <button class="gallery__button gallery-slider-prev">
              <img src="./img/arrow.svg" loading="lazy" width="56" height="56" alt="Arrow">
            </button>
            <div class="gallery__pagination gallery-slider-pagination tx-1"></div>
            <button class="gallery__button gallery-slider-next">
              <img src="./img/arrow.svg" loading="lazy" width="56" height="56" alt="Arrow">
            </button>
          </div>
        </div>
      </section>
      <!-- end gallery -->

      <!-- start contacts -->
      <section class="contacts">
        <div class="container">
          <div class="contacts__head">
            <h2 class="contacts__title tt-2">
              Contactos
            </h2>
          </div>
          <div class="contacts__content">
            <div class="contacts__images">
              <div class="contacts__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/contacts-1.webp" type="image/webp">
                  <img src="./img/contacts-1.jpg" loading="lazy" width="416" height="389" alt="Image">
                </picture>
              </div>
              <div class="contacts__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/contacts-1.webp" type="image/webp">
                  <img src="./img/contacts-1.jpg" loading="lazy" width="416" height="389" alt="Image">
                </picture>
              </div>
            </div>
            <div class="contacts__right">
              <p class="contacts__text tx-2">
                Rellena el formulario y reserva una habitación en nuestro hotel
              </p>
              <form class="form" action="#!" name="form" autocomplete="off">
                <div class="form__inputs">
                  <input class="form__input tx-1" type="text" name="text" id="text" placeholder="Su nombre..." required>
                  <input class="form__input tx-1" type="email" name="email" id="email"
                    placeholder="Tu correo electrónico..." required>
                </div>
                <button class="form__button but-1" type="submit">
                  Enviar
                </button>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- end contacts -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>