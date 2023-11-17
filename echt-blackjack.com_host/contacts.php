<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Das Dorint Kurfürstendamm Berlin gehört zu den Besten seiner Klasse.">
  <meta property="og:site_name"
    content="Das Hotel bietet ein hohes Maß an Komfort, elegantes Design und Annehmlichkeiten. Das Hotel bietet bequemen Zugang zu einer Vielzahl von Restaurants und Sehenswürdigkeiten.">
  <meta name="twitter:title" content="Das Dorint Kurfürstendamm Berlin gehört zu den Besten seiner Klasse.">
  <meta name="twitter:description"
    content="Das Hotel bietet ein hohes Maß an Komfort, elegantes Design und Annehmlichkeiten. Das Hotel bietet bequemen Zugang zu einer Vielzahl von Restaurants und Sehenswürdigkeiten.">
  <meta name="description"
    content="Das Hotel bietet ein hohes Maß an Komfort, elegantes Design und Annehmlichkeiten. Das Hotel bietet bequemen Zugang zu einer Vielzahl von Restaurants und Sehenswürdigkeiten.">
  <title>Das Dorint Kurfürstendamm Berlin gehört zu den Besten seiner Klasse.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Gotu-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Scada-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
            <h1 class="contacts__title tt-53-28">
              Kontakt
            </h1>
            <div class="contacts__texts">
              <p class="contacts__text tx-22">
                Füllen Sie das Formular aus und buchen Sie jetzt Ihr Zimmer!
              </p>
              <p class="contacts__text tx-22">
                Spüren Sie den Genuss und Komfort der Spitzenklasse in unseren Zimmern
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
          <div class="contacts__bottom">
            <ul class="contacts__list">
              <li class="contacts__item tx-17">
                <a href="tel:+49308009990">+49 30 8009990.</a>
              </li>
              <li class="contacts__item tx-17">
                Augsburger Str. 41, Charlottenburg-Wilmersdorf
              </li>
              <li class="contacts__item tx-17">
                <a href="mailto:info.berlin@dorint.com">
                  info.berlin@dorint.com.
                </a>
              </li>
            </ul>
            <div class="contacts__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2428.702494614264!2d13.329340977135299!3d52.502624737515276!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a850ff2b7502e3%3A0xceb8ade8aa96e538!2sAugsburger%20Str.%2041%2C%2010789%20Berlin%2C%20Germany!5e0!3m2!1sen!2sen!4v1695640215744!5m2!1sen!2sen" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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