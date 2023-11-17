<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title"
    content="Platinia din România este unul dintre cele mai bune, noi și fierbinți hoteluri din regiune.">
  <meta property="og:site_name"
    content="Hotel Platinia oferă o gamă largă de camere, de la standard la apartamente, toate echipate modern și frumos decorate pentru a se potrivi nevoilor oaspeților.">
  <meta name="twitter:title"
    content="Platinia din România este unul dintre cele mai bune, noi și fierbinți hoteluri din regiune.">
  <meta name="twitter:description"
    content="Hotel Platinia oferă o gamă largă de camere, de la standard la apartamente, toate echipate modern și frumos decorate pentru a se potrivi nevoilor oaspeților.">
  <meta name="description"
    content="Hotel Platinia oferă o gamă largă de camere, de la standard la apartamente, toate echipate modern și frumos decorate pentru a se potrivi nevoilor oaspeților.">
  <title>Platinia din România este unul dintre cele mai bune, noi și fierbinți hoteluri din regiune.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/HelveticaNeueCyrRoman-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Raleway-Bold.woff2" as="font" type="font/woff2" crossorigin>
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
          <p class="popup__text">Jocurile noastre sunt destinate unui public ADULT de peste 18 ani. Clic
            Acceptat pentru a vă confirma vârsta.</p>
          <button class="popup__button">Admis</button>
        </div>
      </div>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__descr">
            <div class="hero__subtitle tt-31-26">
              Bine ati venit
            </div>
            <h1 class="hero__title tt-64-50">
              Hotel Platinia
            </h1>
            <div class="hero__texts">
              <p class="hero__text tx-17">
                Hotel Platinia din Romania reprezinta combinatia perfecta intre lux, inovatie si satisfacerea celor mai
                sofisticate nevoi ale oaspetilor.
              </p>
            </div>
          </div>
          <div class="hero__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/hero.webp" type="image/webp">
              <img src="./img/hero.jpg" width="336" height="336" alt="Hotel Platinia">
            </picture>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start restaurant -->
      <section class="restaurant" id="restaurant">
        <div class="container">
          <div class="restaurant__head">
            <h2 class="restaurant__title tt-53-46">
              Restaurant
            </h2>
            <div class="restaurant__subtitle tx-22">
              RESTAURANT AMAGUSTO – BUCĂTARE ITALIANĂ
            </div>
          </div>
          <div class="restaurant__content">
            <div class="restaurant__left">
              <div class="restaurant__texts">
                <p class="restaurant__text tx-17">
                  Restaurantul de la Hotel Platinia din Romania este destinatia ideala pentru cei care cauta cea mai
                  buna experienta culinara. Combinația dintre cele mai recente tendințe și serviciul personalizat îl
                  face alegerea ideală pentru oaspeții care doresc să se bucure de o călătorie gastronomică.
                </p>
                <p class="restaurant__text tx-17">
                  Aici vă puteți bucura de cele mai rafinate mâncăruri preparate din ingrediente proaspete de cea mai
                  înaltă calitate. Bucătarul restaurantului face față cu ușurință oricărei, chiar și celor mai complexe
                  sarcini culinare și oferă preparate care par să se topească în gură din prospețime și o combinație
                  unică de arome.
                </p>
              </div>
            </div>
            <ul class="restaurant__images">
              <li class="restaurant__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/rest-1.webp" type="image/webp">
                  <img src="./img/rest-1.jpg" loading="lazy" width="336" height="336" alt="Restaurant">
                </picture>
              </li>
              <li class="restaurant__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/rest-2.webp" type="image/webp">
                  <img src="./img/rest-2.jpg" loading="lazy" width="336" height="336" alt="Restaurant">
                </picture>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end restaurant -->

      <!-- start serviciu -->
      <section class="serviciu" id="serviciu">
        <div class="container">
          <h2 class="serviciu__title tt-53-46">
            Serviciu
          </h2>
          <ul class="serviciu__list">
            <li class="serviciu__item">
              <div class="serviciu__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/serviciu-1.webp" type="image/webp">
                  <img src="./img/serviciu-1.jpg" loading="lazy" width="336" height="336" alt="Concierge">
                </picture>
              </div>
              <div class="serviciu__descr">
                <div class="serviciu__subtitle tt-31-26">
                  Concierge
                </div>
                <div class="serviciu__texts">
                  <p class="serviciu__text tx-17">
                    Serviciul de concierge de la Hotel Platinia din România este unul dintre cele mai bune și noi
                    servicii pe care le oferă hotelul. Concierge-ul nostru este o soluție fierbinte pentru toate nevoile
                    și solicitările dumneavoastră.
                  </p>
                </div>
              </div>
            </li>
            <li class="serviciu__item">
              <div class="serviciu__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/serviciu-2.webp" type="image/webp">
                  <img src="./img/serviciu-2.jpg" loading="lazy" width="336" height="336" alt="Mic dejun">
                </picture>
              </div>
              <div class="serviciu__descr">
                <div class="serviciu__subtitle tt-31-26">
                  Mic dejun
                </div>
                <div class="serviciu__texts">
                  <p class="serviciu__text tx-17">
                    Restaurantul de la Hotel Platinia din Romania ofera mic dejun care poate fi descris ca fiind cel mai
                    bun, nou si cald.
                  </p>
                </div>
              </div>
            </li>
            <li class="serviciu__item">
              <div class="serviciu__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/serviciu-3.webp" type="image/webp">
                  <img src="./img/serviciu-3.jpg" loading="lazy" width="336" height="336" alt="Room service">
                </picture>
              </div>
              <div class="serviciu__descr">
                <div class="serviciu__subtitle tt-31-26">
                  Room service
                </div>
                <div class="serviciu__texts">
                  <p class="serviciu__text tx-17">
                    Serviciul de concierge de la Hotel Platinia din România este unul dintre cele mai bune și noi
                    servicii pe care le oferă hotelul. Concierge-ul nostru este o soluție fierbinte pentru toate nevoile
                    și solicitările dumneavoastră.
                  </p>
                </div>
              </div>
            </li>
            <li class="serviciu__item">
              <div class="serviciu__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/serviciu-4.webp" type="image/webp">
                  <img src="./img/serviciu-4.jpg" loading="lazy" width="336" height="336"
                    alt="Pranz sau cina individual">
                </picture>
              </div>
              <div class="serviciu__descr">
                <div class="serviciu__subtitle tt-31-26">
                  Pranz sau cina individual
                </div>
                <div class="serviciu__texts">
                  <p class="serviciu__text tx-17">
                    Hotelul nostru Platinia din România oferă cele mai bune servicii de room service pentru a asigura
                    oaspeților noștri un sejur confortabil și memorabil.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end serviciu -->

      <!-- start dezvaluire -->
      <section class="dezvaluire" id="dezvaluire">
        <div class="container">
          <h2 class="dezvaluire__title tt-53-46">
            Dezvăluire
          </h2>
          <ul class="dezvaluire__list">
            <li class="dezvaluire__item dezvaluire__item_1">
              <div class="dezvaluire__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/dez-1.webp" type="image/webp">
                  <img src="./img/dez-1.jpg" loading="lazy" width="336" height="336"
                    alt="SUITE EXECUTIVE CU UN DORMITOR ">
                </picture>
              </div>
              <div class="dezvaluire__descr">
                <div class="dezvaluire__subtitle tx-22">
                  SUITE EXECUTIVE CU UN DORMITOR
                </div>
              </div>
            </li>
            <li class="dezvaluire__item dezvaluire__item_2">
              <div class="dezvaluire__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/dez-2.webp" type="image/webp">
                  <img src="./img/dez-2.jpg" loading="lazy" width="336" height="336" alt="SUITA DE FAMILIE">
                </picture>
              </div>
              <div class="dezvaluire__descr">
                <div class="dezvaluire__subtitle tx-22">
                  SUITA DE FAMILIE
                </div>
              </div>
            </li>
            <li class="dezvaluire__item dezvaluire__item_3">
              <div class="dezvaluire__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/dez-3.webp" type="image/webp">
                  <img src="./img/dez-3.jpg" loading="lazy" width="336" height="336" alt="SUITE DE COLT CU UN DORMITOR">
                </picture>
              </div>
              <div class="dezvaluire__descr">
                <div class="dezvaluire__subtitle tx-22">
                  SUITE DE COLT CU UN DORMITOR
                </div>
              </div>
            </li>
            <li class="dezvaluire__item dezvaluire__item_4">
              <div class="dezvaluire__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/dez-4.webp" type="image/webp">
                  <img src="./img/dez-4.jpg" loading="lazy" width="336" height="336" alt="APARTAMENT PREZIDENTIAL ">
                </picture>
              </div>
              <div class="dezvaluire__descr">
                <div class="dezvaluire__subtitle tx-22">
                  APARTAMENT PREZIDENTIAL
                </div>
              </div>
            </li>
            <li class="dezvaluire__item dezvaluire__item_5">
              <div class="dezvaluire__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/dez-5.webp" type="image/webp">
                  <img src="./img/dez-5.jpg" loading="lazy" width="336" height="336" alt="PENTHOUSE">
                </picture>
              </div>
              <div class="dezvaluire__descr">
                <div class="dezvaluire__subtitle tx-22">
                  PENTHOUSE
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end dezvaluire -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>