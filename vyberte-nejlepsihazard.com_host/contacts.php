<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Stránka obsahuje simulátory hazardních her vytvořené výhradně pro zábavu.">
  <meta property="og:site_name"
    content="Naším hlavním cílem je poskytnout uživatelům realistické a vzrušující herní prostředí bez možnosti vyhrát skutečné peníze. Nabízíme široký výběr her">
  <meta name="twitter:title" content="Stránka obsahuje simulátory hazardních her vytvořené výhradně pro zábavu.">
  <meta name="twitter:description"
    content="Naším hlavním cílem je poskytnout uživatelům realistické a vzrušující herní prostředí bez možnosti vyhrát skutečné peníze. Nabízíme široký výběr her">
  <meta name="description"
    content="Naším hlavním cílem je poskytnout uživatelům realistické a vzrušující herní prostředí bez možnosti vyhrát skutečné peníze. Nabízíme široký výběr her">
  <title>Stránka obsahuje simulátory hazardních her vytvořené výhradně pro zábavu.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Play-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/RopaSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./resources/swiper/swiper.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <script src="./resources/swiper/swiper.js"></script>
  <script defer src="./js/main.js"></script>
</head>

<body>
  <div class="page">
    <div class="page__content">
      <!-- start header -->
      <?php
      include 'header.php';
      ?>
      <!-- end header -->
      <div class="page__body">
        <main>
          <!-- start contacts -->
          <section class="contacts rd-upload">
            <div class="container">
              <div class="contacts__top">
                <div class="contacts__top-left">
                  <h1 class="contacts__title tt-53-40">
                    Kontakty
                  </h1>
                  <div class="contacts__texts">
                    <p class="contacts__text tx-23">
                      Zůstaňte v obraze s nejnovějšími zprávami! Přihlaste se k odběru našeho newsletteru a získejte
                      nejnovější zprávy, informace o nových produktech, akcích a mnoho dalšího. Zanechte svůj e-mail a
                      telefonní číslo, abychom vám mohli zasílat naše týdenní aktualizace.
                    </p>
                  </div>
                </div>
                <div class="contacts__wrapper-form">
                  <form class="form" action="#!" name="form" autocomplete="off">
                    <div class="form__inputs">
                      <input class="form__input input" type="text" name="text" id="text" placeholder="Název..."
                        required>
                      <input class="form__input input" type="email" name="email" id="email" placeholder="E-mailem..."
                        required>
                    </div>
                    <button class="form__button but" type="submit">
                      Poslat
                    </button>
                  </form>
                </div>
              </div>
              <div class="contacts__bottom">
                <div class="contacts__bottom-left">
                  <div class="contacts__subtitle tt-31">
                    Mapa
                  </div>
                  <div class="contacts__map">
                    <iframe
                      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2560.447337052859!2d14.455898977009653!3d50.0779110141169!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x470b93631c247aeb%3A0x3617421f05e94f47!2zMTA1LCBWaW5vaHJhZHNrw6EgMTg3NC8xMzcsIDEzMCAwMCDFvWnFvmtvdiwgQ3plY2hpYQ!5e0!3m2!1sen!2sen!4v1698990221733!5m2!1sen!2sen"
                      width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"></iframe>
                  </div>
                </div>
                <div class="contacts__bottom-right">
                  <div class="contacts__subtitle tt-31">
                    Kontakty
                  </div>
                  <address class="contacts__address">
                    <ul class="contacts__list">
                      <li class="contacts__item tx-17">
                        <img src="." data-rd-image="./img/phone.svg" data-rd-image-webp="./img/phone.svg" width="32"
                          height="32" alt="Icon phone">
                        <a href="tel:+420222727313">
                          +420 2 22 72 73 13
                        </a>
                      </li>
                      <li class="contacts__item tx-17">
                        <img src="." data-rd-image="./img/geo.svg" data-rd-image-webp="./img/geo.svg" width="32"
                          height="32" alt="Icon geo">
                        Vinogradská ulice 137/105, Praha
                      </li>
                      <li class="contacts__item tx-17">
                        <img src="." data-rd-image="./img/mail.svg" data-rd-image-webp="./img/mail.svg" width="32"
                          height="32" alt="Icon mail">
                        <a href="mailto:vyberte@nejlepsihazard.com">
                          vyberte@nejlepsihazard.com
                        </a>
                      </li>
                    </ul>
                  </address>
                </div>
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
    </div>
  </div>
</body>

</html>