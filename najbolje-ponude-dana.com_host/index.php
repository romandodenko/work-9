<!DOCTYPE html>
<html lang="hr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title"
    content="Polynesia Plava Laguna je najbolji hotel u Hrvatskoj. Naš je hotel visoko ocijenjen i siguran.">
  <meta property="og:site_name"
    content="Apartmani Polynesia Plava Laguna je turističko naselje smješteno u Poreču u Hrvatskoj.">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title"
    content="Polynesia Plava Laguna je najbolji hotel u Hrvatskoj. Naš je hotel visoko ocijenjen i siguran.">
  <meta name="twitter:description"
    content="Apartmani Polynesia Plava Laguna je turističko naselje smješteno u Poreču u Hrvatskoj.">
  <meta name="description"
    content="Apartmani Polynesia Plava Laguna je turističko naselje smješteno u Poreču u Hrvatskoj.">
  <title>Polynesia Plava Laguna je najbolji hotel u Hrvatskoj. Naš je hotel visoko ocijenjen i siguran.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Lato-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Lato-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
          <p class="popup__text">Naše su igre namijenjene AGE publici starijoj od 18 godina. Kliknite Prihvaćeno da
            potvrdite svoju dob.</p>
          <button class="popup__button">Prihvaćeno</button>
        </div>
      </div>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="container">
          <div class="hero__top">
            <h1 class="hero__title tt-52-32">
              Polynesia Plava Laguna
            </h1>
            <div class="hero__texts">
              <p class="hero__text tx-20-16">
                Apartmani "Polynesia Plava Laguna" je turističko naselje smješteno u Poreču u Hrvatskoj. Evo nekoliko
                općih informacija o ovim apartmanima:
              </p>
            </div>
            <ul class="hero__list">
              <li class="hero__item">
                <a class="hero__link tx-18-14" href="#lokacija">
                  Lokacija
                </a>
              </li>
              <li class="hero__item">
                <a class="hero__link tx-18-14" href="#smještaj">
                  Smještaj
                </a>
              </li>
              <li class="hero__item">
                <a class="hero__link tx-18-14" href="#sadržaji">
                  Sadržaji
                </a>
              </li>
              <li class="hero__item">
                <a class="hero__link tx-18-14" href="#plaža">
                  Plaža
                </a>
              </li>
              <li class="hero__item">
                <a class="hero__link tx-18-14" href="#ishrana">
                  Ishrana
                </a>
              </li>
              <li class="hero__item">
                <a class="hero__link tx-18-14" href="#aktivnosti">
                  Aktivnosti
                </a>
              </li>
              <li class="hero__item">
                <a class="hero__link tx-18-14" href="#zabava">
                  Zabava
                </a>
              </li>
              <li class="hero__item">
                <a class="hero__link tx-18-14" href="#atrakcije">
                  Atrakcije
                </a>
              </li>
            </ul>
          </div>
          <div class="hero__bottom">
            <ul class="hero__images">
              <li class="hero__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hero-1.webp" type="image/webp">
                  <img src="./img/hero-1.jpg" width="704" height="400" alt="Polynesia Plava Laguna">
                </picture>
              </li>
              <li class="hero__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hero-2.webp" type="image/webp">
                  <img src="./img/hero-2.jpg" width="704" height="400" alt="Polynesia Plava Laguna">
                </picture>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title tt-42-26">
            O hotelu
          </h2>
          <ul class="about__list">
            <li class="about__item" id="lokacija">
              <div class="about__descr">
                <h3 class="about__subtitle tt-28-20">
                  Lokacija
                </h3>
                <div class="about__texts">
                  <p class="about__text tx-20-16">
                    Polynesia Apartmani Plava Laguna nalaze se na jadranskoj obali, što ih čini izvrsnim mjestom za
                    odmor na plaži i aktivnosti na plaži.
                  </p>
                </div>
              </div>
              <div class="about__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/lokaciya.webp" type="image/webp">
                  <img src="./img/lokaciya.jpg" loading="lazy" width="500" height="500" alt="Lokacija">
                </picture>
              </div>
            </li>
            <li class="about__item" id="smještaj">
              <div class="about__descr">
                <h3 class="about__subtitle tt-28-20">
                  Smještaj
                </h3>
                <div class="about__texts">
                  <p class="about__text tx-20-16">
                    Ovaj kompleks nudi razne apartmane i bungalove za smještaj gostiju. Apartmani su obično opremljeni
                    svim potrebnim sadržajima kako bi se gosti osjećali kao kod kuće.
                  </p>
                </div>
              </div>
              <div class="about__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/razmewenie.webp" type="image/webp">
                  <img src="./img/razmewenie.png" loading="lazy" width="500" height="500" alt="Smještaj">
                </picture>
              </div>
            </li>
            <li class="about__item" id="sadržaji">
              <div class="about__descr">
                <h3 class="about__subtitle tt-28-20">
                  Sadržaji
                </h3>
                <div class="about__texts">
                  <p class="about__text tx-20-16">
                    Polynesia Plava Laguna može ponuditi širok raspon sadržaja uključujući restorane, barove, bazene,
                    igrališta, teniske terene i druge zabavne i sportske aktivnosti.
                  </p>
                </div>
              </div>
              <div class="about__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/ydobstva.webp" type="image/webp">
                  <img src="./img/ydobstva.png" loading="lazy" width="500" height="500" alt="Sadržaji">
                </picture>
              </div>
            </li>
            <li class="about__item" id="plaža">
              <div class="about__descr">
                <h3 class="about__subtitle tt-28-20">
                  Plaža
                </h3>
                <div class="about__texts">
                  <p class="about__text tx-20-16">
                    Kompleks ima pristup vlastitoj plaži s ležaljkama i suncobranima, što gostima omogućuje uživanje u
                    moru i suncu.
                  </p>
                </div>
              </div>
              <div class="about__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/plyaj.webp" type="image/webp">
                  <img src="./img/plyaj.jpg" loading="lazy" width="500" height="500" alt="Plaža">
                </picture>
              </div>
            </li>
            <li class="about__item" id="ishrana">
              <div class="about__descr">
                <h3 class="about__subtitle tt-28-20">
                  Ishrana
                </h3>
                <div class="about__texts">
                  <p class="about__text tx-20-16">
                    Ishrana: Ovisno o tipu rezervacije, gosti mogu birati između vlastite prehrane u apartmanu ili
                    polupansiona ili all inclusive.
                  </p>
                </div>
              </div>
              <div class="about__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/eda.webp" type="image/webp">
                  <img src="./img/eda.jpg" loading="lazy" width="500" height="500" alt="Ishrana">
                </picture>
              </div>
            </li>
            <li class="about__item" id="aktivnosti">
              <div class="about__descr">
                <h3 class="about__subtitle tt-28-20">
                  Aktivnosti
                </h3>
                <div class="about__texts">
                  <p class="about__text tx-20-16">
                    U blizini Polynesia Plava Laguna postoje razne aktivnosti i aktivnosti kao što su vodeni sportovi,
                    šetnje, izleti i još mnogo toga.
                  </p>
                </div>
              </div>
              <div class="about__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/meropriyatiya.webp" type="image/webp">
                  <img src="./img/meropriyatiya.png" loading="lazy" width="500" height="500" alt="Aktivnosti">
                </picture>
              </div>
            </li>
            <li class="about__item" id="zabava">
              <div class="about__descr">
                <h3 class="about__subtitle tt-28-20">
                  Zabava
                </h3>
                <div class="about__texts">
                  <p class="about__text tx-20-16">
                    U sklopu kompleksa Plava laguna gosti mogu sudjelovati u raznim zabavnim sadržajima koji se
                    organiziraju unutar resorta.
                  </p>
                </div>
              </div>
              <div class="about__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/razvlecheniya.webp" type="image/webp">
                  <img src="./img/razvlecheniya.jpg" loading="lazy" width="500" height="500" alt="Zabava">
                </picture>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end  about-->

      <!-- start dosp -->
      <section class="dosp" id="atrakcije">
        <div class="container">
          <h2 class="dosp__title tt-42-26">
            Atrakcije
          </h2>
          <ul class="dosp__list">
            <li class="dosp__item">
              <div class="dosp__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/porec.webp" type="image/webp">
                  <img src="./img/porec.jpg" loading="lazy" width="500" height="500" alt="Stari grad Poreč">
                </picture>
              </div>
              <div class="dosp__descr">
                <h3 class="dosp__subtitle tt-28-20">
                  Stari grad Poreč
                </h3>
                <div class="dosp__texts">
                  <p class="dosp__text tx-18-14">
                    Stari grad Poreč nudi obilje povijesnih ulica, ugodnih restorana i kulturnih znamenitosti. Svakako
                    posjetite Effel Tower i Saint Moors.
                  </p>
                </div>
              </div>
            </li>
            <li class="dosp__item">
              <div class="dosp__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/bazilika.webp" type="image/webp">
                  <img src="./img/bazilika.jpg" loading="lazy" width="500" height="500" alt="Eufrazijeva bazilika">
                </picture>
              </div>
              <div class="dosp__descr">
                <h3 class="dosp__subtitle tt-28-20">
                  Eufrazijeva bazilika
                </h3>
                <div class="dosp__texts">
                  <p class="dosp__text tx-18-14">
                    Ova veličanstvena bizantska crkva, UNESCO-va svjetska baština, važno je povijesno mjesto.
                  </p>
                </div>
              </div>
            </li>
            <li class="dosp__item">
              <div class="dosp__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/lime.webp" type="image/webp">
                  <img src="./img/lime.jpg" loading="lazy" width="500" height="500" alt="Kanjon Lime">
                </picture>
              </div>
              <div class="dosp__descr">
                <h3 class="dosp__subtitle tt-28-20">
                  Kanjon Lime
                </h3>
                <div class="dosp__texts">
                  <p class="dosp__text tx-18-14">
                    Ovo je prekrasno mjesto s klancem obrubljenim zelenilom gdje možete planinariti i uživati ​​u
                    krajoliku.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end dosp -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>