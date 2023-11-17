<!DOCTYPE html>
      <html lang="de">

      <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:type" content="website">
        <meta property="og:title" content="Mandala ist eines der herausragendsten und am besten bewerteten Hotels.">
        <meta property="og:site_name"
          content="Dieses Hotel bietet erstklassigen Service, Komfort und stilvolles Design. Das Hotel ist bekannt für seine Zimmer und Suiten, die mit allem ausgestattet sind, was Sie für Ihren Aufenthalt benötigen.">
        <meta name="twitter:title" content="Mandala ist eines der herausragendsten und am besten bewerteten Hotels.">
        <meta name="twitter:description"
          content="Dieses Hotel bietet erstklassigen Service, Komfort und stilvolles Design. Das Hotel ist bekannt für seine Zimmer und Suiten, die mit allem ausgestattet sind, was Sie für Ihren Aufenthalt benötigen.">
        <meta name="description"
          content="Dieses Hotel bietet erstklassigen Service, Komfort und stilvolles Design. Das Hotel ist bekannt für seine Zimmer und Suiten, die mit allem ausgestattet sind, was Sie für Ihren Aufenthalt benötigen.">
        <title>Mandala ist eines der herausragendsten und am besten bewerteten Hotels.</title>
        <link rel="shortcut icon" href="./img/favicon.png">
        <link rel="preload" href="./fonts/FrankRuhlLibre-Bold.woff2" as="font" type="font/woff2" crossorigin>
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
              <h1 class="contacts__title tt-53-36">
                Contacten
              </h1>
              <div class="contacts__top">
                <div class="contacts__left">
                  <div class="contacts__subtitle tt-44-30">
                    Kontaktiere uns
                  </div>
                  <p class="contacts__text tx-17"> 
                    Senden Sie Ihre Anfrage und wir werden uns mit Ihnen in Verbindung setzen, um alle Ihre Fragen zu beantworten
                  </p>
                  <form class="form" action="#!" name="form" autocomplete="off">
                    <div class="form__inputs">
                      <input class="form__input input" type="text" name="text" id="text" placeholder="Name..." required>
                      <input class="form__input input" type="email" name="email" id="email" placeholder="Email..." required>
                    </div>
                  <button class="form__button but" type="submit">
                    Schicken
                    <img src="./img/arrow.svg" width="32" height="32" alt="Arrow">
                  </button>
                  </form>
                </div>
                <div class="contacts__image">
                  <picture>
                  <source media="(min-width: 320px)" srcset="./img/contacts.webp" type="image/webp"> 
                  <img src="./img/contacts.jpg" width="300" height="300" alt="Contacten">
                  </picture>
                </div>
              </div>
              <div class="contacts__bottom">
                <div class="contacts__map">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2428.794777407474!2d13.358972894398734!3d52.50095436559474!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47a85035bb3ca5d3%3A0xa3ccdbf3a41e6!2sPotsdamer%20Str.%2C%20Berlin%2C%20Germany!5e0!3m2!1sen!2sen!4v1695635056731!5m2!1sen!2sen" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <ul class="contacts__list">
                  <li class="contacts__item tx-17">
                    <img src="./img/phone.svg" loading="lazy" width="32" height="32" alt="Phone">
                    <a href="tel:+49030590050000">
                      +49 (0)30 590 05 00 00
                    </a>
                  </li>
                  <li class="contacts__item tx-17">
                    <img src="./img/mail.svg" loading="lazy" width="32" height="32" alt="Mail">
                    <a href="mailto:welcome@themandala.de">
                      welcome@themandala.de
                    </a>
                  </li>
                  <li class="contacts__item tx-17">
                    <img src="./img/geo.svg" loading="lazy" width="32" height="32" alt="Geo">
                    Potsdamer Straße 310785 Berlin
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