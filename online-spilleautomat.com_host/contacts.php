<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title"
    content="Das Sofitel Brussels Europe ist eines der besten Hotels in der Region und wird hoch bewertet.">
  <meta property="og:site_name"
    content="Es bietet komfortable Zimmer, Gourmetküche und eine Vielzahl an Annehmlichkeiten. In der Nähe befinden sich viele attraktive Sehenswürdigkeiten der Stadt.">
  <meta name="twitter:title"
    content="Das Sofitel Brussels Europe ist eines der besten Hotels in der Region und wird hoch bewertet.">
  <meta name="twitter:description"
    content="Es bietet komfortable Zimmer, Gourmetküche und eine Vielzahl an Annehmlichkeiten. In der Nähe befinden sich viele attraktive Sehenswürdigkeiten der Stadt.">
  <meta name="description"
    content="Es bietet komfortable Zimmer, Gourmetküche und eine Vielzahl an Annehmlichkeiten. In der Nähe befinden sich viele attraktive Sehenswürdigkeiten der Stadt.">
  <title>Das Sofitel Brussels Europe ist eines der besten Hotels in der Region und wird hoch bewertet.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Fraunces-Black.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Inter-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
</head>

<body>
  <div class="page page_change">
    <!-- start header -->
    <?php
    include 'header.php';
    ?>
    <!-- end header -->
    <main>
      <!-- start contacts -->
      <section class="contacts rd-upload">
        <div class="contacts__container container">
          <div class="contacts__left">
            <h1 class="contacts__title tt-53-36">
              Kontakte
            </h1>
            <div class="contacts__texts">
              <p class="contacts__text tx-23-20">
                Füllen Sie das Formular aus und wir werden uns mit Ihnen in Verbindung setzen, um alle Ihre Fragen zu
                beantworten
              </p>
            </div>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Name..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="Email..." required>
              </div>
              <button class="form__button but" type="submit">
                Schicken
              </button>
            </form>
          </div>
          <div class="contacts__right">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.6517598864084!2d4.380934000000001!3d50.837613999999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c4981025ec1f%3A0xcb1cbd0641d1738b!2sPl.%20Jourdan%2C%20Bruxelles%2C%20Belgium!5e0!3m2!1sen!2sen!4v1700026560597!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__list">
                <li class="contacts__item tx-17">
                  <svg width="32" height="32">
                    <use xlink:href="./img/svg/sprites.svg#geo"></use>
                  </svg>
                  Brüssel, Place Jourdan
                </li>
                <li class="contacts__item tx-17">
                  <svg width="32" height="32">
                    <use xlink:href="./img/svg/sprites.svg#mail"></use>
                  </svg>
                  <a href="mailto:onlinespilleautomat@gmail.com">
                    onlinespilleautomat@gmail.com
                  </a>
                </li>
                <li class="contacts__item tx-17">
                  <svg width="32" height="32">
                    <use xlink:href="./img/svg/sprites.svg#phone"></use>
                  </svg>
                  <a href="tel:+3222355100">
                    +32 2 235 51 00
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