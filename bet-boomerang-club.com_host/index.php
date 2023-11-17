<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="El Hotel AWA en Chile es un lugar de lujo que hereda una alta calificación.">
  <meta property="og:site_name"
    content="El hotel AWA ofrece servicios modernos y es famoso por su alto nivel de servicio. Todo el personal es confiable y amigable, listo para ayudarlo con cualquier pregunta o solicitud.">
  <meta name="twitter:title" content="El Hotel AWA en Chile es un lugar de lujo que hereda una alta calificación.">
  <meta name="twitter:description"
    content="El hotel AWA ofrece servicios modernos y es famoso por su alto nivel de servicio. Todo el personal es confiable y amigable, listo para ayudarlo con cualquier pregunta o solicitud.">
  <meta name="description"
    content="El hotel AWA ofrece servicios modernos y es famoso por su alto nivel de servicio. Todo el personal es confiable y amigable, listo para ayudarlo con cualquier pregunta o solicitud.">
  <title>El Hotel AWA en Chile es un lugar de lujo que hereda una alta calificación.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Marcellus-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/MarcellusSC-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
      <section class="popup popup-active" id="popup">
        <div class="popup__close"></div>
        <div class="popup__body">
          <p class="popup__text">Nuestros juegos están destinados a un público ADULTO mayor de 18 años. Haz clic en
            Aceptado para confirmar tu edad..</p>
          <button class="popup__button">Aceptado</button>
        </div>
      </section>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero-slider swiper">
          <div class="swiper-wrapper">
            <div class="hero-slider__slide swiper-slide">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/hero-1.webp" type="image/webp">
                <img src="./img/hero-1.jpg" width="300" height="300" alt="Bienvenidos al Hotel AWA">
              </picture>
            </div>
            <div class="hero-slider__slide swiper-slide">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/hero-2.webp" type="image/webp">
                <img src="./img/hero-2.jpg" width="300" height="300" alt="Bienvenidos al Hotel AWA">
              </picture>
            </div>
            <div class="hero-slider__slide swiper-slide">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/hero-3.webp" type="image/webp">
                <img src="./img/hero-3.jpg" width="300" height="300" alt="Bienvenidos al Hotel AWA">
              </picture>
            </div>
            <div class="hero-slider__slide swiper-slide">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/hero-4.webp" type="image/webp">
                <img src="./img/hero-4.jpg" width="300" height="300" alt="Bienvenidos al Hotel AWA">
              </picture>
            </div>
          </div>
        </div>
        <div class="hero__container container">
          <button class="hero__button hero-slider-prev">
            <img src="./img/arrow.svg" width="32" height="32" alt="Arrow">
          </button>
          <button class="hero__button hero-slider-next">
            <img src="./img/arrow.svg" width="32" height="32" alt="Arrow">
          </button>
          <div class="hero__descr">
            <h1 class="hero__title after tt-64-40">
              Bienvenidos al Hotel AWA
            </h1>
            <div class="hero__texts">
              <p class="hero__text tx-22">
                Su hotel en el corazón del centro de Múnich
              </p>
            </div>
          </div>
          <div class="hero__pagination hero-slider-pagination"></div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start hoqel -->
      <section class="hoqel" id="hoqel">
        <div class="container">
          <h2 class="hoqel__title tt-53-36">
            Habitaciones de hotel
          </h2>
          <ul class="hoqel__list">
            <li class="hoqel__item">
              <div class="hoqel__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-1.webp" type="image/webp">
                  <img src="./img/hotel-1.jpg" loading="lazy" width="300" height="300" alt="Habitación Doble Económica">
                </picture>
              </div>
              <div class="hoqel__descr">
                <p class="hoqel__text">
                  Habitación Doble Económica
                </p>
                <p class="hoqel__text">
                  <span>Huéspedes:</span> 2 personas
                </p>
              </div>
            </li>
            <li class="hoqel__item">
              <div class="hoqel__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-2.webp" type="image/webp">
                  <img src="./img/hotel-2.jpg" loading="lazy" width="300" height="300" alt="Habitación Doble Estándar">
                </picture>
              </div>
              <div class="hoqel__descr">
                <p class="hoqel__text">
                  Habitación Doble Estándar
                </p>
                <p class="hoqel__text">
                  <span>Huéspedes:</span> 2 personas
                </p>
              </div>
            </li>
            <li class="hoqel__item">
              <div class="hoqel__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-3.webp" type="image/webp">
                  <img src="./img/hotel-3.jpg" loading="lazy" width="300" height="300" alt="Habitación Doble Confort">
                </picture>
              </div>
              <div class="hoqel__descr">
                <p class="hoqel__text">
                  Habitación Doble Confort
                </p>
                <p class="hoqel__text">
                  <span>Huéspedes:</span> 3 personas
                </p>
              </div>
            </li>
            <li class="hoqel__item">
              <div class="hoqel__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-4.webp" type="image/webp">
                  <img src="./img/hotel-4.jpg" loading="lazy" width="300" height="300" alt="Suite junior">
                </picture>
              </div>
              <div class="hoqel__descr">
                <p class="hoqel__text">
                  Suite junior
                </p>
                <p class="hoqel__text">
                  <span>Huéspedes:</span> 4 personas
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end hoqel -->

      <!-- start restiq -->
      <section class="restiq" id="restiq">
        <div class="restiq__container container">
          <h2 class="restiq__title tt-53-36">
            Restaurante
          </h2>
        </div>
        <div class="restiq__bottom">
          <div class="restiq__container restiq__container_flex container">
            <div class="restiq__descr">
              <div class="restiq__subtitle after tt-31-26">
                Cocina de lujo
              </div>
              <div class="restiq__texts">
                <p class="restiq__text tx-17">
                  El restaurante del Hotel AWA en Chile es un lugar maravilloso que ofrece una cocina de alta calidad y
                  un ambiente acogedor. El restaurante goza de una alta valoración entre los visitantes y es conocido
                  por su excelente calidad de comida y servicio.
                </p>
                <p class="restiq__text tx-17">
                  El restaurante es relativamente nuevo y ofrece un interior moderno con una decoración elegante. Está
                  creado utilizando materiales respetuosos con el medio ambiente para crear un ambiente agradable para
                  los visitantes.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end restiq -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title after tt-53-36">
            Sobre nosotros
          </h2>
          <div class="about__texts">
            <p class="about__text tx-17">
              El Hotel AWA en Chile es un lugar de lujo que se encuentra ubicado en una famosa zona turística. Tiene una
              alta calificación entre los viajeros y es conocido por su servicio de alta calidad y diseño único.
            </p>
            <p class="about__text tx-17">
              El hotel AWA es relativamente nuevo y su arquitectura moderna impresiona a primera vista. Los interiores
              están decorados con buen gusto, utilizando materiales respetuosos con el medio ambiente y elementos
              decorativos elegantes.
            </p>
            <p class="about__text tx-17">
              El hotel ofrece una amplia gama de servicios para una estancia confortable de los huéspedes. Las
              instalaciones incluyen restaurantes, bares, un gimnasio, un spa y una piscina al aire libre con
              impresionantes vistas de la naturaleza circundante.
            </p>
            <p class="about__text tx-17">
              Mención aparte merece la ubicación del hotel AWA. Está situado en un lugar pintoresco con hermosas vistas
              a las montañas, al lago o al río. Los huéspedes pueden disfrutar de la belleza de la naturaleza y
              participar en diversas actividades como senderismo, trekking de montaña, esquí y pesca.
            </p>
          </div>
          <div class="about__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/about.webp" type="image/webp">
              <img src="./img/about.jpg" loading="lazy" width="300" height="300" alt="Sobre nosotros">
            </picture>
          </div>
        </div>
      </section>
      <!-- end about -->
    </main>

    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->

  </div>
</body>

</html>