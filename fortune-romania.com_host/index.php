<!DOCTYPE html>
<html lang="ro">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Hotel magnific cu vederi frumoase și cazare sigură.">
  <meta property="og:site_name"
    content="Este un hotel și o reședință modernă, situată pe malul Mării Negre, în stațiunea Mamaia, România. Această stațiune oferă o varietate de facilități și oportunități de vacanță">
  <meta name="twitter:title" content="Hotel magnific cu vederi frumoase și cazare sigură.">
  <meta name="twitter:description"
    content="Este un hotel și o reședință modernă, situată pe malul Mării Negre, în stațiunea Mamaia, România. Această stațiune oferă o varietate de facilități și oportunități de vacanță">
  <meta name="description"
    content="Este un hotel și o reședință modernă, situată pe malul Mării Negre, în stațiunea Mamaia, România. Această stațiune oferă o varietate de facilități și oportunități de vacanță">
  <title>Hotel magnific cu vederi frumoase și cazare sigură.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/DelaGothicOne-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Merriweather-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
        <div class="container">
          <h1 class="hero__title tt-52-36">
            Arena Regia Hotel & Spa <span>Marina Regia Residence</span>
          </h1>
          <div class="hero__texts">
            <p class="hero__text tx-22-18">
              Este un hotel și o reședință modernă, situată pe malul Mării Negre, în stațiunea Mamaia, România. Această
              stațiune oferă o varietate de facilități și oportunități de vacanță
            </p>
            <p class="hero__text tx-22-18">
              Vă oferim posibilitatea de a vă bucura de o vacanță în stațiune pe malul Mării Negre, cu facilități
              moderne și multă divertisment. Potrivit atât pentru familii, cât și pentru călători, acest loc este ideal
              pentru cei care caută relaxare și o varietate de divertisment.
            </p>
          </div>
          <ul class="hero__images">
            <li class="hero__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/hero-1.webp" type="image/webp">
                <img src="./img/hero-1.jpg" width="300" height="300"
                  alt="Arena Regia Hotel & Spa Marina Regia Residence">
              </picture>
            </li>
            <li class="hero__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/hero-2.webp" type="image/webp">
                <img src="./img/hero-2.jpg" width="300" height="300"
                  alt="Arena Regia Hotel & Spa Marina Regia Residence">
              </picture>
            </li>
          </ul>
        </div>
      </section>
      <!-- end hero -->

      <!-- start locar -->
      <section class="locar" id="locar">
        <div class="container">
          <h2 class="locar__title tt-46-32">
            Locație
          </h2>
          <div class="locar__content">
            <div class="locar__texts">
              <p class="locar__text tx-16-14">
                Hotelul Arena Regia este situat în zona stațiunii Mamaia, ceea ce îl face o locație ideală pentru
                vacanțe pe plajă și divertisment pe litoralul Mării Negre.
              </p>
              <p class="locar__text tx-16-14">
                Hotelul pune la dispoziție camere și apartamente confortabile, cu facilități moderne. Apartamentele
                includ, de obicei, bucătării complet echipate și zone de living.
              </p>
              <p class="locar__text tx-16-14">
                Hotelul oferă un centru spa unde oaspeții se pot bucura de masaje și tratamente de wellness. Există, de
                asemenea, un centru de fitness pentru exerciții fizice și menținerea în formă.
              </p>
            </div>
            <div class="locar__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/resp-1.webp" type="image/webp">
                <img src="./img/resp-1.jpg" loading="lazy" width="300" height="300" alt=" Locație">
              </picture>
            </div>
          </div>
        </div>
      </section>
      <!-- end locar -->

      <!-- start rester -->
      <section class="rester" id="rester">
        <div class="container">
          <h2 class="rester__title tt-46-32">
            Restaurante
          </h2>
          <div class="rester__content">
            <div class="rester__descr">
              <p class="rester__text tx-16-14">
                Hotelul are restaurante care servesc o varietate de bucătării, inclusiv locale și internaționale.
                Barurile oferă o varietate de băuturi și cocktailuri.
              </p>
            </div>
            <ul class="rester__images">
              <li class="rester__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/eda-1.webp" type="image/webp">
                  <img src="./img/eda-1.jpg" loading="lazy" width="300" height="300" alt="Restaurante">
                </picture>
              </li>
              <li class="rester__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/eda-2.webp" type="image/webp">
                  <img src="./img/eda-2.jpg" loading="lazy" width="300" height="300" alt="Restaurante">
                </picture>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end rester -->

      <!-- start event -->
      <section class="event" id="event">
        <div class="container">
          <h2 class="event__title tt-46-32">
            Divertisment
          </h2>
          <ul class="event__texts">
            <li class="event__texts-item">
              <p class="event__text tx-16-14">
                Zona stațiunii Mamaia găzduiește numeroase baruri, restaurante și cluburi de noapte, ceea ce o face o
                destinație pitorească și populară pentru divertisment.
              </p>
            </li>
            <li class="event__texts-item">
              <p class="event__text tx-16-14">
                Arena Regia este potrivită pentru vacanțe în familie, iar pentru oaspeții mai tineri pot fi oferite
                facilități suplimentare și divertisment.
              </p>
            </li>
            <li class="event__texts-item">
              <p class="event__text tx-16-14">
                Arena Regia oferă o piscină în aer liber, unde oaspeții pot înota și se pot relaxa.
              </p>
            </li>
          </ul>
          <ul class="event__images">
            <li class="event__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/event-1.webp" type="image/webp">
                <img src="./img/event-1.jpg" loading="lazy" width="300" height="300" alt="Divertisment">
              </picture>
            </li>
            <li class="event__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/event-2.webp" type="image/webp">
                <img src="./img/event-2.jpg" loading="lazy" width="300" height="300" alt="Divertisment">
              </picture>
            </li>
          </ul>
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