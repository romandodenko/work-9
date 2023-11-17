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
      <!-- start contacts -->
      <section class="contacts">
        <div class="container">
          <div class="contacts__top">
            <h1 class="contacts__title tt-53-36">
              Contactos
            </h1>
            <div class="contacts__texts">
              <p class="contacts__texts tx-22">
                Reserva tu habitación ahora y disfruta de tu estancia en nuestro hermoso hotel.
              </p>
            </div>
            <div class="contacts__top-bottom">
              <form class="form" action="#!" name="form" autocomplete="off">
                <div class="form__inputs">
                  <input class="form__input input" type="text" name="text" id="text" placeholder="Nombre..." required>
                  <input class="form__input input" type="email" name="email" id="email" placeholder="Correo..."
                    required>
                </div>
                <button class="form__button but-128" type="submit">
                  Enviar
                </button>
              </form>
              <div class="contacts__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/contacts.webp" type="image/webp">
                  <img src="./img/contacts.jpg" width="300" height="300" alt="Contactos">
                </picture>
              </div>
            </div>
          </div>
          <div class="contacts__bottom">
            <ul class="contacts__list">
              <li class="contacts__item tx-17">
                Schillerstrasse 10, München, Germany
              </li>
              <li class="contacts__item tx-17">
                <a href="tel:+4989904218585">
                  +49-89 904218585
                </a>
              </li>
              <li class="contacts__item tx-17">
                <a href="mailto:hello@awa-hotel.com">
                  hello@awa-hotel.com
                </a>
              </li>
            </ul>
            <div class="contacts__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2662.5457203855663!2d11.558338776952349!3d48.13828345111121!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479e75f836c481a9%3A0x25a1c44d67a5f0ef!2sSchillerstra%C3%9Fe%2010%2C%2080336%20M%C3%BCnchen%2C%20Germany!5e0!3m2!1sen!2sen!4v1695800216903!5m2!1sen!2sen" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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