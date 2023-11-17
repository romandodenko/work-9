<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Alma Barcelona GL es un hotel de lujo ubicado en España.">
  <meta property="og:site_name"
    content="El Alma Barcelona GL está altamente valorado por sus lujosos interiores y su inigualable servicio. Aquí encontrará habitaciones elegantes y confortables.">
  <meta name="twitter:title" content="Alma Barcelona GL es un hotel de lujo ubicado en España.">
  <meta name="twitter:description"
    content="El Alma Barcelona GL está altamente valorado por sus lujosos interiores y su inigualable servicio. Aquí encontrará habitaciones elegantes y confortables.">
  <meta name="description"
    content="El Alma Barcelona GL está altamente valorado por sus lujosos interiores y su inigualable servicio. Aquí encontrará habitaciones elegantes y confortables.">
  <title>Alma Barcelona GL es un hotel de lujo ubicado en España.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/DMSerifDisplay-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Poly-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
      <section class="contacts">
        <div class="container">
          <div class="contacts__top">
            <h1 class="contacts__title tt-53-40">
              Contactos
            </h1>
            <div class="contacts__texts">
              <p class="contacts__text tx-17">
                Rellena el formulario y reserva una habitación en nuestro hotel para crear unas maravillosas vacaciones
                para ti.
              </p>
            </div>
          </div>
          <div class="contacts__middle">
            <div class="contacts__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/contacts.webp" type="image/webp">
                <img src="./img/contacts.jpg" loading="lazy" width="336" height="366" alt="Contactos">
              </picture>
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
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2993.0580952541077!2d2.160635976697301!3d41.3945446955502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12a4a3e77679e189%3A0xb0b6ea293d3bc3f3!2sHotel%20Alma%20Barcelona!5e0!3m2!1sen!2sen!4v1697440142983!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  <span>
                    DIRECCIÓN
                  </span>
                  Mallorca 271, 08008 Barcelona
                </li>
                <li class="contacts__info-item tx-17">
                  <span>
                    Teléfono
                  </span>
                  <a href="tel:+34932164490">
                    +34 932 164 490
                  </a>
                </li>
                <li class="contacts__info-item tx-17">
                  <span>
                    Correo
                  </span>
                  <a href="mailto:reservations@almabarcelona.com">
                    reservations@almabarcelona.com
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