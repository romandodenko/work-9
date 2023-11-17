<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Ons hotel in Nederland staat hoog aangeschreven en behoort tot de beste hotels.">
  <meta property="og:site_name"
    content="Ons hotel is gehuisvest in een historisch gebouw met een elegant design. U wordt begroet door vriendelijk personeel dat u tijdens uw verblijf zal helpen met vragen.">
  <meta property="og:url" content="onlineclubsites.com">
  <meta property="og:image" content="onlineclubsites.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Ons hotel in Nederland staat hoog aangeschreven en behoort tot de beste hotels.">
  <meta name="twitter:description"
    content="Ons hotel is gehuisvest in een historisch gebouw met een elegant design. U wordt begroet door vriendelijk personeel dat u tijdens uw verblijf zal helpen met vragen.">
  <meta name="twitter:site" content="onlineclubsites.com">
  <meta name="twitter:image" content="onlineclubsites.com/main.png">
  <meta name="description"
    content="Ons hotel is gehuisvest in een historisch gebouw met een elegant design. U wordt begroet door vriendelijk personeel dat u tijdens uw verblijf zal helpen met vragen.">
  <title>Ons hotel in Nederland staat hoog aangeschreven en behoort tot de beste hotels.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Spectral-ExtraBold.woff2" as="font" type="font/woff2" crossorigin>
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
          <p class="popup__text">Onze games zijn bedoeld voor een VOLWASSEN publiek ouder dan 18 jaar. Klik op
            Geaccepteerd om uw leeftijd te bevestigen.</p>
          <button class="popup__button">Geaccepteerd</button>
        </div>
      </div>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__content">
            <h1 class="hero__title tt-1">
              <span class="tt-3">
                Luxe plek
              </span>
              Hotel in Nederland
            </h1>
            <div class="hero__texts">
              <p class="hero__text tx-2">
                Het hotel staat bekend om zijn hoge serviceniveau, beleefd personeel en onberispelijke netheid.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <div class="about__content">
            <h2 class="about__title tt-2">
              Over ons
            </h2>
            <div class="about__texts">
              <p class="about__text tx-1">
                Een hoog aangeschreven hotel in Nederland, een van de beste in de regio, is een unieke plek voor een
                comfortabel verblijf. Dit hotel, op een geweldige locatie, beschikt over luxe kamers, ruime en elegante
                openbare ruimtes, evenals ultramoderne voorzieningen en een unieke sfeer.
              </p>
              <p class="about__text tx-1">
                Uitstekende service en aandacht voor detail is de prioriteit van dit hotel. De gastvrijheid van het
                personeel en de kwaliteit van de service maakten het hotel tot een zeer gewaardeerde plek. Elke bezoeker
                voelt zich welkom en wordt voorzien van alle nodige voorzieningen en diensten op het hoogste niveau.
              </p>
              <p class="about__text tx-1">
                Een onderscheidend kenmerk van dit hotel is de uitstekende locatie en het prachtige uitzicht op de
                omringende natuur of het panorama van de stad. U kunt heerlijk wandelen in de prachtige omgeving,
                bezienswaardigheden in de buurt bezoeken of wandelpaden verkennen die direct bij het hotel beginnen.
              </p>
              <p class="about__text tx-1">
                Het hotel heeft restaurants met een gastronomisch menu van lokale en internationale gerechten, bereid
                met verse en hoogwaardige ingrediënten. De bars in het hotel bieden een gevarieerd aanbod aan drankjes,
                verfrissende cocktails en exclusieve wijnen.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end about -->

      <!-- start gallery -->
      <section class="gallery">
        <div class="container">
          <h2 class="gallery__title tt-2">
            Galerij
          </h2>
          <div class="gallery__wrapper-images">
            <div class="gallery__images">
              <div class="gallery__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-1.webp" type="image/webp">
                  <img src="./img/gallery-1.jpg" loading="lazy" width="351" height="450" alt="Image">
                </picture>
              </div>
              <div class="gallery__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-2.webp" type="image/webp">
                  <img src="./img/gallery-2.jpg" loading="lazy" width="351" height="450" alt="Image">
                </picture>
              </div>
            </div>
            <div class="gallery__images gallery__images_2">
              <div class="gallery__image gallery__image_2">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-3.webp" type="image/webp">
                  <img src="./img/gallery-3.jpg" loading="lazy" width="352" height="217" alt="Image">
                </picture>
              </div>
              <div class="gallery__image gallery__image_2">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/gallery-4.webp" type="image/webp">
                  <img src="./img/gallery-4.jpg" loading="lazy" width="352" height="217" alt="Image">
                </picture>
              </div>
            </div>
          </div>
          <a class="gallery__link but-1" href="gallery.php">
            Alles zien
          </a>
        </div>
      </section>
      <!-- end gallery -->

      <!-- start kamers -->
      <section class="kamers">
        <div class="container">
          <h2 class="kamers__title tt-2">
            Kamers
          </h2>
          <ul class="kamers__list">
            <li class="kamers__item">
              <div class="kamers__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/kamers-1.webp" type="image/webp">
                  <img src="./img/kamers-1.jpg" loading="lazy" width="352" height="216" alt="Image">
                </picture>
              </div>
              <h3 class="kamers__subtitle tx-2">
                KLASSIEKE KAMER
              </h3>
              <div class="kamers__texts">
                <p class="kamers__text tx-1">
                  De Classic Room van dit hotel in Nederland is een van de meest populaire overnachtingsmogelijkheden
                  onder gasten.
                </p>
              </div>
            </li>
            <li class="kamers__item">
              <div class="kamers__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/kamers-2.webp" type="image/webp">
                  <img src="./img/kamers-2.jpg" loading="lazy" width="352" height="216" alt="Image">
                </picture>
              </div>
              <h3 class="kamers__subtitle tx-2">
                SUPERIEURE KAMER
              </h3>
              <div class="kamers__texts">
                <p class="kamers__text tx-1">
                  We hebben een zeer gewaardeerde superior kamer in ons hotel in Nederland. Deze kamer is
                  gecategoriseerd als een van de beste kamers in het hotel.
                </p>
              </div>
            </li>
            <li class="kamers__item">
              <div class="kamers__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/kamers-3.webp" type="image/webp">
                  <img src="./img/kamers-3.jpg" loading="lazy" width="352" height="216" alt="Image">
                </picture>
              </div>
              <h3 class="kamers__subtitle tx-2">
                LUXE KAMER
              </h3>
              <div class="kamers__texts">
                <p class="kamers__text tx-1">
                  Ik presenteer onder uw aandacht een luxe kamer in ons hotel in Nederland met een hoge waardering.
                </p>
              </div>
            </li>
          </ul>
          <a class="kamers__link but-1" href="kamers.php">
            Meer
          </a>
        </div>
      </section>
      <!-- end kamers -->

      <!-- start contacts -->
      <section class="contacts">
        <div class="contacts__container container">
          <div class="contacts__left">
            <h2 class="contacts__title tt-2">
              Contacten
            </h2>
            <div class="contacts__subtitle tt-3">
              Een kamer boeken
            </div>
            <p class="contacts__text tx-1">
              Vul het formulier in en we nemen contact met je op om alle details te bespreken en een kamer te reserveren
            </p>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input tx-1" type="text" name="text" id="text" placeholder="Uw naam..." required>
                <input class="form__input tx-1" type="email" name="email" id="email" placeholder="Jouw email..."
                  required>
              </div>
              <button class="form__button but-1" type="submit">
                Meer
              </button>
            </form>
          </div>
          <div class="contacts__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/contacts.webp" type="image/webp">
              <img src="./img/contacts.jpg" loading="lazy" width="544" height="351" alt="Image">
            </picture>
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