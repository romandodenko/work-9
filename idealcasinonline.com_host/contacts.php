<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title"
    content="Parc Broekhuizen l Culinair landgoed - Comfortabele en veilige kamers, evenals lage prijzen.">
  <meta property="og:site_name"
    content="Het Parc Broekhuizen ligt op het terrein van een historisch landhuis dat dateert uit de 14e eeuw. Het hotel bewaart zorgvuldig de historische sfeer en architectonische kenmerken.">
  <meta name="twitter:title"
    content="Parc Broekhuizen l Culinair landgoed - Comfortabele en veilige kamers, evenals lage prijzen.">
  <meta name="twitter:description"
    content="Het Parc Broekhuizen ligt op het terrein van een historisch landhuis dat dateert uit de 14e eeuw. Het hotel bewaart zorgvuldig de historische sfeer en architectonische kenmerken.">
  <meta name="description"
    content="Het Parc Broekhuizen ligt op het terrein van een historisch landhuis dat dateert uit de 14e eeuw. Het hotel bewaart zorgvuldig de historische sfeer en architectonische kenmerken.">
  <title>Parc Broekhuizen l Culinair landgoed - Comfortabele en veilige kamers, evenals lage prijzen.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/CroissantOne-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Raleway-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
          <h1 class="contacts__title tt-48-37">
            Contacten
          </h1>
          <address class="contacts__address">
            <ul class="contacts__list">
              <li class="contacts__item tx-18-14">
                <img src="./img/geo.svg" loading="lazy" width="32" height="32" alt="Geo">
                2 Broekhuizerlaan, 3956 NS Leersum, Nederland
              </li>
              <li class="contacts__item tx-18-14">
                <img src="./img/phone.svg" loading="lazy" width="32" height="32" alt="Phone">
                <a href="tel:+31343745858">
                  +31 343-745858
                </a>
              </li>
              <li class="contacts__item tx-18-14">
                <img src="./img/email.svg" loading="lazy" width="32" height="32" alt="Email">
                <a href="mailto:info@parcbroekhuizen.nl">
                  info@parcbroekhuizen.nl
                </a>
              </li>
            </ul>
          </address>
          <form class="form" action="#!" name="form" autocomplete="off">
            <div class="form__inputs">
              <input class="form__input input" type="text" name="text" id="text" placeholder="Naam" required>
              <input class="form__input input" type="email" name="email" id="email" placeholder="Mail" required>
            </div>
            <button class="form__button but" type="submit">
              Versturen
            </button>
          </form>
          <div class="contacts__map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2455.893531234487!2d5.397868577113939!3d52.00881797394934!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c65a4673b0df13%3A0x8b132cbf91d5cb3e!2sBroekhuizerlaan%202%2C%203956%20NS%20Leersum%2C%20Netherlands!5e0!3m2!1sen!2sen!4v1695206336197!5m2!1sen!2sen"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
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