<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Zicht op Twente is een resorthotel met topspellen en gegarandeerde winsten.">
  <meta property="og:site_name"
    content="Zicht op Twent is een gezellig hotel gelegen in de prachtige natuur van de regio Twente in Nederland. Dit hotel heeft een rustige sfeer en biedt gasten de mogelijkheid om te genieten van de omliggende natuur en comfort.">
  <meta name="twitter:title" content="Zicht op Twente is een resorthotel met topspellen en gegarandeerde winsten.">
  <meta name="twitter:description"
    content="Zicht op Twent is een gezellig hotel gelegen in de prachtige natuur van de regio Twente in Nederland. Dit hotel heeft een rustige sfeer en biedt gasten de mogelijkheid om te genieten van de omliggende natuur en comfort.">
  <meta name="description"
    content="Zicht op Twent is een gezellig hotel gelegen in de prachtige natuur van de regio Twente in Nederland. Dit hotel heeft een rustige sfeer en biedt gasten de mogelijkheid om te genieten van de omliggende natuur en comfort.">
  <title>Zicht op Twente is een resorthotel met topspellen en gegarandeerde winsten.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Lato.woff2" as="font" type="font/woff2" crossorigin>
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
        <div class="container">
          <div class="hero__item">
            <div class="hero__descr">
              <h1 class="hero__title tt-52-36">
                Zicht op Twent
              </h1>
              <div class="hero__texts">
                <p class="hero__text tx-16-14">
                  Is een gezellig hotel gelegen in de prachtige natuur van de regio Twente in Nederland. Dit hotel heeft
                  een rustige sfeer en biedt gasten de mogelijkheid om te genieten van de omliggende natuur en comfort.
                </p>
              </div>
            </div>
            <div class="hero__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/hero-1.webp" type="image/webp">
                <img src="./img/hero-1.jpg" width="300" height="300" alt="Zicht op Twent">
              </picture>
            </div>
          </div>
          <div class="hero__item">
            <div class="hero__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/hero-2.webp" type="image/webp">
                <img src="./img/hero-2.jpg" width="300" height="300" alt="Zicht op Twent">
              </picture>
            </div>
            <div class="hero__descr">
              <div class="hero__texts">
                <p class="hero__text tx-16-14">
                  Ontspannen plek om te verblijven waar gasten kunnen genieten van de natuur, heerlijk eten en comfort.
                  Dit hotel is geschikt voor zowel mensen die op zoek zijn naar een rustige vakantie in de natuur als
                  zakenreizigers.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start rest -->
      <section class="rest" id="rest">
        <div class="rest__container container">
          <div class="rest__descr">
            <h2 class="rest__title tt-46-32">
              Restaurant
            </h2>
            <div class="rest__texts">
              <p class="rest__text tx-16-14">
                Het hotel heeft een restaurant waar verschillende lokale en wereldgerechten worden geserveerd. Er is ook
                een bar waar u kunt ontspannen en genieten van een drankje.
              </p>
              <p class="rest__text tx-16-14">
                Voor zakenreizigers biedt het hotel een businesscentrum en conferentiezalen voor vergaderingen en
                evenementen.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end rest -->

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
                  <source media="(min-width: 320px)" srcset="./img/hotel-1.webp" type="image/webp">
                  <img src="./img/hotel-1.jpg" loading="lazy" width="300" height="300" alt="Kamers">
                </picture>
              </div>
              <div class="hotels__descr">
                <div class="hotels__texts">
                  <p class="hotels__text tx-16-14">
                    Het hotel biedt comfortabele kamers en appartementen met een modern design en moderne faciliteiten.
                    Elke kamer is uitgerust met een televisie, bureau en eigen badkamer.
                  </p>
                </div>
              </div>
            </li>
            <li class="hotels__item">
              <div class="hotels__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-2.webp" type="image/webp">
                  <img src="./img/hotel-2.jpg" loading="lazy" width="300" height="300" alt="Kamers">
                </picture>
              </div>
              <div class="hotels__descr">
                <div class="hotels__texts">
                  <p class="hotels__text tx-16-14">
                    Het ontbijt is bij de prijs inbegrepen en wordt geserveerd in het gezellige restaurant van het
                    hotel. Gasten kunnen genieten van verschillende ontbijtspecialiteiten om de dag goed te beginnen.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end hotels -->

      <!-- start benefits -->
      <section class="benefits" id="benefits">
        <div class="container">
          <h2 class="benefits__title tt-46-32">
            Voordelen
          </h2>
          <ul class="benefits__list">
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon-1.svg" loading="lazy" width="32" height="32" alt="Hele huis">
              </div>
              <div class="benefits__texts">
                <div class="benefits__text tx-24-18">
                  Hele huis
                </div>
              </div>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon-2.svg" loading="lazy" width="32" height="32" alt="60 m² oppervlakte">
              </div>
              <div class="benefits__texts">
                <div class="benefits__text tx-24-18">
                  60 m² oppervlakte
                </div>
              </div>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon-3.svg" loading="lazy" width="32" height="32" alt="Keuken">
              </div>
              <div class="benefits__texts">
                <div class="benefits__text tx-24-18">
                  Keuken
                </div>
              </div>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon-4.svg" loading="lazy" width="32" height="32" alt="Uitzicht vanuit het raam">
              </div>
              <div class="benefits__texts">
                <div class="benefits__text tx-24-18">
                  Uitzicht vanuit het raam
                </div>
              </div>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon-5.svg" loading="lazy" width="32" height="32" alt="Tuin">
              </div>
              <div class="benefits__texts">
                <div class="benefits__text tx-24-18">
                  Tuin
                </div>
              </div>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon-6.svg" loading="lazy" width="32" height="32" alt="Huisdieren toegestaan">
              </div>
              <div class="benefits__texts">
                <div class="benefits__text tx-24-18">
                  Huisdieren toegestaan
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end benefits -->

      <!-- start attracties -->
      <section class="attracties" id="attracties">
        <div class="attracties__container container">
          <div class="attracties__descr">
            <h2 class="attracties__title tt-46-32">
              Attracties
            </h2>
            <div class="attracties__texts">
              <p class="attracties__text tx-16-14">
                Het hotel ligt dicht bij verschillende attracties en bezienswaardigheden, waardoor het een handige plek
                is om de regio Twente te verkennen.
              </p>
              <p class="attracties__text tx-16-14">
                Het hotel wordt omringd door natuurlijke landschappen, waardoor het een geweldige plek is om te
                wandelen, fietsen en te genieten van de frisse lucht.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end attracties -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>