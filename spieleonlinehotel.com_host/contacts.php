<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Das Leo Grand ist eine der besten Übernachtungsmöglichkeiten.">
  <meta property="og:site_name"
    content="Aufgrund seines Service und der komfortablen Wohnbedingungen genießt es bei Gästen eine hohe Bewertung. Slot-Zimmer ist eine der Zimmerkategorien, die das Hotel anbietet.">
  <meta name="twitter:title" content="Das Leo Grand ist eine der besten Übernachtungsmöglichkeiten.">
  <meta name="twitter:description"
    content="Aufgrund seines Service und der komfortablen Wohnbedingungen genießt es bei Gästen eine hohe Bewertung. Slot-Zimmer ist eine der Zimmerkategorien, die das Hotel anbietet.">
  <meta name="description"
    content="Aufgrund seines Service und der komfortablen Wohnbedingungen genießt es bei Gästen eine hohe Bewertung. Slot-Zimmer ist eine der Zimmerkategorien, die das Hotel anbietet.">
  <title>Das Leo Grand ist eine der besten Übernachtungsmöglichkeiten.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Lato-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Literata-Bold.woff2" as="font" type="font/woff2" crossorigin>
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
      <section class="contacts rd-upload">
        <div class="container">
          <h1 class="contacts__title tt-53-40">
            Kontakte
          </h1>
          <div class="contacts__texts">
            <p class="contacts__text tx-18">
              Füllen Sie das Formular aus und wir beantworten alle Ihre Fragen zu Ihrer Zimmerreservierung
            </p>
          </div>
          <form class="form" action="#!" name="form" autocomplete="off">
            <div class="form__inputs">
              <input class="form__input input" type="text" name="text" id="text" placeholder="Name..." required>
              <input class="form__input input" type="email" name="email" id="email" placeholder="Mailen..." required>
            </div>
            <button class="form__button but" type="submit">
              Schicken
            </button>
          </form>
        </div>
      </section>
      <!-- end contacts -->

      <!-- start map -->
      <section class="map rd-upload">
        <div class="container">
          <h2 class="visually-hidden">
            Map
          </h2>
          <div class="map__map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2658.8528410947547!2d16.366224992966554!3d48.20945037203627!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x476d0798b9fe7ab7%3A0x6989a17d42a6664c!2sBauernmarkt%201%2C%201010%20Wien%2C%20Austria!5e0!3m2!1sen!2sen!4v1699530050118!5m2!1sen!2sen" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
          <address class="map__address">
            <ul class="map__list">
              <li class="map__item tx-18">
                <a href="tel:+43190606">
                  +43 190606
                </a>
              </li>
              <li class="map__item tx-18">
                Bauernmarkt 1, Wien
              </li>
            </ul>
          </address>
        </div>
      </section>
      <!-- end map -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>