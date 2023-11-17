<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="A Clark Hotel Budapest méltán nevezhető az egyik legjobb szállodának.">
  <meta property="og:site_name"
    content="A város szívében található szálloda páratlan kényelmet kínál, ötvözi az ősi építészetet. A Clark Budapest kiváló szolgáltatások széles skáláját kínálja vendégeinek.">
  <meta name="twitter:title" content="A Clark Hotel Budapest méltán nevezhető az egyik legjobb szállodának.">
  <meta name="twitter:description"
    content="A város szívében található szálloda páratlan kényelmet kínál, ötvözi az ősi építészetet. A Clark Budapest kiváló szolgáltatások széles skáláját kínálja vendégeinek.">
  <meta name="description"
    content="A város szívében található szálloda páratlan kényelmet kínál, ötvözi az ősi építészetet. A Clark Budapest kiváló szolgáltatások széles skáláját kínálja vendégeinek.">
  <title>A Clark Hotel Budapest méltán nevezhető az egyik legjobb szállodának.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Lato-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Literata-Bold.woff2" as="font" type="font/woff2" crossorigin>
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
            Játékainkat 18 éven felüli FELNŐTT közönségnek szánjuk. Életkorának megerősítéséhez kattintson az Elfogadott
            gombra.
          </p>
          <button class="popup__button">Elfogadott</button>
        </div>
      </section>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/hero.webp" type="image/webp">
              <img src="./img/hero.jpg" width="300" height="300" alt=" Clark Budapest">
            </picture>
          </div>
          <div class="hero__descr">
            <div class="hero__text tx-23">
              Csak felnőtteknek
            </div>
            <h1 class="hero__title tt-64-46">
              Clark Budapest
            </h1>
            <div class="hero__texts">
              <p class="hero__text tx-18-16">
                A Clark Budapest Magyarország egyik legjobb szállodája a legjobb szolgáltatásokkal és szolgáltatásokkal.
                Budapest szívében található, felejthetetlen élményt nyújt vendégeinek.
              </p>
            </div>
            <a class="hero__link but-131" href="#aboet">
              Szállodai szobák
            </a>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start aboet -->
      <section class="aboet" id="aboet">
        <div class="container">
          <h2 class="aboet__title tt-53-40">
            Szállodai szobák
          </h2>
          <div class="aboet__content">
            <ul class="aboet__images">
              <li class="aboet__image aboet__image_1">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/about-1.webp" type="image/webp">
                  <img src="./img/about-1.jpg" loading="lazy" width="300" height="300" alt="Szállodai szobák">
                </picture>
              </li>
              <li class="aboet__image aboet__image_2">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/about-2.webp" type="image/webp">
                  <img src="./img/about-2.jpg" loading="lazy" width="300" height="300" alt="Szállodai szobák">
                </picture>
              </li>
            </ul>
            <div class="aboet__descr">
              <div class="aboet__subtitle tt-31-28">
                ROMANTIKUS kiruccanás
              </div>
              <div class="aboet__texts">
                <p class="aboet__text tx-18-16">
                  A Clark Budapest az egyik legjobb úti cél egy romantikus nyaraláshoz Magyarországon, a legjobb
                  szolgáltatásokkal és szolgáltatásokkal. Ez a szálloda pároknak kínál lehetőséget arra, hogy
                  felejthetetlen tartózkodást élvezzenek egy luxus és romantikus légkörben.
                </p>
                <p class="aboet__text tx-18-16">
                  A Clark Budapest által kínált legjobb szobák némelyike ​​kifejezetten romantikus kiruccanásokhoz
                  készült. Elegáns dizájnjuk, csúcsminőségű felszerelésük és figyelmes kiszolgálásuk romantikus és
                  pihentető légkört teremtenek. A vendégek élvezhetik az ablakokból nyíló vonzó természeti kilátást és a
                  kényelmet, amely otthonosságot és nyugalmat teremt.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end aboet -->

      <!-- start holet -->
      <section class="holet" id="holet">
        <div class="container">
          <h2 class="holet__title tt-53-40">
            Hotel number
          </h2>
          <ul class="holet__list">
            <li class="holet__item">
              <div class="holet__top">
                <div class="holet__image">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/hotel-1.webp" type="image/webp">
                    <img src="./img/hotel-1.jpg" loading="lazy" width="300" height="300" alt="CLARK SUITE">
                  </picture>
                </div>
                <div class="holet__subtitle tx-23">
                  CLARK SUITE
                </div>
              </div>
              <ul class="holet__sublist">
                <li class="holet__subitem tx-18-16">
                  40-45 m2
                </li>
                <li class="holet__subitem tx-18-16">
                  Ágy 180 cm x 200 cm
                </li>
                <li class="holet__subitem tx-18-16">
                  Zuhanyzó és szabadon álló fürdőkád
                </li>
              </ul>
              <div class="holet__texts">
                <p class="holet__text tx-18-16">
                  A Clark Budapest Hotel Clark lakosztálya az egyik legjobb szoba Magyarországon. Ez a fényűző
                  lakosztály páratlan kényelmet és felszereltséget kínál vendégeinek.
                </p>
              </div>
            </li>
            <li class="holet__item">
              <div class="holet__top">
                <div class="holet__image">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/hotel-2.webp" type="image/webp">
                    <img src="./img/hotel-2.jpg" loading="lazy" width="300" height="300" alt="LÁNCHÍD STÚDIÓ">
                  </picture>
                </div>
                <div class="holet__subtitle tx-23">
                  LÁNCHÍD STÚDIÓ
                </div>
              </div>
              <ul class="holet__sublist">
                <li class="holet__subitem tx-18-16">
                  30-35 m2
                </li>
                <li class="holet__subitem tx-18-16">
                  Ágy 180 cm x 200 cm
                </li>
                <li class="holet__subitem tx-18-16">
                  Nagy dupla ablakok, kilátással a Dunára és a Lánchídra
                </li>
              </ul>
              <div class="holet__texts">
                <p class="holet__text tx-18-16">
                  A stúdióban tágas hálószoba található kényelmes ággyal és elegáns bútorokkal.
                </p>
              </div>
            </li>
            <li class="holet__item">
              <div class="holet__top">
                <div class="holet__image">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/hotel-3.webp" type="image/webp">
                    <img src="./img/hotel-3.jpg" loading="lazy" width="300" height="300" alt="VÁRRAKÉSZÍTŐ SZOBA">
                  </picture>
                </div>
                <div class="holet__subtitle tx-23">
                  VÁRRAKÉSZÍTŐ SZOBA
                </div>
              </div>
              <ul class="holet__sublist">
                <li class="holet__subitem tx-18-16">
                  24,2 m2
                </li>
                <li class="holet__subitem tx-18-16">
                  Ágy 180 cm x 200 cm
                </li>
                <li class="holet__subitem tx-18-16">
                  Kilátás a Clark Ádám térre és a Budai Várra
                </li>
              </ul>
              <div class="holet__texts">
                <p class="holet__text tx-18-16">
                  A magyarországi Clark Hotel Budapest Várra néző szobája az egyik legjobb hely, ahol megszállhat, és
                  gyönyörködhet a híres Budai Várra nyíló gyönyörű kilátásban.
                </p>
              </div>
            </li>
            <li class="holet__item">
              <div class="holet__top">
                <div class="holet__image">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/hotel-4.webp" type="image/webp">
                    <img src="./img/hotel-4.jpg" loading="lazy" width="300" height="300" alt="DUNARA KÍVÓ SZOBA ">
                  </picture>
                </div>
                <div class="holet__subtitle tx-23">
                  DUNARA KÍVÓ SZOBA
                </div>
              </div>
              <ul class="holet__sublist">
                <li class="holet__subitem tx-18-16">
                  19 m2
                </li>
                <li class="holet__subitem tx-18-16">
                  Zuhanyzó vagy fürdőkád
                </li>
                <li class="holet__subitem tx-18-16">
                  King (180 cm x 200 cm)
                </li>
                <li class="holet__subitem tx-18-16">
                  Kilátás a Dunára és a Lánchídra
                </li>
              </ul>
              <div class="holet__texts">
                <p class="holet__text tx-18-16">
                  A Clark Budapest Hotel szobái jellemzően tágas elrendezésűek, elegáns belső terekkel és modern
                  felszereltséggel.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end holet -->

      <!-- start gallery -->
      <section class="gallery" id="gallery">
        <div class="container">
          <h2 class="gallery__title tt-53-40">
            Képtár
          </h2>
          <ul class="gallery__images">
            <li class="gallery__image gallery__image_1">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-1.webp" type="image/webp">
                <img src="./img/gallery-1.jpg" loading="lazy" width="300" height="300" alt="Képtár">
              </picture>
            </li>
            <li class="gallery__image gallery__image_2">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-2.webp" type="image/webp">
                <img src="./img/gallery-2.jpg" loading="lazy" width="300" height="300" alt="Képtár">
              </picture>
            </li>
            <li class="gallery__image gallery__image_3">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-3.webp" type="image/webp">
                <img src="./img/gallery-3.jpg" loading="lazy" width="300" height="300" alt="Képtár">
              </picture>
            </li>
            <li class="gallery__image gallery__image_4">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-4.webp" type="image/webp">
                <img src="./img/gallery-4.jpg" loading="lazy" width="300" height="300" alt="Képtár">
              </picture>
            </li>
            <li class="gallery__image gallery__image_5">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-5.webp" type="image/webp">
                <img src="./img/gallery-5.jpg" loading="lazy" width="300" height="300" alt="Képtár">
              </picture>
            </li>
            <li class="gallery__image gallery__image_6">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/gallery-6.webp" type="image/webp">
                <img src="./img/gallery-6.jpg" loading="lazy" width="300" height="300" alt="Képtár">
              </picture>
            </li>
          </ul>
        </div>
      </section>
      <!-- end gallery -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>