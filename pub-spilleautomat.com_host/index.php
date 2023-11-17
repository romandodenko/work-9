<!DOCTYPE html>
<html lang="da">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Sikkert hotel med høje gevinster og rangeringsspil">
  <meta property="og:site_name"
    content="Copenhagen Marriott Hotel er et luksushotel med en ideel beliggenhed i hjertet af København, som tilbyder gæsterne komfortabel indkvartering og en utrolig udsigt over denne fantastiske by. Med sin historiske atmosfære og moderne faciliteter er dette hotel det perfekte sted for både fritids- og forretningsrejsende.">
  <meta name="twitter:title" content="Sikkert hotel med høje gevinster og rangeringsspil">
  <meta name="twitter:description"
    content="Copenhagen Marriott Hotel er et luksushotel med en ideel beliggenhed i hjertet af København, som tilbyder gæsterne komfortabel indkvartering og en utrolig udsigt over denne fantastiske by. Med sin historiske atmosfære og moderne faciliteter er dette hotel det perfekte sted for både fritids- og forretningsrejsende.">
  <meta name="description"
    content="Copenhagen Marriott Hotel er et luksushotel med en ideel beliggenhed i hjertet af København, som tilbyder gæsterne komfortabel indkvartering og en utrolig udsigt over denne fantastiske by. Med sin historiske atmosfære og moderne faciliteter er dette hotel det perfekte sted for både fritids- og forretningsrejsende.">
  <title>Sikkert hotel med høje gevinster og rangeringsspil</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/AlumniSansCollegiateOne-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Montserrat-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
          <p class="popup__text">
            Vores spil er beregnet til et VOKSENt publikum over 18 år. Klik på Accepteret til
            bekræfte din alder.
          </p>
          <button class="popup__button">Accepteret</button>
        </div>
      </section>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/hero.webp" type="image/webp">
              <img src="./img/hero.jpg" width="336" height="336" alt="Copenhagen Marriott Hotel">
            </picture>
          </div>
          <div class="hero__descr">
            <h1 class="hero__title tt-52-34">
              Copenhagen Marriott Hotel
            </h1>
            <div class="hero__texts">
              <p class="hero__text tx-16-14">
                Copenhagen Marriott Hotel er et luksushotel ideelt beliggende i hjertet af København, og tilbyder
                gæsterne komfortabel indkvartering og en utrolig udsigt over denne fantastiske by. Med sin historiske
                atmosfære og moderne bekvemmeligheder er dette hotel en ideel destination for både ferie- og
                forretningsrejsende.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <div class="about__head">
            <h2 class="about__title tt-52-34">
              Om os
            </h2>
            <p class="about__text about__text_top tx-24-18">
              Lad os fortælle dig lidt om vores hotel
            </p>
          </div>
          <ul class="about__list">
            <li class="about__item">
              <div class="about__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/about-1.webp" type="image/webp">
                  <img src="./img/about-1.jpg" loading="lazy" width="336" height="336" alt="Om os">
                </picture>
              </div>
              <div class="about__descr">
                <div class="about__texts">
                  <p class="about__text tx-16-14">
                    Copenhagen Marriott Hotel ligger få skridt fra historiske bygninger og monumenter som Det Kongelige
                    Teater, Det Kongelige Bibliotek og Nationalmuseet, hvilket giver nem adgang til Københavns mange
                    kulturskatte. Gæsterne kan slentre gennem byens maleriske gader, udforske dens historie og nyde den
                    unikke atmosfære.
                  </p>
                </div>
              </div>
            </li>
            <li class="about__item">
              <div class="about__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/about-2.webp" type="image/webp">
                  <img src="./img/about-2.jpg" loading="lazy" width="336" height="336" alt="Om os">
                </picture>
              </div>
              <div class="about__descr">
                <div class="about__texts">
                  <p class="about__text tx-16-14">
                    Hotellet tilbyder en bred vifte af værelser og suiter, smagfuldt indrettede og udstyret med alle
                    moderne bekvemmeligheder. Store vinduer og altaner i nogle værelser byder på en fantastisk udsigt
                    over Københavns Kanal og den historiske bymidte. Hyggelige senge med blødt sengetøj og rummelige
                    badeværelser skaber en følelse af luksus og hygge.
                  </p>
                </div>
              </div>
            </li>
            <li class="about__item">
              <div class="about__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/about-3.webp" type="image/webp">
                  <img src="./img/about-3.jpg" loading="lazy" width="336" height="336" alt="Om os">
                </picture>
              </div>
              <div class="about__descr">
                <div class="about__texts">
                  <p class="about__text tx-16-14">
                    For gæster, der sætter pris på en aktiv livsstil, har hotellet et fitnesscenter udstyret med
                    topmoderne træningsudstyr og en swimmingpool med en fantastisk udsigt over København. Dette er et
                    fantastisk sted at slappe af efter en dag i byen eller starte morgenen med en energigivende træning.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end about -->

      <!-- start frem -->
      <section class="frem" id="frem">
        <div class="container">
          <h2 class="frem__title tt-52-34">
            Fremhæv
          </h2>
          <div class="frem__content">
            <div class="frem__descr">
              <div class="frem__texts">
                <p class="frem__text tx-16-14">
                  Et af hotellets højdepunkter er dets restauranter og barer. Midtown Grill er stedet for at nyde
                  gourmetbøffer og andet kød tilberedt over åben ild. Dette sted er ideelt for gourmeter og kendere af
                  kvalitetskøkken. Pier 5 er en restaurant med udsigt over havet og Københavns havn, der byder på frisk
                  fisk og skaldyr og skandinavisk køkken. Her kan du ikke kun nyde god mad, men også en smuk udsigt.
                </p>
                <p class="frem__text tx-16-14">
                  Copenhagen Marriott Hotel ligger i gåafstand fra berømte seværdigheder som Amalienborg, den danske
                  dronnings residens, og Den Røde Plads med sine mange butikker og caféer. Gæsterne kan også nemt gå til
                  byens gamle kvarterer, der er berømt for deres arkitektur og traditionelle markeder.
                </p>
              </div>
            </div>
            <ul class="frem__images">
              <li class="frem__image frem__image_1">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/frem-1.webp" type="image/webp">
                  <img src="./img/frem-1.jpg" loading="lazy" width="336" height="336" alt="Fremhæv">
                </picture>
              </li>
              <li class="frem__image frem__image_2">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/frem-2.webp" type="image/webp">
                  <img src="./img/frem-2.jpg" loading="lazy" width="336" height="336" alt="Fremhæv">
                </picture>
              </li>
              <li class="frem__image frem__image_3">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/frem-3.webp" type="image/webp">
                  <img src="./img/frem-3.jpg" loading="lazy" width="336" height="336" alt="Fremhæv">
                </picture>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end frem -->

      <!-- start benefits -->
      <section class="benefits" id="benefits">
        <div class="container">
          <h2 class="benefits__title tt-52-34">
            Fordele
          </h2>
          <ul class="benefits__list">
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon.svg" loading="lazy" width="32" height="32" alt="God morgenmad">
              </div>
              <div class="benefits__texts">
                <p class="benefits__text tx-24-18">
                  God morgenmad
                </p>
              </div>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon.svg" loading="lazy" width="32" height="32" alt="Privat parkering">
              </div>
              <div class="benefits__texts">
                <p class="benefits__text tx-24-18">
                  Privat parkering
                </p>
              </div>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon.svg" loading="lazy" width="32" height="32" alt="Restaurant">
              </div>
              <div class="benefits__texts">
                <p class="benefits__text tx-24-18">
                  Restaurant
                </p>
              </div>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon.svg" loading="lazy" width="32" height="32" alt="Gratis Wi-Fi">
              </div>
              <div class="benefits__texts">
                <p class="benefits__text tx-24-18">
                  Gratis Wi-Fi
                </p>
              </div>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon.svg" loading="lazy" width="32" height="32" alt="Dyr er tilladt">
              </div>
              <div class="benefits__texts">
                <p class="benefits__text tx-24-18">
                  Dyr er tilladt
                </p>
              </div>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon.svg" loading="lazy" width="32" height="32" alt="Ikke-ryger værelser">
              </div>
              <div class="benefits__texts">
                <p class="benefits__text tx-24-18">
                  Ikke-ryger værelser
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end benefits -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>