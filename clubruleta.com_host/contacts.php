<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Bienvenido a nuestro mejor hotel en España con todas las comodidades. Contactos">
  <meta property="og:site_name"
    content="Nuestro hotel está ubicado en un hermoso lugar, rodeado de paisajes y vistas impresionantes del océano o las montañas. Aquí puede disfrutar del cálido sol y el clima cálido.">
  <meta property="og:url" content="clubruleta.com">
  <meta property="og:image" content="clubruleta.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Bienvenido a nuestro mejor hotel en España con todas las comodidades. Contactos">
  <meta name="twitter:description"
    content="Nuestro hotel está ubicado en un hermoso lugar, rodeado de paisajes y vistas impresionantes del océano o las montañas. Aquí puede disfrutar del cálido sol y el clima cálido.">
  <meta name="twitter:site" content="clubruleta.com">
  <meta name="twitter:image" content="clubruleta.com/main.png">
  <meta name="description"
    content="Nuestro hotel está ubicado en un hermoso lugar, rodeado de paisajes y vistas impresionantes del océano o las montañas. Aquí puede disfrutar del cálido sol y el clima cálido.">
  <title>Bienvenido a nuestro mejor hotel en España con todas las comodidades. Contactos</title>
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
      <!-- start contacts -->
      <section class="contacts contacts_2">
        <div class="container">
          <div class="contacts__head">
            <h1 class="contacts__title tt-2">
              Contactos
            </h1>
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