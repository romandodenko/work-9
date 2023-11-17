<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Ons hotel in Nederland staat hoog aangeschreven en behoort tot de beste hotels. Contacten">
  <meta property="og:site_name"
    content="Ons hotel is gehuisvest in een historisch gebouw met een elegant design. U wordt begroet door vriendelijk personeel dat u tijdens uw verblijf zal helpen met vragen.">
  <meta property="og:url" content="onlineclubsites.com">
  <meta property="og:image" content="onlineclubsites.com/main.png">
  <meta name="twitter:card" content="summary_large_image">
  <meta name="twitter:title" content="Ons hotel in Nederland staat hoog aangeschreven en behoort tot de beste hotels. Contacten">
  <meta name="twitter:description"
    content="Ons hotel is gehuisvest in een historisch gebouw met een elegant design. U wordt begroet door vriendelijk personeel dat u tijdens uw verblijf zal helpen met vragen.">
  <meta name="twitter:site" content="onlineclubsites.com">
  <meta name="twitter:image" content="onlineclubsites.com/main.png">
  <meta name="description"
    content="Ons hotel is gehuisvest in een historisch gebouw met een elegant design. U wordt begroet door vriendelijk personeel dat u tijdens uw verblijf zal helpen met vragen.">
  <title>Ons hotel in Nederland staat hoog aangeschreven en behoort tot de beste hotels. Contacten</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Spectral-ExtraBold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
</head>

<body>
  <div class="page">
    <!-- start header -->
    <?php
    include 'header2.php';
    ?>
    <!-- end header -->
    <main>
      <!-- start contacts -->
      <section class="contacts contacts_2">
        <div class="contacts__container container">
          <div class="contacts__left">
            <h1 class="contacts__title tt-2">
              Contacten
            </h1>
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