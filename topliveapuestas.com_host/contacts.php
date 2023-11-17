<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Bienvenido a nuestro portal legal de juegos de azar sobre diversos temas">
  <meta property="og:site_name"
    content="En nuestro portal encontrarás variados y emocionantes simuladores ideales para la relajación y el entretenimiento. Nuestro sitio te ofrece la mejor lista de juegos.">
  <meta name="twitter:title" content="Bienvenido a nuestro portal legal de juegos de azar sobre diversos temas">
  <meta name="twitter:description"
    content="En nuestro portal encontrarás variados y emocionantes simuladores ideales para la relajación y el entretenimiento. Nuestro sitio te ofrece la mejor lista de juegos.">
  <meta name="description"
    content="En nuestro portal encontrarás variados y emocionantes simuladores ideales para la relajación y el entretenimiento. Nuestro sitio te ofrece la mejor lista de juegos.">
  <title>Bienvenido a nuestro portal legal de juegos de azar sobre diversos temas</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Poppins-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Poppins-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
            <h1 class="contacts__title tt-53-40">
              Contactos
            </h1>
            <div class="contacts__texts">
              <p class="contacts__text tx-23">
                ¡Rellena el formulario y suscríbete a nuestras actualizaciones para estar al tanto de todas las
                novedades!
              </p>
            </div>
          </div>
       <div class="contacts__wrapper-form">
        <form class="form" action="#!" name="form" autocomplete="off">
          <div class="form__inputs">
            <input class="form__input input" type="text" name="text" id="text" placeholder="Nombre..." required>
            <input class="form__input input" type="email" name="email" id="email" placeholder="Correo electrónico..."
              required>
          </div>
          <button class="form__button but" type="submit">
            Enviar
          </button>
        </form>
       </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.792959728483!2d-77.04144902388387!3d-12.057761642107709!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c8c6ab71066b%3A0x3091c08f414f1766!2sAv.%20Espa%C3%B1a%20264%2C%20Lima%2015001%2C%20Peru!5e0!3m2!1sen!2sen!4v1698909637473!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__list">
                <li class="contacts__item tx-17">
                  <div class="contacts__icon">
                    <img src="." data-rd-image="./img/address-1.svg" data-rd-image-webp="./img/address-1.svg" width="32"
                      height="32" alt="Icon address">
                  </div>
                  Lima, Avenida España 264
                </li>
                <li class="contacts__item tx-17">
                  <div class="contacts__icon">
                    <img src="." data-rd-image="./img/address-2.svg" data-rd-image-webp="./img/address-2.svg" width="32"
                      height="32" alt="Icon mail">
                  </div>
                  <a href="mailto:topliveapuestas@gmail.com">
                    topliveapuestas@gmail.com
                  </a>
                </li>
                <li class="contacts__item tx-17">
                  <div class="contacts__icon">
                    <img src="." data-rd-image="./img/address-3.svg" data-rd-image-webp="./img/address-3.svg" width="32"
                      height="32" alt="Icon phone">
                  </div>
                  <a href="tel:+51982487812">
                    +51 982 48 78 12
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