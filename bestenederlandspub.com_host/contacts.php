<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Hotel 717 ligt in een prachtige stad en wordt beschouwd als een van de beste.">
  <meta property="og:site_name"
    content="Het hotel biedt zijn gasten luxe kamers die zijn ingericht met een onovertroffen smaak. Alle kamers zijn uitgerust met moderne voorzieningen, waaronder comfortabele bedden.">
  <meta name="twitter:title" content="Hotel 717 ligt in een prachtige stad en wordt beschouwd als een van de beste.">
  <meta name="twitter:description"
    content="Het hotel biedt zijn gasten luxe kamers die zijn ingericht met een onovertroffen smaak. Alle kamers zijn uitgerust met moderne voorzieningen, waaronder comfortabele bedden.">
  <meta name="description"
    content="Het hotel biedt zijn gasten luxe kamers die zijn ingericht met een onovertroffen smaak. Alle kamers zijn uitgerust met moderne voorzieningen, waaronder comfortabele bedden.">
  <title>Hotel 717 ligt in een prachtige stad en wordt beschouwd als een van de beste.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/PlayfairDisplay-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/PlayfairDisplay-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
      <!-- start contacts -->
      <section class="contacts rd-upload">
        <div class="container">
          <h1 class="contacts__title tt-53-43">
            Contacten
          </h1>
          <div class="contacts__middle">
            <div class="contacts__middle-left">
              <div class="contacts__subtitle tt-31-28">
                Beste gasten, wij nodigen u graag uit om een kamer te boeken in ons prachtige hotel!
              </div>
              <div class="contacts__texts">
                <p class="contacts__text tx-17">
                  Ons hotel is een ideale plek voor ontspanning en comfortabel leven. Wij bieden een ruime keuze aan
                  kamers in verschillende categorieën om aan al uw behoeften te voldoen.
                </p>
              </div>
            </div>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Naam..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="Mail..." required>
              </div>
              <button class="form__button but" type="submit">
                Versturen
              </button>
            </form>
          </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.3093581931294!2d4.882732977108012!3d52.364810347707326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609e9a415baff%3A0xfc2eb673afed4591!2sPrinsengracht%20717%2C%201017%20JW%20Amsterdam%2C%20Netherlands!5e0!3m2!1sen!2sen!4v1698060041145!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  <span>
                    BEL ONS
                  </span>
                  <a href="tel:+310204270717">
                    +31 (0)20 427 07 17
                  </a>
                </li>
                <li class="contacts__info-item tx-17">
                  <span>
                    EMAIL ONS
                  </span>
                  <a href="mailto:info@717hotel.nl">
                    info@717hotel.nl
                  </a>
                </li>
                <li class="contacts__info-item tx-17">
                  <span>
                    BEZOEK ONS
                  </span>
                  Prinsengracht 717, 1017JW
                </li>
              </ul>
            </address>
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