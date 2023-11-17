<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Nobu Hotel Barcelona es un hotel de lujo ubicado en España.">
  <meta property="og:site_name"
    content="Es famoso por su excelente calidad de servicio. El hotel goza de una alta valoración debido a su incomparable confort y su elegante diseño.">
  <meta name="twitter:title" content="Nobu Hotel Barcelona es un hotel de lujo ubicado en España.">
  <meta name="twitter:description"
    content="Es famoso por su excelente calidad de servicio. El hotel goza de una alta valoración debido a su incomparable confort y su elegante diseño.">
  <meta name="description"
    content="Es famoso por su excelente calidad de servicio. El hotel goza de una alta valoración debido a su incomparable confort y su elegante diseño.">
  <title>Nobu Hotel Barcelona es un hotel de lujo ubicado en España.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/PlayfairDisplay-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/PlayfairDisplay-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
              <p class="contacts__text tx-17">
                Complete una solicitud y nos comunicaremos con usted para reservarle una habitación.
              </p>
            </div>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Nombre..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="Correo..." required>
              </div>
              <button class="form__button but" type="submit">
                Enviar
              </button>
            </form>
          </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.7335946599865!2d2.1401183766967384!3d41.37987239646027!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a499a32e995d79%3A0xe9193231ce168e24!2sNobu%20Hotel%20Barcelona!5e0!3m2!1sen!2sen!4v1697188061282!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  <p class="contacts__text contacts__text_align contacts__text_opacity">
                    DIRECCIÓN
                  </p>
                  <p class="contacts__text contacts__text_align">
                    Nobu Hotel BarcelonaAv. Roma 2-4Barcelona, 08014, Spain
                  </p>
                </li>
                <li class="contacts__info-item tx-17">
                  <p class="contacts__text contacts__text_align contacts__text_opacity">
                    Teléfono
                  </p>
                  <a href="tel:+34934936025">
                    +34 9349 360 25
                  </a>
                </li>
                <li class="contacts__info-item tx-17">
                  <p class="contacts__text contacts__text_align contacts__text_opacity">
                    Correo
                  </p>
                  <a href="mailto:inquiries-barcelona@nobuhotels.com">
                    inquiries-barcelona@nobuhotels.com
                  </a>
                </li>
              </ul>
            </address>
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