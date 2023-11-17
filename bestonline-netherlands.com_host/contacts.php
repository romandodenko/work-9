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
      <!-- start contacts -->
      <section class="contacts">
        <div class="container">
          <div class="contacts-top">
            <div class="contacts-top__left">
              <h1 class="contacts-top__title tt-53-40">
                Contacten
              </h1>
            </div>
            <div class="contacts-top__right">
              <div class="contacts-top__subtitle tt-31">
                Boek nu uw kamer!
              </div>
              <div class="contacts-top__texts">
                <p class="contacts-top__text tx-17">
                  Vul het formulier in en geniet van uw vakantie bij ons
                </p>
              </div>
              <form class="form" action="#!" name="form" autocomplete="off">
                <div class="form__inputs">
                  <input class="form__input input" type="text" name="text" id="text" placeholder="Naam..." required>
                  <input class="form__input input" type="email" name="email" id="email" placeholder="Mail..." required>
                </div>
                <button class="form__button but-180" type="submit">
                  Versturen
                </button>
              </form>
            </div>
          </div>
          <div class="contacts-bottom">
            <div class="contacts-bottom__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2461.1310946534195!2d4.4799781771097935!3d51.913319280968324!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c43360cc37fff7%3A0x50ea580f15a98d3a!2sLeuvehaven%2077%2C%203011%20EA%20Rotterdam%2C%20Netherlands!5e0!3m2!1sen!2sen!4v1695280355646!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <ul class="contacts-bottom__list">
              <li class="contacts-bottom__item tx-17">
                Leuvehaven 77, Centrum, 3011 EA Rotterdam, Nederland
              </li>
              <li class="contacts-bottom__item tx-17">
                <a href="tel:+310104133222">
                  +31 (0)10 413 3222
                </a>
              </li>
              <li class="contacts-bottom__item tx-17">
                <a href="mailto:info@mainporthotel.com">
                  info@mainporthotel.com
                </a>
              </li>
            </ul>
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