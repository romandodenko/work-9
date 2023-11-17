<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Viaggio Resort Mazatlán en el corazón de Mazatlán uno de los mejores hoteles">
  <meta property="og:site_name"
    content="Viaggio Resort Mazatlán ofrece una amplia gama de habitaciones, que van desde habitaciones estándar hasta lujosas suites, que brindan una estancia confortable a todos los huéspedes.">
  <meta name="twitter:title" content="Viaggio Resort Mazatlán en el corazón de Mazatlán uno de los mejores hoteles">
  <meta name="twitter:description"
    content="Viaggio Resort Mazatlán ofrece una amplia gama de habitaciones, que van desde habitaciones estándar hasta lujosas suites, que brindan una estancia confortable a todos los huéspedes.">
  <meta name="description"
    content="Viaggio Resort Mazatlán ofrece una amplia gama de habitaciones, que van desde habitaciones estándar hasta lujosas suites, que brindan una estancia confortable a todos los huéspedes.">
  <title>Viaggio Resort Mazatlán en el corazón de Mazatlán uno de los mejores hoteles</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Cinzel-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Forum-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
            <h1 class="contacts__title tt-53-32">
              Contactos
            </h1>
            <div class="contacts__texts">
              <p class="contacts__text tx-22">
                Deja una solicitud y nos pondremos en contacto contigo para ayudarte y resolver todas tus dudas. Reserva
                tu habitación ahora y regálate unas vacaciones de lujo.
              </p>
            </div>
          </div>
          <div class="contacts__middle">
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Nombre..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="Correo..." required>
              </div>
              <button class="form__button but" type="submit">
                Enviar
              </button>
            </form>
            <div class="contacts__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/contacts.webp" type="image/webp">
                <img src="./img/contacts.jpg" width="336" height="336" alt="Contactos">
              </picture>
            </div>
          </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3665.978225793618!2d-106.45373292379877!3d23.243879408031578!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x869f54b0f67250ad%3A0xa7ebe74618880970!2zQXYgQ2FtYXLDs24gU8OhYmFsbywgWm9uYSBEb3JhZGEsIE1hemF0bMOhbiwgU2luLiwgTWV4aWNv!5e0!3m2!1sen!2sen!4v1697521068654!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-22">
                  <span class="tx-17">
                    Teléfono
                  </span>
                  <a href="tel:+526696890169">
                    +52-669-689-0169
                  </a>
                </li>
                <li class="contacts__info-item tx-22">
                  <span class="tx-17">
                    Correo
                  </span>
                  <a href="mailto:hola@ViaggioResortMazatlan.com">
                    hola@ViaggioResortMazatlan.com
                  </a>
                </li>
                <li class="contacts__info-item tx-22">
                  <span class="tx-17">
                    Direccion
                  </span>
                  Av Camarón Sábalo, Zona Dorada, 82100 <br> Mazatlán, Sin., México
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