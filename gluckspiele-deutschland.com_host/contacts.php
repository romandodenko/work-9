<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Das Fairmont Hotel Vier Jahreszeiten ist ein luxuriöses 5-Sterne-Haus.">
  <meta property="og:site_name"
    content="Aufgrund seines tadellosen Service, der edlen Atmosphäre und des hohen Komforts belegt das Hotel zu Recht einen der ersten Plätze im Ranking der besten Hotels in Deutschland.">
  <meta name="twitter:title" content="Das Fairmont Hotel Vier Jahreszeiten ist ein luxuriöses 5-Sterne-Haus.">
  <meta name="twitter:description"
    content="Aufgrund seines tadellosen Service, der edlen Atmosphäre und des hohen Komforts belegt das Hotel zu Recht einen der ersten Plätze im Ranking der besten Hotels in Deutschland.">
  <meta name="description"
    content="Aufgrund seines tadellosen Service, der edlen Atmosphäre und des hohen Komforts belegt das Hotel zu Recht einen der ersten Plätze im Ranking der besten Hotels in Deutschland.">
  <title>Das Fairmont Hotel Vier Jahreszeiten ist ein luxuriöses 5-Sterne-Haus.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Courgette-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Rubik-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./resources/swiper/swiper.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <script src="./resources/swiper/swiper.js"></script>
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
            <h1 class="contacts__title tt-53-36 line">
              Kontakte
            </h1>
            <div class="contacts__texts">
              <p class="contacts__text tx-23">
                Füllen Sie das Formular aus und wir werden uns mit Ihnen in Verbindung setzen
              </p>
            </div>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Name" required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="Post" required>
              </div>
              <button class="form__button but" type="submit">
                Schicken
              </button>
            </form>
          </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2370.1109326194446!2d9.988571977160635!3d53.555787159031325!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b18f191d37c0e9%3A0x9a46077fc1ff63f2!2sNeuer%20Jungfernstieg%209-14%2C%2020354%20Hamburg%2C%20Germany!5e0!3m2!1sen!2sen!4v1698054949004!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  Neuer Jungfernstieg 9-14, Hamburg D-20354, Germany
                </li>
                <li class="contacts__info-item contacts__info-item_decor tx-17">
                  <a href="tel:+4904034940">
                    Tel +49 (0) 40 3494 0
                  </a>
                </li>
                <li class="contacts__info-item tx-17">
                  <a href="mailto:hamburg@fairmont.com">
                    hamburg@fairmont.com
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