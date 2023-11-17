<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Hotel seguro, con altas ganancias y juegos de ranking.">
  <meta property="og:site_name" content="El Hotel Montevideo en Uruguay es uno de los mejores hoteles de la región con una alta
  calificación de visitantes reconocidos. Aquí los huéspedes encontrarán amplias y confortables
  habitaciones equipadas con todo lo necesario para una estancia agradable. Todas las habitaciones del
  hotel cuentan con un diseño elegante y equipamiento moderno para satisfacer a los huéspedes más
  exigentes.">
  <meta name="twitter:title" content="Hotel seguro, con altas ganancias y juegos de ranking.">
  <meta name="twitter:description" content="El Hotel Montevideo en Uruguay es uno de los mejores hoteles de la región con una alta
  calificación de visitantes reconocidos. Aquí los huéspedes encontrarán amplias y confortables
  habitaciones equipadas con todo lo necesario para una estancia agradable. Todas las habitaciones del
  hotel cuentan con un diseño elegante y equipamiento moderno para satisfacer a los huéspedes más
  exigentes.">
  <meta name="description" content="El Hotel Montevideo en Uruguay es uno de los mejores hoteles de la región con una alta
  calificación de visitantes reconocidos. Aquí los huéspedes encontrarán amplias y confortables
  habitaciones equipadas con todo lo necesario para una estancia agradable. Todas las habitaciones del
  hotel cuentan con un diseño elegante y equipamiento moderno para satisfacer a los huéspedes más
  exigentes.">
  <title>Hotel seguro, con altas ganancias y juegos de ranking.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/SometypeMono-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/PlaypenSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
      <section class="contacts">
        <div class="container">
          <h1 class="contacts__title tt-42-30">
            Contactos
          </h1>
          <div class="contacts__left">
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Nombre" required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="Correo electrónico"
                  required>
              </div>
              <button class="form__button but" type="submit">
                Enviar
              </button>
            </form>
            <address class="contacts__address">
              <ul class="contacts__list">
                <li class="contacts__item tx-16-14">
                  Dir. Jose Benito Lamas 2901. Montevideo, Uruguay
                </li>
                <li class="contacts__item tx-16-14">
                  <a href="tel:+59842440229">
                    +598 42 440 229
                  </a>
                </li>
                <li class="contacts__item tx-16-14">
                  <a href="mailto:info@hotelmvd.com">
                    info@hotelmvd.com
                  </a>
                </li>
              </ul>
            </address>
          </div>
          <div class="contacts__map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3271.736288985397!2d-56.15588972326607!3d-34.91306687390302!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x959f810b5448cccd%3A0xf144537101334b8c!2sHOTEL%20MONTEVIDEO!5e0!3m2!1sen!2sen!4v1698304019053!5m2!1sen!2sen"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </section>
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>