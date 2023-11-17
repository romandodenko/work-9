<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Termas de Jahuel Hotel & Spa. Altas calificaciones, juego seguro.">
  <meta property="og:site_name"
    content="Termas de Jahuel Hotel & Spa es un lujoso hotel y balneario situado en Jahuel, en la región chilena de Valparaíso. Este hotel es conocido por sus aguas termales, tratamientos de spa y hermosas vistas del paisaje circundante.">
  <meta name="twitter:title" content="Termas de Jahuel Hotel & Spa. Altas calificaciones, juego seguro.">
  <meta name="twitter:description"
    content="Termas de Jahuel Hotel & Spa es un lujoso hotel y balneario situado en Jahuel, en la región chilena de Valparaíso. Este hotel es conocido por sus aguas termales, tratamientos de spa y hermosas vistas del paisaje circundante.">
  <meta name="description"
    content="Termas de Jahuel Hotel & Spa es un lujoso hotel y balneario situado en Jahuel, en la región chilena de Valparaíso. Este hotel es conocido por sus aguas termales, tratamientos de spa y hermosas vistas del paisaje circundante.">
  <title>Termas de Jahuel Hotel & Spa. Altas calificaciones, juego seguro.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Roboto-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Roboto-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
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
            Aceptado para confirmar tu edad.</p>
          <button class="popup__button">Aceptado</button>
        </div>
      </section>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__descr">
            <h1 class="hero__title tt-52-34">
              <span class="tx-16">
                Hotel & Spa
              </span>
              Termas de Jahuel
            </h1>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="about__container container">
          <div class="about__left">
            <h2 class="about__title tt-46-30">
              Sobre nosotros
            </h2>
            <div class="about__texts">
              <p class="about__text tx-16">
                Termas de Jahuel Hotel & Spa es un lujoso hotel y balneario situado en Jahuel, en la región chilena de
                Valparaíso. Este hotel es conocido por sus aguas termales, tratamientos de spa y hermosas vistas del
                paisaje circundante.
              </p>
              <p class="about__text tx-16">
                Termas de Jahuel Hotel & Spa es el lugar perfecto para descansar y relajarse rodeado de naturaleza y
                aguas termales. Este hotel es adecuado tanto para fines de semana románticos como para unas relajantes
                vacaciones en familia.
              </p>
            </div>
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

      <!-- start spa -->
      <section class="spa" id="spa">
        <div class="container">
          <h2 class="spa__title tt-46-30">
            Spa
          </h2>
          <div class="spa__texts">
            <p class="spa__text tx-16">
              La principal ventaja de este hotel es la presencia de aguas termales minerales, que se utilizan para
              tratamientos de spa y relajación. Los huéspedes pueden disfrutar de hidroterapia y masajes en un ambiente
              único.
            </p>
            <p class="spa__text tx-16">
              El hotel cuenta con piscinas al aire libre y terrazas para tomar el sol. También dispone de hammam y
              sauna.
            </p>
            <p class="spa__text tx-16">
              La región de Hauel es conocida por sus bodegas, y los huéspedes del hotel pueden visitar algunas de ellas
              para catar vinos.
            </p>
          </div>
          <ul class="spa__images">
            <li class="spa__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/spa-1.webp" type="image/webp">
                <img src="./img/spa-1.jpg" loading="lazy" width="300" height="300" alt="Spa">
              </picture>
            </li>
            <li class="spa__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/spa-2.webp" type="image/webp">
                <img src="./img/spa-2.jpg" loading="lazy" width="300" height="300" alt="Spa">
              </picture>
            </li>
            <li class="spa__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/spa-3.webp" type="image/webp">
                <img src="./img/spa-3.jpg" loading="lazy" width="300" height="300" alt="Spa">
              </picture>
            </li>
          </ul>
        </div>
      </section>
      <!-- end spa -->

      <!-- start habi -->
      <section class="habi" id="habi">
      <div class="habi__container container">
        <ul class="habi__images">
          <li class="habi__image">
            <picture>
            <source media="(min-width: 320px)" srcset="./img/nomer-1.webp" type="image/webp"> 
            <img src="./img/nomer-1.jpg" loading="lazy" width="300" height="300" alt="Habitaciones">
            </picture>
          </li>
          <li class="habi__image">
            <picture>
            <source media="(min-width: 320px)" srcset="./img/nomer-2.webp" type="image/webp"> 
            <img src="./img/nomer-2.jpg" loading="lazy" width="300" height="300" alt="Habitaciones">
            </picture>
          </li>
        </ul>
        <div class="habi__descr">
          <h2 class="habi__title tt-46-30">
            Habitaciones 
          </h2>
          <div class="habi__texts">
            <p class="habi__text tx-16">
              El hotel ofrece cómodas habitaciones y suites con un diseño moderno y vistas a la montaña o al jardín. Las habitaciones disponen de TV, aire acondicionado y baño privado.
            </p>
            <p class="habi__text tx-16">
              El hotel ofrece varios restaurantes de cocina local y mundial. Los bares del hotel invitan a los huéspedes a cócteles y bebidas.
            </p>
            <p class="habi__text tx-16">
              Los huéspedes pueden disfrutar de la naturaleza practicando senderismo, ciclismo y equitación en los alrededores del hotel. 
            </p>
          </div>
        </div>
      </div>
      </section>
       <!-- end habi -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>