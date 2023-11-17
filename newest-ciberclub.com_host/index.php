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
          <div class="hero__content">
            <div class="hero__descr">
              <div class="hero__subtitle circle tx-22">
                Hotel in Dublin 5 stars
              </div>
              <h1 class="hero__title tt-64-40">
                The Westbury Hotel
              </h1>
              <div class="hero__texts">
                <p class="hero__text tx-17">
                  The Westbury Hotel in Ireland is the true epitome of luxury and sophisticated style.
                </p>
              </div>
            </div>
            <div class="hero__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/hero-2.webp" type="image/webp">
                <img src="./img/hero-2.jpg" width="336" height="336" alt="The Westbury Hotel">
              </picture>
            </div>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start meetings -->
      <section class="meetings" id="meetings">
        <div class="container">
          <h2 class="meetings__subtitle circle tx-22">
            Meetings and events
          </h2>
          <div class="meetings__content">
            <div class="meetings__descr">
              <div class="meetings__title tt-31-26">
                Meetings at The Westbury
              </div>
              <div class="meetings__texts">
                <p class="meetings__text tx-17">
                  Meeting at The Westbury Hotel in Ireland is the perfect combination of luxury, high ratings and new
                  opportunities. The hotel has an excellent reputation and is one of the best venues for business and
                  social meetings.
                </p>
              </div>
            </div>
            <ul class="meetings__images">
              <li class="meetings__image meetings__image_1">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/meetings-1.webp" type="image/webp">
                  <img src="./img/meetings-1.jpg" loading="lazy" width="336" height="336"
                    alt="Meetings at The Westbury">
                </picture>
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/meetings-2.webp" type="image/webp">
                  <img src="./img/meetings-2.jpg" loading="lazy" width="336" height="336"
                    alt="Meetings at The Westbury">
                </picture>
              </li>
              <li class="meetings__image meetings__image_2">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/meetings-3.webp" type="image/webp">
                  <img src="./img/meetings-3.jpg" loading="lazy" width="336" height="336"
                    alt="Meetings at The Westbury">
                </picture>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end meetings -->

      <!-- start hotel -->
      <section class="hotel" id="hotel">
        <div class="container">
          <h2 class="hotel__subtitle circle tx-22">
            Hotel amenities
          </h2>
          <div class="hotel__content">
            <div class="hotel__descr">
              <div class="hotel__title tx-22">
                Among the amenities and services that we offer at the hotel are:
              </div>
              <ul class="hotel__list">
                <li class="hotel__item line">
                  <p class="hotel__text tx-17">
                    Free Wi-Fi throughout the hotel
                  </p>
                </li>
                <li class="hotel__item line">
                  <p class="hotel__text tx-17">
                    Balfes Bar and Brasserie
                  </p>
                </li>
                <li class="hotel__item line">
                  <p class="hotel__text tx-17">
                    Afternoon tea at the gallery
                  </p>
                </li>
                <li class="hotel__item line">
                  <p class="hotel__text tx-17">
                    Wild
                  </p>
                </li>
                <li class="hotel__item line">
                  <p class="hotel__text tx-17">
                    Stroller
                  </p>
                </li>
                <li class="hotel__item line">
                  <p class="hotel__text tx-17">
                    Gym
                  </p>
                </li>
                <li class="hotel__item line">
                  <p class="hotel__text tx-17">
                    Business center
                  </p>
                </li>
                <li class="hotel__item line">
                  <p class="hotel__text tx-17">
                    Laundry/dry cleaning
                  </p>
                </li>
                <li class="hotel__item line">
                  <p class="hotel__text tx-17">
                    Parking on site
                  </p>
                </li>
                <li class="hotel__item line">
                  <p class="hotel__text tx-17">
                    Driver services
                  </p>
                </li>
                <li class="hotel__item line">
                  <p class="hotel__text tx-17">
                    24-hour room service
                  </p>
                </li>
              </ul>
            </div>
            <ul class="hotel__images">
              <li class="hotel__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-1.webp" type="image/webp">
                  <img src="./img/hotel-1.jpg" loading="lazy" width="336" height="336" alt="Hotel amenities">
                </picture>
              </li>
              <li class="hotel__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-2.webp" type="image/webp">
                  <img src="./img/hotel-2.jpg" loading="lazy" width="336" height="336" alt="Hotel amenities">
                </picture>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end hotel -->

      <!-- start accommodation -->
      <section class="accommodation" id="accommodation">
        <div class="container">
          <h2 class="accommodation__title tx-22 circle">
            Accommodation
          </h2>
          <div class="accommodation-wrapper-slider">

            <div class="accommodation-slider swiper">
              <div class="accommodation-slider__wrapper swiper-wrapper">
                <div class="accommodation-slider__slide swiper-slide">
                  <div class="accommodation-slider__image">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/accorm-1.webp" type="image/webp">
                      <img src="./img/accorm-1.jpg" loading="lazy" width="336" height="336"
                        alt="Classic Room 1 Queen Bed">
                    </picture>
                  </div>
                  <div class="accommodation-slider__descr">
                    <div class="accommodation-slider__subtitle tx-22">
                      Classic Room 1 Queen Bed
                    </div>
                    <ul class="accommodation-slider__info">
                      <li class="accommodation-slider__info-item tx-17">
                        Room size: 270 sq ft / 25 sq m
                      </li>
                      <li class="accommodation-slider__info-item tx-17">
                        Max occupancy: 2 adults
                      </li>
                      <li class="accommodation-slider__info-item tx-17">
                        Complimentary Wi-Fi
                      </li>
                      <li class="accommodation-slider__info-item tx-17">
                        Air conditioning
                      </li>
                    </ul>
                    <div class="accommodation-slider__texts">
                      <p class="accommodation-slider__text tx-17">
                        A classic room at The Westbury Hotel is the epitome of luxury, elegance and comfort. The hotel
                        is one of the best in Ireland and is highly rated for its attention to detail and providing new
                        facilities for its guests.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accommodation-slider__slide swiper-slide">
                  <div class="accommodation-slider__image">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/accorm-2.webp" type="image/webp">
                      <img src="./img/accorm-2.jpg" loading="lazy" width="336" height="336" alt="Luxury Suite">
                    </picture>
                  </div>
                  <div class="accommodation-slider__descr">
                    <div class="accommodation-slider__subtitle tx-22">
                      Luxury Suite
                    </div>
                    <ul class="accommodation-slider__info">
                      <li class="accommodation-slider__info-item tx-17">
                        Room size: Spanning 775 sq ft. / 72 sq. m
                      </li>
                      <li class="accommodation-slider__info-item tx-17">
                        Max occupancy: 2 adults
                      </li>
                      <li class="accommodation-slider__info-item tx-17">
                        City view
                      </li>
                      <li class="accommodation-slider__info-item tx-17">
                        Separate living area
                      </li>
                    </ul>
                    <div class="accommodation-slider__texts">
                      <p class="accommodation-slider__text tx-17">
                        Suite rooms at The Westbury Hotel offer the highest level of comfort and space. Inside you will
                        find contemporary design and state-of-the-art amenities to make your stay unforgettable.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accommodation-slider__slide swiper-slide">
                  <div class="accommodation-slider__image">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/accorm-3.webp" type="image/webp">
                      <img src="./img/accorm-3.jpg" loading="lazy" width="336" height="336" alt="Studio Suite">
                    </picture>
                  </div>
                  <div class="accommodation-slider__descr">
                    <div class="accommodation-slider__subtitle tx-22">
                      Studio Suite
                    </div>
                    <ul class="accommodation-slider__info">
                      <li class="accommodation-slider__info-item tx-17">
                        Room size: 495 sq ft. / 46 sq. m
                      </li>
                      <li class="accommodation-slider__info-item tx-17">
                        Max occupancy: 2 adults
                      </li>
                      <li class="accommodation-slider__info-item tx-17">
                        Complimentary Wi-Fi
                      </li>
                      <li class="accommodation-slider__info-item tx-17">
                        Bathrobes and slippers
                      </li>
                    </ul>
                    <div class="accommodation-slider__texts">
                      <p class="accommodation-slider__text tx-17">
                        A luxury room at The Westbury hotel in Ireland is chic and luxury in one. The Westbury Hotel is
                        renowned for its impeccable service and world-class facilities, making it one of the top hotels
                        in the region.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accommodation-slider__slide swiper-slide">
                  <div class="accommodation-slider__image">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/accorm-4.webp" type="image/webp">
                      <img src="./img/accorm-4.jpg" loading="lazy" width="336" height="336" alt="Deluxe Twin">
                    </picture>
                  </div>
                  <div class="accommodation-slider__descr">
                    <div class="accommodation-slider__subtitle tx-22">
                      Deluxe Twin
                    </div>
                    <ul class="accommodation-slider__info">
                      <li class="accommodation-slider__info-item tx-17">
                        Room size: 376 sq. ft / 35 sq. m
                      </li>
                      <li class="accommodation-slider__info-item tx-17">
                        Max occupancy: 2 adults
                      </li>
                      <li class="accommodation-slider__info-item tx-17">
                        Nespresso coffee machine
                      </li>
                      <li class="accommodation-slider__info-item tx-17">
                        Original artwork
                      </li>
                    </ul>
                    <div class="accommodation-slider__texts">
                      <p class="accommodation-slider__text tx-17">
                        Inside the rooms, guests can enjoy soft beds with fine linens to provide maximum comfort during
                        their stay.
                      </p>
                    </div>
                  </div>
                </div>
                <div class="accommodation-slider__slide swiper-slide">
                  <div class="accommodation-slider__image">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/accorm-5.webp" type="image/webp">
                      <img src="./img/accorm-5.jpg" loading="lazy" width="336" height="336" alt="">
                    </picture>
                  </div>
                  <div class="accommodation-slider__descr">
                    <div class="accommodation-slider__subtitle tx-22">
                      Deluxe King Room
                    </div>
                    <ul class="accommodation-slider__info">
                      <li class="accommodation-slider__info-item tx-17">
                        Room size: 376 sq ft / 35 sq m
                      </li>
                      <li class="accommodation-slider__info-item tx-17">
                        Max occupancy: 2 adults
                      </li>
                      <li class="accommodation-slider__info-item tx-17">
                        Original artwork
                      </li>
                      <li class="accommodation-slider__info-item tx-17">
                        Duck down duvet
                      </li>
                    </ul>
                    <div class="accommodation-slider__texts">
                      <p class="accommodation-slider__text tx-17">
                        Deluxe rooms offer modern amenities and stylish design. Guests immediately feel an atmosphere of
                        coziness and luxury, thanks to carefully selected furniture and refined finishes.
                      </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="accommodation-slider-controls">
              <button class="accommodation-slider-controls__button accommodation-slider-prev">
                <img src="./img/arrow.svg" loading="lazy" width="32" height="32" alt="Arrow">
              </button>
              <div class="accommodation-slider-controls__pagination accommodation-slider-pagination"></div>
              <button class="accommodation-slider-controls__button accommodation-slider-next">
                <img src="./img/arrow.svg" loading="lazy" width="32" height="32" alt="Arrow">
              </button>
            </div>

          </div>
        </div>
      </section>
      <!-- end accommodation -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>