<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title"
    content="Hotel Restaurant Stad Munster is een resorthotel met topspellen en gegarandeerde winsten.">
  <meta property="og:site_name"
    content="Hotel Restaurant Stad Munster is een gezellig hotel in het centrum van Wageningen, Nederland. Het hotel biedt comfortabele accommodatie en uitstekend eten in het restaurant. ">
  <meta name="twitter:title"
    content="Hotel Restaurant Stad Munster is een resorthotel met topspellen en gegarandeerde winsten.">
  <meta name="twitter:description"
    content="Hotel Restaurant Stad Munster is een gezellig hotel in het centrum van Wageningen, Nederland. Het hotel biedt comfortabele accommodatie en uitstekend eten in het restaurant. ">
  <meta name="description"
    content="Hotel Restaurant Stad Munster is een gezellig hotel in het centrum van Wageningen, Nederland. Het hotel biedt comfortabele accommodatie en uitstekend eten in het restaurant. ">
  <title>Hotel Restaurant Stad Munster is een resorthotel met topspellen en gegarandeerde winsten.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Nunito-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/LuckiestGuy-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
      <!-- start popup -->
      <section class="popup popup-active" id="popup">
        <div class="popup__close"></div>
        <div class="popup__body">
          <p class="popup__text">Onze games zijn bedoeld voor een AGE-publiek ouder dan 18 jaar. Klik op Geaccepteerd om
            uw leeftijd te verifiëren.
          </p>
          <button class="popup__button">Geaccepteerd</button>
        </div>
      </section>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero__container container">
          <h1 class="hero__title tt-52-36">
            Hotel Restaurant Stad Munster
          </h1>
          <div class="hero__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/hero.webp" type="image/webp">
              <img src="./img/hero.jpg" width="336" height="336" alt="Hotel Restaurant Stad Munster">
            </picture>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title tt-46-32">
            Over ons
          </h2>
          <div class="about__content">
            <div class="about__descr">
              <div class="about__texts">
                <p class="about__text tx-16-14">
                  Hotel Restaurant Stad Munster is een gezellig hotel in het centrum van Wageningen, Nederland. Het
                  hotel biedt comfortabele accommodatie en uitstekend eten in het restaurant.
                </p>
                <p class="about__text tx-16-14">
                  Hotel Restaurant Stad Munster is een plek waar gasten kunnen genieten van comfort en een uitstekende
                  keuken, terwijl ze het rijke culturele en historische erfgoed van de stad Wageningen ontdekken.
                </p>
                <p class="about__text tx-16-14">
                  Het hotel kan informatie verstrekken over wandeltochten in en rond de stad.
                </p>
              </div>
            </div>
            <ul class="about__images">
              <li class="about__image about__image_1">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/about-1.webp" type="image/webp">
                  <img src="./img/about-1.jpg" loading="lazy" width="366" height="366" alt="Over ons">
                </picture>
              </li>
              <li class="about__image about__image_2">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/about-2.webp" type="image/webp">
                  <img src="./img/about-2.jpg" loading="lazy" width="366" height="366" alt="Over ons">
                </picture>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end about -->

      <!-- start ligging -->
      <section class="ligging" id="ligging">
        <div class="container">
          <h2 class="ligging__title tt-46-32">
            Ligging
          </h2>
          <ul class="ligging__list">
            <li class="ligging__item">
              <div class="ligging__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/ligging-1.webp" type="image/webp">
                  <img src="./img/ligging-1.jpg" loading="lazy" width="336" height="336" alt="Ligging">
                </picture>
              </div>
              <div class="ligging__descr">
                <div class="ligging__texts">
                  <p class="ligging__text tx-16-14">
                    Het hotel ligt in het historische centrum van Wageningen, waardoor het een ideale locatie is voor
                    reizigers die de historische bezienswaardigheden en de omgeving willen verkennen.
                  </p>
                </div>
              </div>
            </li>
            <li class="ligging__item">
              <div class="ligging__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/ligging-2.webp" type="image/webp">
                  <img src="./img/ligging-2.jpg" loading="lazy" width="336" height="336" alt="Ligging">
                </picture>
              </div>
              <div class="ligging__descr">
                <div class="ligging__texts">
                  <p class="ligging__text tx-16-14">
                    Het hotel ligt dicht bij de Universiteit Wageningen, wat het handig maakt voor bezoekende studenten
                    en onderzoekers.
                  </p>
                </div>
              </div>
            </li>
            <li class="ligging__item">
              <div class="ligging__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/ligging-3.webp" type="image/webp">
                  <img src="./img/ligging-3.jpg" loading="lazy" width="336" height="336" alt="Ligging">
                </picture>
              </div>
              <div class="ligging__descr">
                <div class="ligging__texts">
                  <p class="ligging__text tx-16-14">
                    Het hotel wordt omringd door cafés, bars en winkels, zodat gasten kunnen genieten van de sfeer van
                    de stad.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end ligging -->

      <!-- start hotels -->
      <section class="hotels" id="hotels">
        <div class="container">
          <h2 class="hotels__title tt-46-32">
            Kamers
          </h2>
          <ul class="hotels__list">
            <li class="hotels__item">
              <div class="hotels__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/kamers-1.webp" type="image/webp">
                  <img src="./img/kamers-1.jpg" loading="lazy" width="336" height="336" alt="Kamers">
                </picture>
              </div>
              <div class="hotels__descr">
                <p class="hotels__text tx-16-14">
                  De kamers in Hotel Stad Munster zijn over het algemeen ruim en gezellig, waardoor gasten een
                  comfortabel verblijf hebben.
                </p>
              </div>
            </li>
            <li class="hotels__item">
              <div class="hotels__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/kamers-2.webp" type="image/webp">
                  <img src="./img/kamers-2.jpg" loading="lazy" width="336" height="336" alt="Kamers">
                </picture>
              </div>
              <div class="hotels__descr">
                <p class="hotels__text tx-16-14">
                  Het hotel staat bekend om zijn restaurant waar lokale en internationale gerechten worden geserveerd.
                  Gasten kunnen genieten van heerlijke gerechten en een verscheidenheid aan wijnen.
                </p>
              </div>
            </li>
            <li class="hotels__item">
              <div class="hotels__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/kamers-3.webp" type="image/webp">
                  <img src="./img/kamers-3.jpg" loading="lazy" width="336" height="336" alt="Kamers">
                </picture>
              </div>
              <div class="hotels__descr">
                <p class="hotels__text tx-16-14">
                  Het personeel van het hotel is gastvrij en staat klaar om te helpen met verschillende verzoeken en
                  behoeften van de gasten.
                </p>
              </div>
            </li>
            <li class="hotels__item">
              <div class="hotels__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/kamers-4.webp" type="image/webp">
                  <img src="./img/kamers-4.jpg" loading="lazy" width="336" height="336" alt="Kamers">
                </picture>
              </div>
              <div class="hotels__descr">
                <p class="hotels__text tx-16-14">
                  Het hotel biedt gratis parkeergelegenheid voor gasten, wat vooral handig is voor mensen die met de
                  auto reizen.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end hotels -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>