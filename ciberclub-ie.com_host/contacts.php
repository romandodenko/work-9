<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Conrad Dublin is a highly rated hotel and is considered one of the newest hotels.">
  <meta property="og:site_name"
    content="The Conrad Dublin Hotel is renowned for its modern and stylish surroundings. It was recently opened and offers modern bathrooms, elegantly decorated rooms">
  <meta name="twitter:title"
    content="Conrad Dublin is a highly rated hotel and is considered one of the newest hotels.">
  <meta name="twitter:description"
    content="The Conrad Dublin Hotel is renowned for its modern and stylish surroundings. It was recently opened and offers modern bathrooms, elegantly decorated rooms">
  <meta name="description"
    content="The Conrad Dublin Hotel is renowned for its modern and stylish surroundings. It was recently opened and offers modern bathrooms, elegantly decorated rooms">
  <title>Conrad Dublin is a highly rated hotel and is considered one of the newest hotels.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/DMSerifDisplay-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Forum-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
      <!-- start header-menu -->
      <section class="header-menu">
        <div class="header-menu__top">
          <div class="header-menu__container header-menu__container_flex container">
            <button class="header-menu__exit"></button>
          </div>
        </div>
        <div class="header-menu__container container">
          <nav class="nav">
            <ul class="nav__list">
              <li class="nav__item">
                <a class="nav__link tt-53-36" href="index.php">
                  Home page
                </a>
              </li>
              <li class="nav__item">
                <a class="nav__link tt-53-36" href="index.php#accommodation">
                  Accommodation
                </a>
              </li>
              <li class="nav__item">
                <a class="nav__link tt-53-36" href="index.php#restaurant">
                  Restaurant and bar
                </a>
              </li>
              <li class="nav__item">
                <a class="nav__link tt-53-36" href="index.php#facilities">
                  Facilities
                </a>
              </li>
              <li class="nav__item">
                <a class="nav__link tt-53-36" href="slots.php">
                  Slot room
                </a>
              </li>
              <li class="nav__item">
                <a class="nav__link tt-53-36" href="contacts.php">
                  Contacts
                </a>
              </li>
            </ul>
          </nav>
        </div>
      </section>
      <!-- start header-menu -->

      <!-- start contacts -->
      <section class="contacts">
        <div class="container">
          <div class="contacts__top">
            <h1 class="contacts__title tt-53-36">
              Contacts
            </h1>
          </div>
          <div class="contacts__middle">
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Name..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="Mail..." required>
              </div>
              <button class="form__button but" type="submit">
                Send
              </button>
            </form>
            <div class="contacts__texts">
              <p class="contacts__text tx-22">
                Book your room right now by filling out the form. Our managers will contact you and answer all your
                questions.
              </p>
            </div>
          </div>
          <div class="contacts__bottom">
            <address class="contacts__address">
              <ul class="contacts__list">
                <li class="contacts__item tx-17">
                  <span>
                    Telephone
                  </span>
                  <a href="tel:+35316028900"> 
                    +353 1 602 8900 
                  </a>
                </li>
                <li class="contacts__item tx-17">
                  <span>
                    Mail
                  </span>
                  <a href="mailto:Conrad_Dublin@conradhotels.com">
                    Conrad_Dublin@conradhotels.com
                  </a>
                </li>
                <li class="contacts__item tx-17">
                  <span>
                    Address
                  </span>
                  Earlsfort Terrace, Dublin, DUB, Ireland
                </li>
              </ul>
            </address>
            <div class="contacts__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2382.49010210016!2d-6.260842222828351!3d53.33448247561054!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48670ea20f4eabd1%3A0x1a2c08b1f20f6444!2sEarlsfort%20Terrace%2C%20Saint%20Kevin&#39;s%2C%20Dublin%2C%20Ireland!5e0!3m2!1sen!2sen!4v1697014246863!5m2!1sen!2sen" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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