<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Una muestra de simuladores de juegos con variedad de juegos.">
  <meta property="og:site_name"
    content="Una amplia selección de juegos emocionantes que permitirán a los jugadores sumergirse en la emoción sin riesgo financiero. En nuestro escaparate sólo hay simuladores virtuales.">
  <meta name="twitter:title" content="Una muestra de simuladores de juegos con variedad de juegos.">
  <meta name="twitter:description"
    content="Una amplia selección de juegos emocionantes que permitirán a los jugadores sumergirse en la emoción sin riesgo financiero. En nuestro escaparate sólo hay simuladores virtuales.">
  <meta name="description"
    content="Una amplia selección de juegos emocionantes que permitirán a los jugadores sumergirse en la emoción sin riesgo financiero. En nuestro escaparate sólo hay simuladores virtuales.">
  <title>Una muestra de simuladores de juegos con variedad de juegos.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/BeVietnam-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/RadioCanada-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
      <!-- start contacts -->
      <section class="contacts rd-upload">
        <div class="container">
          <div class="contacts__top">
            <h1 class="contacts__title tt-53-34">
              Contactos
            </h1>
            <div class="contacts__subtitle tt-31-24">
              ¡Suscríbete a nosotros y descubre más!
            </div>
            <div class="contacts__texts">
              <p class="contacts__text tx-23">
                Rellena el formulario y entérate de todas las novedades de nuestra newsletter
              </p>
            </div>
          </div>
          <form class="form" action="#!" name="form" autocomplete="off">
            <div class="form__inputs">
              <label class="form__label" for="text">
                <span>
                  Introduzca su nombre
                </span>
                <input class="form__input input" type="text" name="text" id="text" required>
              </label>
              <label class="form__label" for="email">
                <span>
                  Introduce tu correo electrónico
                </span>
                <input class="form__input input" type="email" name="email" id="email" required>
              </label>
            </div>
            <button class="form__button but" type="submit">
              Enviar
            </button>
          </form>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.6449721462764!2d-3.6774547091408065!3d40.438859680651674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4228c603a27d5f%3A0x60182943cda81adb!2sAv.%20de%20Am%C3%A9rica%2C%2032%2C%2028028%20Madrid%2C%20Spain!5e0!3m2!1sen!2sen!4v1699351183861!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="contacts__bottom-right">
              <address class="contacts__address">
                <ul class="contacts__list">
                  <li class="contacts__item tx-17">
                    <a href="mailto:casinosciberpub@gmail.com">
                      casinosciberpub@gmail.com
                    </a>
                  </li>
                  <li class="contacts__item tx-17">
                    <a href="tel:+34912125000">
                      +34 91 212 50 00
                    </a>
                  </li>
                </ul>
              </address>
              <address class="contacts__address tx-17">
                Av. de América, 32, 28028 Madrid, Spain
              </address>
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