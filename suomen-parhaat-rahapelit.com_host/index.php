<!DOCTYPE html>
<html lang="fi">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title"
    content="Odotamme sinua Hotelli Kämpissä, jossa uusin ja paras palvelu, korkeat arvosanat ja huomio yksityiskohtiin tekevät vierailustasi unohtumattoman!">
  <meta property="og:site_name"
    content="Tervetuloa Suomen uusimpaan ja ensimmäiseen Hotelli Kämpiin! Olemme ylpeitä hotellimme korkeasta arvosanasta, mikä johtuu erinomaisesta palvelustamme ja huomiosta yksityiskohtiin.">
  <meta name="twitter:title"
    content="Odotamme sinua Hotelli Kämpissä, jossa uusin ja paras palvelu, korkeat arvosanat ja huomio yksityiskohtiin tekevät vierailustasi unohtumattoman!">
  <meta name="twitter:description"
    content="Tervetuloa Suomen uusimpaan ja ensimmäiseen Hotelli Kämpiin! Olemme ylpeitä hotellimme korkeasta arvosanasta, mikä johtuu erinomaisesta palvelustamme ja huomiosta yksityiskohtiin.">
  <meta name="description"
    content="Tervetuloa Suomen uusimpaan ja ensimmäiseen Hotelli Kämpiin! Olemme ylpeitä hotellimme korkeasta arvosanasta, mikä johtuu erinomaisesta palvelustamme ja huomiosta yksityiskohtiin.">
  <title>Odotamme sinua Hotelli Kämpissä, jossa uusin ja paras palvelu, korkeat arvosanat ja huomio yksityiskohtiin
    tekevät vierailustasi unohtumattoman!</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/ShareTechMono-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/CutiveMono-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
            Pelimme on tarkoitettu yli 18-vuotiaille aikuisille. Klikkaa Hyväksytty
            vahvista ikäsi.
          </p>
          <button class="popup__button">Hyväksytty</button>
        </div>
      </section>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero rd-upload">
        <div class="hero__container container">
          <div class="hero__descr">
            <h1 class="hero__title tt-52-34">
              Hotel Kämp
            </h1>
            <div class="hero__texts">
              <p class="hero__text tx-24-18">
                Tervetuloa Suomen uusimpaan ja ensimmäiseen Hotelli Kämpiin! Olemme ylpeitä hotellimme korkeasta
                arvosanasta, mikä johtuu erinomaisesta palvelustamme ja huomiosta yksityiskohtiin.
              </p>
            </div>
          </div>
          <div class="hero__image">
            <img src="." data-rd-image="./img/hero.jpg" data-rd-image-webp="./img/hero.webp" width="336" height="336"
              alt="Hotel Kämp">
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start numero  -->
      <section class="numerot rd-upload" id="numerot">
        <div class="container">
          <h2 class="numerot__title tt-42-30">
            Hotellihuoneet
          </h2>
          <ul class="numerot__list">
            <li class="numerot__item">
              <div class="numerot__image">
                <img src="." data-rd-image="./img/hotel-1.jpg" data-rd-image-webp="./img/hotel-1.webp" width="336"
                  height="336" alt="Hotellihuoneet">
              </div>
              <div class="numerot__texts">
                <p class="numerot__text tx-24-18">
                  Hotelli Kämpin huoneet ovat täydellinen yhdistelmä mukavuutta ja ylellisyyttä. Jokainen huone on
                  tyylikkäästi sisustettu ja varustettu kaikilla tarvittavilla mukavuuksilla. Voit nauttia hotellin
                  tilasta ja mukavuudesta ja palata tänne iloisena aktiivisen päivän jälkeen.
                </p>
              </div>
            </li>
            <li class="numerot__item">
              <div class="numerot__image">
                <img src="." data-rd-image="./img/hotel-2.jpg" data-rd-image-webp="./img/hotel-2.webp" width="336"
                  height="336" alt="Hotellihuoneet">
              </div>
              <div class="numerot__texts">
                <p class="numerot__text tx-24-18">
                  Tarjoamme sinulle laajan valikoiman ravintoloita ja baareja. Pääravintolamme on tunnettu erinomaisesta
                  keittiöstään ja ainutlaatuisesta tunnelmastaan, jossa voit nauttia gourmet-lounaan tai -illallisen.
                  Hotellin baarit tarjoavat laajan valikoiman juomia, mukaan lukien klassisia cocktaileja ja
                  lahjakkaiden baarimikoidemme valmistamia eksklusiivisia vaihtoehtoja.
                </p>
              </div>
            </li>
            <li class="numerot__item">
              <div class="numerot__image">
                <img src="." data-rd-image="./img/hotel-3.jpg" data-rd-image-webp="./img/hotel-3.webp" width="336"
                  height="336" alt="Hotellihuoneet">
              </div>
              <div class="numerot__texts">
                <p class="numerot__text tx-24-18">
                  Hotelli Kämpissä järjestetään aina erilaisia ​​tapahtumia muotinäytöksistä huippumuusikoiden
                  konsertteihin. Voit nauttia kulttuuritapahtumista aivan hotellissamme ilman, että sinun tarvitsee
                  matkustaa kauas oman huoneen mukavuudesta.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end numerot -->

      <!-- start kunt -->
      <section class="kunt rd-upload" id="kunt">
        <div class="container">
          <h2 class="kunt__title tt-42-30">
            Kuntoilu ja kylpylä
          </h2>
          <div class="kunt__texts">
            <p class="kunt__text tx-24-18">
              Asiakkaamme voivat myös hyödyntää kuntokeskus- ja kylpyläpalveluita. Kuntokeskus on varustettu
              huippumoderneilla laitteilla, joiden avulla pysyt kunnossa myös lomalla. Spa tarjoaa rentoutushoitoja ja
              ammattimaisia ​​hierontoja, jotka tarjoavat sinulle täydelliset rentoutumis- ja hyvinvointiedut.
            </p>
          </div>
          <div class="kunt__image">
            <img src="." data-rd-image="./img/fitness.jpg" data-rd-image-webp="./img/fitness.webp" width="336"
              height="336" alt="Kuntoilu ja kylpylä">
          </div>
        </div>
      </section>
      <!-- end kunt -->

      <!-- start edut -->
      <section class="edut rd-upload" id="edut">
        <div class="container">
          <h2 class="edut__title tt-42-30">
            Edut
          </h2>
          <ul class="edut__list">
            <li class="edut__item">
              <div class="edut__icon">
                <img src="." data-rd-image="./img/icon.svg" data-rd-image-webp="./img/icon.svg" width="32" height="32"
                  alt="Edut">
              </div>
              <div class="edut__texts">
                <p class="edut__text tx-24-18">
                  Hämmästyttävä aamiainen
                </p>
              </div>
            </li>
            <li class="edut__item">
              <div class="edut__icon">
                <img src="." data-rd-image="./img/icon.svg" data-rd-image-webp="./img/icon.svg" width="32" height="32"
                  alt="Edut">
              </div>
              <div class="edut__texts">
                <p class="edut__text tx-24-18">
                  Yksityinen pysäköinti
                </p>
              </div>
            </li>
            <li class="edut__item">
              <div class="edut__icon">
                <img src="." data-rd-image="./img/icon.svg" data-rd-image-webp="./img/icon.svg" width="32" height="32"
                  alt="Edut">
              </div>
              <div class="edut__texts">
                <p class="edut__text tx-24-18">
                  Ravintola
                </p>
              </div>
            </li>
            <li class="edut__item">
              <div class="edut__icon">
                <img src="." data-rd-image="./img/icon.svg" data-rd-image-webp="./img/icon.svg" width="32" height="32"
                  alt="Edut">
              </div>
              <div class="edut__texts">
                <p class="edut__text tx-24-18">
                  Spa- ja wellness-keskus
                </p>
              </div>
            </li>
            <li class="edut__item">
              <div class="edut__icon">
                <img src="." data-rd-image="./img/icon.svg" data-rd-image-webp="./img/icon.svg" width="32" height="32"
                  alt="Edut">
              </div>
              <div class="edut__texts">
                <p class="edut__text tx-24-18">
                  Lentokenttäkuljetus (ilmainen)
                </p>
              </div>
            </li>
            <li class="edut__item">
              <div class="edut__icon">
                <img src="." data-rd-image="./img/icon.svg" data-rd-image-webp="./img/icon.svg" width="32" height="32"
                  alt="Edut">
              </div>
              <div class="edut__texts">
                <p class="edut__text tx-24-18">
                  Ilmainen Wi-Fi
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end edut -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>