<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="A Clark Hotel Budapest méltán nevezhető az egyik legjobb szállodának.">
  <meta property="og:site_name"
    content="A város szívében található szálloda páratlan kényelmet kínál, ötvözi az ősi építészetet. A Clark Budapest kiváló szolgáltatások széles skáláját kínálja vendégeinek.">
  <meta name="twitter:title" content="A Clark Hotel Budapest méltán nevezhető az egyik legjobb szállodának.">
  <meta name="twitter:description"
    content="A város szívében található szálloda páratlan kényelmet kínál, ötvözi az ősi építészetet. A Clark Budapest kiváló szolgáltatások széles skáláját kínálja vendégeinek.">
  <meta name="description"
    content="A város szívében található szálloda páratlan kényelmet kínál, ötvözi az ősi építészetet. A Clark Budapest kiváló szolgáltatások széles skáláját kínálja vendégeinek.">
  <title>A Clark Hotel Budapest méltán nevezhető az egyik legjobb szállodának.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Lato-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Literata-Bold.woff2" as="font" type="font/woff2" crossorigin>
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
      <section class="contacts">
        <div class="contacts__container container">
          <div class="contacts__top">
            <div class="contacts__left">
              <h1 class="contacts__title tt-53-40">
                Kapcsolatok
              </h1>
              <div class="contacts__texts">
                <p class="contacts__text tx-23">
                  Töltse ki a foglalási űrlapot
                </p>
              </div>
            </div>
            <div class="contacts__wrapper-form">
              <form class="form" action="#!" name="form" autocomplete="off">
                <div class="form__inputs">
                  <input class="form__input input" type="text" name="text" id="text" placeholder="Név..." required>
                  <input class="form__input input" type="email" name="email" id="email" placeholder="Levél..." required>
                </div>
                <button class="form__button but-131" type="submit">
                  Küld
                  <img src="./img/arrow.svg" loading="lazy" width="32" height="32" alt="Arrow">
                </button>
              </form>
            </div>
          </div>
          <div class="contacts__bottom">
            <ul class="contacts__list">
              <li class="contacts__item tx-18-16">
                <img src="./img/mail.svg" loading="lazy" width="32" height="32" alt="Icon mail">
                <a href="mailto:reception@hotelclarkbudapest.hu">
                  reception@hotelclarkbudapest.hu
                </a>
              </li>
              <li class="contacts__item tx-18-16">
                <img src="./img/phone.svg" loading="lazy" width="32" height="32" alt="Icon phone">
                <a href="tel:+3616104890">
                  +36 1 610 4890
                </a>
              </li>
              <li class="contacts__item tx-18-16">
                <img src="./img/geo.svg" loading="lazy" width="32" height="32" alt="Icon geo">
                Hotel Clark BudapestH-1013 Budapest, Clark Ádám tér 1.
              </li>
            </ul>
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2695.5502235342087!2d19.03736837692671!3d47.49867479542335!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dc3dab18bc7f%3A0xe97e4946649ecc5d!2sHotel%20Clark%20Budapest!5e0!3m2!1sen!2sen!4v1695808285138!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
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
</body>

</html>