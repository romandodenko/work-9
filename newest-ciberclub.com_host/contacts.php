<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="The Westbury Hotel is one of the best and highly rated hotels in the region.">
  <meta property="og:site_name"
    content="The Westbury Hotel offers luxurious rooms decorated in style. Each room is equipped with modern technology and amenities, ensuring a high level of comfort.">
  <meta name="twitter:title" content="The Westbury Hotel is one of the best and highly rated hotels in the region.">
  <meta name="twitter:description"
    content="The Westbury Hotel offers luxurious rooms decorated in style. Each room is equipped with modern technology and amenities, ensuring a high level of comfort.">
  <meta name="description"
    content="The Westbury Hotel offers luxurious rooms decorated in style. Each room is equipped with modern technology and amenities, ensuring a high level of comfort.">
  <title>The Westbury Hotel is one of the best and highly rated hotels in the region.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/HelveticaNeueCyrRoman-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Raleway-Bold.woff2" as="font" type="font/woff2" crossorigin>
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
          <h1 class="contacts__title circle tx-22">
            Contacts
          </h1>
          <div class="contacts__subtitle tt-53-31">
            Reserve a room
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
              <ul class="contacts__list">
                <li class="contacts__item tx-17">
                  <img src="./img/phone.svg" loading="lazy" width="32" height="32" alt="Phone">
                  <a href="tel:+35316791122">
                    +353 1 679 1122
                  </a>
                </li>
                <li class="contacts__item tx-17">
                  <img src="./img/geo.svg" loading="lazy" width="32" height="32" alt="Geo">
                  Grafton Street, D2 Dublin, Ireland
                </li>
                <li class="contacts__item tx-17">
                  <img src="./img/mail.svg" loading="lazy" width="32" height="32" alt="Mail">
                  <a href="mailto:WESTBURY@DOYLECOLLECTION.COM">
                    WESTBURY@DOYLECOLLECTION.COM
                  </a>
                </li>
              </ul>
            </address>
            <div class="contacts__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2382.090320176496!2d-6.262760822828054!3d53.34163937507521!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670e9b8c8edbf1%3A0x90afb1bb108edcdd!2sGrafton%20Street%2C%20Dublin%2C%20Ireland!5e0!3m2!1sen!2sen!4v1697005253789!5m2!1sen!2sen" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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