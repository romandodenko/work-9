<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Mainport Design Hotel is een hip, nieuw en allereerste hotel van Nederland.">
  <meta property="og:site_name"
    content="Het hotel, gelegen in het hart van Rotterdam, valt op door zijn moderne design. Je wordt begroet door een prachtige gevel en voelt meteen een sfeer van stijl en luxe.">
  <meta name="twitter:title" content="Mainport Design Hotel is een hip, nieuw en allereerste hotel van Nederland.">
  <meta name="twitter:description"
    content="Het hotel, gelegen in het hart van Rotterdam, valt op door zijn moderne design. Je wordt begroet door een prachtige gevel en voelt meteen een sfeer van stijl en luxe.">
  <meta name="description"
    content="Het hotel, gelegen in het hart van Rotterdam, valt op door zijn moderne design. Je wordt begroet door een prachtige gevel en voelt meteen een sfeer van stijl en luxe.">
  <title>Mainport Design Hotel is een hip, nieuw en allereerste hotel van Nederland.</title>
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
      <!-- start popup -->
      <div class="popup popup-active" id="popup">
        <div class="popup__close"></div>
        <div class="popup__body">
          <p class="popup__text">Onze games zijn bedoeld voor een VOLWASSEN publiek van 18 jaar en ouder. Klik op
            "Accepteren".
            om uw leeftijd te bevestigen.
            Klik op "Gereed".</p>
          <button class="popup__button">Geaccepteerd</button>
        </div>
      </div>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="container">
          <div class="hero__content">
            <div class="hero__descr">
              <h1 class="hero__title tt-64-46">
                Mainport Design Hotel
              </h1>
              <div class="hero__texts">
                  <p class="hero__text tx-22">
                    Mainport Design Hotel is een prachtig hotel in Nederland en biedt gasten hoge kortingen en
                    gloednieuwe kamers.
                  </p>
              </div>
              <a class="hero__link but-180" href="#hotels">
                Hotel kamers
              </a>
            </div>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start benefits -->
      <section class="benefits" id="benefits">
        <div class="container">
          <h2 class="benefits__title tt-53-40">
            Voordelen
          </h2>
          <ul class="benefits__list">
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon-1.svg" loading="lazy" width="32" height="32" alt="Eigentijds">
              </div>
              <h3 class="benefits__subtitle tt-31">
                Eigentijds
              </h3>
              <div class="benefits__texts">
                <p class="benefits__text tx-17">
                  Met behulp van de nieuwste technologische ontwikkelingen en een doordacht ontwerp biedt Mainport
                  Design Hotel zijn gasten het hoogste niveau van comfort en tevredenheid.
                </p>
              </div>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon-2.svg" loading="lazy" width="32" height="32" alt="Nieuw">
              </div>
              <h3 class="benefits__subtitle tt-31">
                Nieuw
              </h3>
              <div class="benefits__texts">
                <p class="benefits__text tx-17">
                  Het biedt haar gasten de mogelijkheid om een ​​sfeer van exclusiviteit en luxe te ervaren, waardoor ze
                  kunnen genieten van een unieke en comfortabele vakantie.
                </p>
              </div>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon-3.svg" loading="lazy" width="32" height="32" alt="De allereerste">
              </div>
              <h3 class="benefits__subtitle tt-31">
                De allereerste
              </h3>
              <div class="benefits__texts">
                <p class="benefits__text tx-17">
                  Mainport Design Hotel biedt de allereerste normen op het gebied van service en design om aan de meest
                  veeleisende smaak van zijn gasten te voldoen.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end benefits -->

      <!-- start kotingen -->
      <section class="kotingen" id="kotingen">
        <div class="container">
          <h2 class="kotingen__title tt-53-40">
            Kortingen bij boeking
          </h2>
          <ul class="kotingen__list">
            <li class="kotingen__item">
              <div class="kotingen__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/kortingen-1.webp" type="image/webp">
                  <img src="./img/kortingen-1.jpg" loading="lazy" width="300" height="300" alt="Kortingen bij boeking">
                </picture>
              </div>
              <div class="kotingen__top-text">
                <div class="kotingen__text kotingen__text_color tx-17">
                  Slapen en dineren
                </div>
              </div>
              <div class="kotingen__bottom-text">
                <div class="kotingen__text tx-17">
                  Verblijf in uw favoriete hotel inclusief 3-gangendiner
                </div>
              </div>
            </li>
            <li class="kotingen__item">
              <div class="kotingen__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/kortingen-2.webp" type="image/webp">
                  <img src="./img/kortingen-2.jpg" loading="lazy" width="300" height="300" alt="Kortingen bij boeking">
                </picture>
              </div>
              <div class="kotingen__top-text">
                <div class="kotingen__text kotingen__text_color tx-17">
                  Roest en ontspan
                </div>
              </div>
              <div class="kotingen__bottom-text">
                <div class="kotingen__text tx-17">
                  Ontspan in het nieuwe privé-wellnesscentrum
                </div>
              </div>
            </li>
            <li class="kotingen__item">
              <div class="kotingen__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/kortingen-3.webp" type="image/webp">
                  <img src="./img/kortingen-3.jpg" loading="lazy" width="300" height="300" alt="Kortingen bij boeking">
                </picture>
              </div>
              <div class="kotingen__top-text">
                <div class="kotingen__text kotingen__text_color tx-17">
                  Bubbels & Bad
                </div>
              </div>
              <div class="kotingen__bottom-text">
                <div class="kotingen__text tx-17">
                  Maak van uw allereerste logeerpartijtje een vakantieherinnering
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end kotingen -->

      <!-- start hotels -->
      <section class="hotels" id="hotels">
        <div class="container">
          <h2 class="hotels__title tt-53-40">
            Hotel kamers
          </h2>
          <ul class="hotels__list">
            <li class="hotels__item">
              <div class="hotels__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-1.webp" type="image/webp">
                  <img src="./img/hotel-1.jpg" loading="lazy" width="300" height="300" alt="City XL Kamer">
                </picture>
              </div>
              <div class="hotels__descr">
                <div class="hotels__subtitle tx-22">
                  City XL Kamer
                </div>
                <ul class="hotels__info">
                  <li class="hotels__info-item tx-17">
                    36 m²
                  </li>
                  <li class="hotels__info-item tx-17">
                    XL kingsize bed
                  </li>
                  <li class="hotels__info-item tx-17">
                    Max. 2 personen
                  </li>
                </ul>
                <div class="hotels__texts">
                  <p class="hotels__text tx-17">
                    De Superior Kamer in het Mainport Design Hotel in Nederland is een unieke ruimte ontworpen voor
                    gasten die bijzondere ontspanning en comfort verwachten.
                  </p>
                </div>
              </div>
            </li>
            <li class="hotels__item">
              <div class="hotels__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-2.webp" type="image/webp">
                  <img src="./img/hotel-2.jpg" loading="lazy" width="300" height="300" alt="Haven Maan">
                </picture>
              </div>
              <div class="hotels__descr">
                <div class="hotels__subtitle tx-22">
                  Haven Maan
                </div>
                <ul class="hotels__info">
                  <li class="hotels__info-item tx-17">
                    34 m²
                  </li>
                  <li class="hotels__info-item tx-17">
                    XL-kingsizebed
                  </li>
                  <li class="hotels__info-item tx-17">
                    Max. 2 personen
                  </li>
                </ul>
                <div class="hotels__texts">
                  <p class="hotels__text tx-17">
                    De kamer is voorzien van een privésauna of jacuzzi waar gasten na een lange dag heerlijk kunnen
                    ontspannen. Er kunnen ook gespecialiseerde diensten zoals massage- of spabehandelingen op de kamer
                    worden verleend.
                  </p>
                </div>
              </div>
            </li>
            <li class="hotels__item">
              <div class="hotels__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-3.webp" type="image/webp">
                  <img src="./img/hotel-3.jpg" loading="lazy" width="300" height="300" alt="Corner Kamer">
                </picture>
              </div>
              <div class="hotels__descr">
                <div class="hotels__subtitle tx-22">
                  Corner Kamer
                </div>
                <ul class="hotels__info">
                  <li class="hotels__info-item tx-17">
                    31 m²
                  </li>
                  <li class="hotels__info-item tx-17">
                    XL-kingsizebed
                  </li>
                  <li class="hotels__info-item tx-17">
                    Max. 2 personen
                  </li>
                </ul>
                <div class="hotels__texts">
                  <p class="hotels__text tx-17">
                    De Hoekkamer in het Mainport Design Hotel in Nederland is een uitzonderlijke ruimte die warme,
                    nieuwe en nieuwe elementen combineert om een ​​ongeëvenaarde verblijfservaring te creëren.
                  </p>
                </div>
              </div>
            </li>
            <li class="hotels__item">
              <div class="hotels__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-4.webp" type="image/webp">
                  <img src="./img/hotel-4.jpg" loading="lazy" width="300" height="300" alt="Sauna Kamer">
                </picture>
              </div>
              <div class="hotels__descr">
                <div class="hotels__subtitle tx-22">
                  Sauna Kamer
                </div>
                <ul class="hotels__info">
                  <li class="hotels__info-item tx-17">
                    34 m²
                  </li>
                  <li class="hotels__info-item tx-17">
                    XL-kingsizebed
                  </li>
                  <li class="hotels__info-item tx-17">
                    Max. 2 personen
                  </li>
                </ul>
                <div class="hotels__texts">
                  <p class="hotels__text tx-17">
                    De Saunaruimte in het Mainport Design Hotel in Nederland is een uitzonderlijke ruimte die warme,
                    nieuwe en allereerste elementen samenbrengt om gasten een unieke ervaring te bieden.
                  </p>
                </div>
              </div>
            </li>
            <li class="hotels__item">
              <div class="hotels__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-5.webp" type="image/webp">
                  <img src="./img/hotel-5.jpg" loading="lazy" width="300" height="300" alt="Spa Suite">
                </picture>
              </div>
              <div class="hotels__descr">
                <div class="hotels__subtitle tx-22">
                  Spa Suite
                </div>
                <ul class="hotels__info">
                  <li class="hotels__info-item tx-17">
                    68 m²
                  </li>
                  <li class="hotels__info-item tx-17">
                    XL-kingsizebed
                  </li>
                  <li class="hotels__info-item tx-17">
                    Max. 2 personen
                  </li>
                </ul>
                <div class="hotels__texts">
                  <p class="hotels__text tx-17">
                    De nieuwigheid van de luxe kamer komt tot uiting in het gebruik van de nieuwste en meest innovatieve
                    technologieën. Gasten kunnen genieten van de modernste bedieningssystemen op de kamer, waarmee ze de
                    sfeer en het comfort van de kamer kunnen regelen en aanpassen.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end hotels -->

      <!-- start event -->
      <section class="event" id="event">
        <div class="container">
          <div class="event__content">
            <div class="event__descr">
              <h2 class="event__title tt-31">
                Evenementen
              </h2>
              <div class="event__subtitle tx-22">
                Bruiloften
              </div>
              <div class="event__texts">
                <p class="event__text tx-17">
                  Bruiloftsevenementen bij het Mainport Design Hotel in Nederland zijn een hete, nieuwe en allereerste
                  gelegenheid om een ​​onvergetelijke huwelijksceremonie en receptie te creëren. Het hotel biedt luxe en
                  innovatieve oplossingen om elke bruiloft perfect en uniek te maken.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end event -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>