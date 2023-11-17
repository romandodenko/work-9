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

      <!-- start popup -->
      <section class="popup popup-active" id="popup">
        <div class="popup__close"></div>
        <div class="popup__body">
          <p class="popup__text">Our games are intended for an ADULT audience over the age of 18. Click Accepted to
            confirm your age.</p>
          <button class="popup__button">Accepted</button>
        </div>
      </section>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__left">
            <div class="hero__left-top">
              <div class="hero__texts">
                <p class="hero__text tx-17">
                  The Conrad Dublin Hotel in Ireland is one of the most upscale places to stay in the city. The hotel
                  ranks high among hotels and offers its guests luxurious, stylish and modern rooms.
                </p>
              </div>
              <h1 class="hero__title tt-64-40">
                Conrad Dublin
              </h1>
            </div>
            <div class="hero__image hero__image_1">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/hero-1.webp" type="image/webp">
                <img src="./img/hero-1.jpg" width="336" height="336" alt="Conrad Dublin">
              </picture>
            </div>
          </div>
          <div class="hero__image hero__image_2">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/hero-2.webp" type="image/webp">
              <img src="./img/hero-2.jpg" width="336" height="336" alt="Conrad Dublin">
            </picture>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start accommodation -->
      <section class="accommodation" id="accommodation">
        <div class="container">
          <h2 class="accommodation__title tt-53-36">
            Accommodation
          </h2>
          <ul class="accommodation__list">
            <li class="accommodation__item">
              <div class="accommodation__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/accom-1.webp" type="image/webp">
                  <img src="./img/accom-1.jpg" loading="lazy" width="336" height="336" alt="KING SUPERIOR ROOM">
                </picture>
              </div>
              <div class="accommodation__descr">
                <div class="accommodation__descr-top">
                  <div class="accommodation__subtitle tx-22">
                    KING SUPERIOR ROOM
                  </div>
                  <div class="accommodation__mans tx-17">
                    <img src="./img/man.svg" loading="lazy" width="32" height="32" alt="Man">
                    Sleeps 2
                  </div>
                </div>
                <div class="accommodation__texts">
                  <p class="accommodation__text tx-17">
                    A Superior Room at the Conrad Dublin Hotel in Ireland is the perfect place to stay in comfort during
                    your trip.
                  </p>
                </div>
              </div>
            </li>
            <li class="accommodation__item">
              <div class="accommodation__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/accom-2.webp" type="image/webp">
                  <img src="./img/accom-2.jpg" loading="lazy" width="336" height="336" alt="KING DELUXE ROOM">
                </picture>
              </div>
              <div class="accommodation__descr">
                <div class="accommodation__descr-top">
                  <div class="accommodation__subtitle tx-22">
                    KING DELUXE ROOM
                  </div>
                  <div class="accommodation__mans tx-17">
                    <img src="./img/man.svg" loading="lazy" width="32" height="32" alt="Man">
                    Sleeps 2
                  </div>
                </div>
                <div class="accommodation__texts">
                  <p class="accommodation__text tx-17">
                    These rooms are the very first in the hotel. You will be greeted by a spacious environment that will
                    create a cozy atmosphere.
                  </p>
                </div>
              </div>
            </li>
            <li class="accommodation__item">
              <div class="accommodation__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/accom-3.webp" type="image/webp">
                  <img src="./img/accom-3.jpg" loading="lazy" width="336" height="336" alt="JUNIOR SUITE">
                </picture>
              </div>
              <div class="accommodation__descr">
                <div class="accommodation__descr-top">
                  <div class="accommodation__subtitle tx-22">
                    JUNIOR SUITE
                  </div>
                  <div class="accommodation__mans tx-17">
                    <img src="./img/man.svg" loading="lazy" width="32" height="32" alt="Man">
                    Sleeps 2
                  </div>
                </div>
                <div class="accommodation__texts">
                  <p class="accommodation__text tx-17">
                    The Junior Suite is highly rated by guests and features new and modern rooms that will make your
                    stay unforgettable.
                  </p>
                </div>
              </div>
            </li>
            <li class="accommodation__item">
              <div class="accommodation__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/accom-4.webp" type="image/webp">
                  <img src="./img/accom-4.jpg" loading="lazy" width="336" height="336" alt="KING PREMIER ROOM">
                </picture>
              </div>
              <div class="accommodation__descr">
                <div class="accommodation__descr-top">
                  <div class="accommodation__subtitle tx-22">
                    KING PREMIER ROOM
                  </div>
                  <div class="accommodation__mans tx-17">
                    <img src="./img/man.svg" loading="lazy" width="32" height="32" alt="Man">
                    Sleeps 2
                  </div>
                </div>
                <div class="accommodation__texts">
                  <p class="accommodation__text tx-17">
                    Premium rooms have the privilege of using additional hotel amenities such as a fitness center,
                    indoor pool and spa.
                  </p>
                </div>
              </div>
            </li>
            <li class="accommodation__item">
              <div class="accommodation__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/accom-5.webp" type="image/webp">
                  <img src="./img/accom-5.jpg" loading="lazy" width="336" height="336" alt="CONRAD SUITE">
                </picture>
              </div>
              <div class="accommodation__descr">
                <div class="accommodation__descr-top">
                  <div class="accommodation__subtitle tx-22">
                    CONRAD SUITE
                  </div>
                  <div class="accommodation__mans tx-17">
                    <img src="./img/man.svg" loading="lazy" width="32" height="32" alt="Man">
                    Sleeps 3
                  </div>
                </div>
                <div class="accommodation__texts">
                  <p class="accommodation__text tx-17">
                    A deluxe room at the Conrad Dublin Hotel in Ireland is the epitome of luxury and luxurious service.
                  </p>
                </div>
              </div>
            </li>
            <li class="accommodation__item">
              <div class="accommodation__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/accom-6.webp" type="image/webp">
                  <img src="./img/accom-6.jpg" loading="lazy" width="336" height="336" alt="TWIN PREMIER ROOM">
                </picture>
              </div>
              <div class="accommodation__descr">
                <div class="accommodation__descr-top">
                  <div class="accommodation__subtitle tx-22">
                    TWIN PREMIER ROOM
                  </div>
                  <div class="accommodation__mans tx-17">
                    <img src="./img/man.svg" loading="lazy" width="32" height="32" alt="Man">
                    Sleeps 2
                  </div>
                </div>
                <div class="accommodation__texts">
                  <p class="accommodation__text tx-17">
                    This room is the highest rated among guests and is a completely new space created to satisfy the
                    most sophisticated tastes.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end accommodation -->

      <!-- start restaurant -->
      <section class="restaurant" id="restaurant">
        <div class="container">
          <h2 class="restaurant__title tt-53-36">
            Restaurant and bar
          </h2>
          <div class="restaurant__content">
            <div class="restaurant__left">
              <div class="restaurant__left-top"></div>
              <div class="restaurant__left-bottom">
                <div class="restaurant__image restaurant__image_1">
                  <picture>
                    <source media="(min-width: 320px)" srcset="./img/rest-1.webp" type="image/webp">
                    <img src="./img/rest-1.jpg" loading="lazy" width="336" height="336" alt="Restaurant and bar">
                  </picture>
                </div>
                <div class="restaurant__bottom-right">
                  <div class="restaurant__subtitle tt-31">
                    DINING & DRINKS
                  </div>
                  <div class="restaurant__image restaurant__image_2">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/rest-2.webp" type="image/webp">
                      <img src="./img/rest-2.jpg" loading="lazy" width="336" height="336" alt="Restaurant and bar">
                    </picture>
                  </div>
                </div>
              </div>
            </div>
            <div class="restaurant__texts">
              <p class="restaurant__text tx-17">
                The Conrad Dublin Hotel's restaurant and bar in Ireland is renowned for its high ratings and excellent
                service. They are new establishments aimed at the most demanding tastes of their guests.
              </p>
              <p class="restaurant__text tx-17">
                The hotel restaurant is considered one of the first destinations for lovers of fine cuisine. Here you
                can enjoy a variety of dishes prepared from fresh and selected ingredients. The restaurant's chefs
                skillfully combine local and international flavors to create unique culinary masterpieces. The
                atmosphere in the restaurant is warm and cozy, ideal for a romantic dinner or business lunch.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end restaurant -->

      <!-- start facilities -->
      <section class="facilities" id="facilities">
        <div class="container">
          <h2 class="facilities__title tt-53-36">
            Facilities
          </h2>
          <ul class="facilities__list">
            <li class="facilities__item">
              <div class="facilities__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/faci-1.webp" type="image/webp">
                  <img src="./img/faci-1.jpg" loading="lazy" width="336" height="336" alt="FITNESS CENTRE">
                </picture>
              </div>
              <div class="facilities__subtitle tt-31">
                FITNESS CENTRE
              </div>
            </li>
            <li class="facilities__item">
              <div class="facilities__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/faci-2.webp" type="image/webp">
                  <img src="./img/faci-2.jpg" loading="lazy" width="336" height="336" alt="PET-FRIENDLY STAYS">
                </picture>
              </div>
              <div class="facilities__subtitle tt-31">
                PET-FRIENDLY STAYS
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end facilities -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>