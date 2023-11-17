<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="The Europe Hotel & Resort is one of the finest lakeside hotels in Ireland.">
  <meta property="og:site_name"
    content="The hotel offers a wide range of spacious and luxurious rooms and suites. The hotel has received international recognition and is licensed to provide hotel services.">
  <meta name="twitter:title" content="The Europe Hotel & Resort is one of the finest lakeside hotels in Ireland.">
  <meta name="twitter:description"
    content="The hotel offers a wide range of spacious and luxurious rooms and suites. The hotel has received international recognition and is licensed to provide hotel services.">
  <meta name="description"
    content="The hotel offers a wide range of spacious and luxurious rooms and suites. The hotel has received international recognition and is licensed to provide hotel services.">
  <title>The Europe Hotel & Resort is one of the finest lakeside hotels in Ireland.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Kanit-Light.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Kanit-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/PlayfairDisplay-Black.woff2" as="font" type="font/woff2" crossorigin>
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
      <section class="contacts">
        <div class="container">
          <div class="contacts__head">
            <h1 class="contacts__title tt-53-40">
              Book a room
            </h1>
            <p class="contacts__text tx-17">
              Book a room in our hotel now!
            </p>
          </div>
          <form class="form" action="#!" name="form" autocomplete="off">
            <div class="form__inputs">
              <input class="form__input input" type="text" name="text" id="text" placeholder="Name..." required>
              <input class="form__input input" type="email" name="email" id="email" placeholder="Mail..." required>
            </div>
            <button class="form__button but" type="submit">
              Send
            </button>
          </form>
          <div class="contacts__bottom">
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  <img src="./img/phone.svg" loading="lazy" width="32" height="32" alt="Icon">
                  <a href="tel:+353646671300">
                    + 353 64 66 71300
                  </a>
                </li>
                <li class="contacts__info-item tx-17">
                  <img src="./img/geo.svg" loading="lazy" width="32" height="32" alt="Icon">
                  The Europe Hotel & Resort, Fossa, Killarney, Co. Kerry, Ireland,V93 KHN6
                </li>
                <li class="contacts__info-item tx-17">
                  <img src="./img/mail.svg" loading="lazy" width="32" height="32" alt="Icon">
                  <a href="mailto:reservations@theeurope.com">
                    reservations@theeurope.com
                  </a>
                </li>
              </ul>
            </address>
            <div class="contacts__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2452.6771528382837!2d-9.57534092288352!3d52.0674019696392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x484539270f0c9b99%3A0xf15e704dde3dba81!2sThe%20Europe%20Hotel%20%26%20Resort!5e0!3m2!1sen!2sen!4v1696476652359!5m2!1sen!2sen" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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