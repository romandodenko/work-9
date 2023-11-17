<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Le Louise Brussels ist ein Luxushotel im Herzen Belgiens.">
  <meta property="og:site_name"
    content="Unser gastfreundliches und freundliches Personal ist immer bereit, Sie willkommen zu heißen und Ihnen den besten Service zu bieten. Wir stellen Ihnen die besten Zimmer zur Verfügung.">
  <meta name="twitter:title" content="Le Louise Brussels ist ein Luxushotel im Herzen Belgiens.">
  <meta name="twitter:description"
    content="Unser gastfreundliches und freundliches Personal ist immer bereit, Sie willkommen zu heißen und Ihnen den besten Service zu bieten. Wir stellen Ihnen die besten Zimmer zur Verfügung.">
  <meta name="description"
    content="Unser gastfreundliches und freundliches Personal ist immer bereit, Sie willkommen zu heißen und Ihnen den besten Service zu bieten. Wir stellen Ihnen die besten Zimmer zur Verfügung.">
  <title>Le Louise Brussels ist ein Luxushotel im Herzen Belgiens.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Cinzel-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Forum-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
        <div class="container">
          <h1 class="contacts__title tt-53-32">
            Kontakte
          </h1>
          <div class="contacts__wrapper-form">
            <div class="contacts__texts">
              <p class="contacts__text tx-22">
                Füllen Sie das Formular aus und wir werden uns mit Ihnen in Verbindung setzen
              </p>
            </div>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <label class="form__label" for="text">
                  <span class="tx-17">
                    Gib deinen Namen ein
                  </span>
                  <input class="form__input input" type="text" name="text" id="text" placeholder="Name..." required>
                </label>
                <label class="form__label" for="email">
                  <span class="tx-17">
                    Geben sie ihre E-Mail Adresse ein
                  </span>
                  <input class="form__input input" type="email" name="email" id="email" placeholder="E-Mail..."
                    required>
                </label>
              </div>
              <button class="form__button but" type="submit">
                Schicken
              </button>
            </form>
          </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.730606504844!2d4.35454217706388!3d50.836153659517116!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c4881f37861d%3A0xbc91e135c07501c9!2sAv.%20de%20la%20Toison%20d&#39;Or%2040%2C%201050%20Ixelles%2C%20Belgium!5e0!3m2!1sen!2sen!4v1700044411390!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__list">
                <li class="contacts__item tx-17">
                  Avenue de la Toison d'Or, 40, Brüssel
                </li>
                <li class="contacts__item tx-17">
                  <a href="tel:+3225142200">
                    +32 2 514 22 00
                  </a>
                </li>
                <li class="contacts__item tx-17">
                  <a href="mailto:bestspilleautomat@gmail.com">
                    bestspilleautomat@gmail.com
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