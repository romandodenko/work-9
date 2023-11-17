<!DOCTYPE html>
<html lang="da">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Velkommen til vores hotte, lovlige butiksfacade, der sælger spil i Danmark">
  <meta property="og:site_name"
    content="Her finder du et bredt udvalg af kvalitetsspil, der giver dig mulighed for at opleve spændingen. Vi er stolte over, at alle vores spil er fuldt ud i overensstemmelse med loven.">
  <meta name="twitter:title" content="Velkommen til vores hotte, lovlige butiksfacade, der sælger spil i Danmark">
  <meta name="twitter:description"
    content="Her finder du et bredt udvalg af kvalitetsspil, der giver dig mulighed for at opleve spændingen. Vi er stolte over, at alle vores spil er fuldt ud i overensstemmelse med loven.">
  <meta name="description"
    content="Her finder du et bredt udvalg af kvalitetsspil, der giver dig mulighed for at opleve spændingen. Vi er stolte over, at alle vores spil er fuldt ud i overensstemmelse med loven.">
  <title>Velkommen til vores hotte, lovlige butiksfacade, der sælger spil i Danmark</title>
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
      <!-- start contacts -->
      <section class="contacts rd-upload">
        <div class="container">
          <div class="contacts__top">
            <div class="contacts__top-left">
              <h1 class="contacts__title tt-53-46 line">
                Kontaktpersoner
              </h1>
              <div class="contacts__texts">
                <p class="contacts__text tt-31-26">
                  Udfyld formularen og bestil ethvert spil hos os
                </p>
              </div>
            </div>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Navn..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="Post..." required>
              </div>
              <button class="form__button but" type="submit">
                Sende
              </button>
            </form>
          </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2248.7943139572967!2d12.48551217725755!3d55.69256369662891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4652517ce3e18c05%3A0xaf0a69e8a01df7c0!2sJernbane%20All%C3%A9%2090%2C%202720%20K%C3%B8benhavn%2C%20Denmark!5e0!3m2!1sen!2sen!4v1698223343818!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__list">
                <li class="contacts__item tx-22">
                  <span class="tt-31-26">
                    Adresse
                  </span>
                  Jernbane Allé, 90
                </li>
                <li class="contacts__item tx-22">
                  <span class="tt-31-26">
                    Kontaktpersoner
                  </span>
                  <a href="tel:+4533310415">
                    +45 33 31 04 15
                  </a>
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