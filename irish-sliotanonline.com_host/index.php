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
          <div class="hero__descr">
            <h1 class="hero__title tt-64-47">
              The Europe Hotel & Resort
            </h1>
            <div class="hero__texts">
              <p class="hero__text tx-17">
                The Europe Hotel & Resort is located in a beautiful location in Ireland and is one of the best hotels in
                the region. This luxury hotel offers an unforgettable stay and an unrivaled holiday experience.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start ente -->
      <section class="ente" id="ente">
        <div class="container">
          <div class="ente__head">
            <h2 class="ente__title tt-53-40">
              Entertainment
            </h2>
            <p class="ente__text ente__text_transform tx-23">
              ACTIVITIES & ADVENTURE IN KILLARNEY
            </p>
          </div>
          <ul class="ente__list">
            <li class="ente__item">
              <div class="ente__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/ent-1.webp" type="image/webp">
                  <img src="./img/ent-1.jpg" loading="lazy" width="336" height="336" alt="Complimentary Horse Riding">
                </picture>
              </div>
              <p class="ente__text ente__text_color tx-23">
                Complimentary Horse Riding
              </p>
            </li>
            <li class="ente__item">
              <div class="ente__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/ent-2.webp" type="image/webp">
                  <img src="./img/ent-2.jpg" loading="lazy" width="336" height="336"
                    alt="Active Level of ESPA at The Europe">
                </picture>
              </div>
              <p class="ente__text ente__text_color tx-23">
                Active Level of ESPA at The Europe
              </p>
            </li>
            <li class="ente__item">
              <div class="ente__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/ent-3.webp" type="image/webp">
                  <img src="./img/ent-3.jpg" loading="lazy" width="336" height="336"
                    alt="Spa Level of ESPA at The Europe">
                </picture>
              </div>
              <p class="ente__text ente__text_color tx-23">
                Spa Level of ESPA at The Europe
              </p>
            </li>
          </ul>
        </div>
      </section>
      <!-- end ente -->

      <!-- start hotels -->
      <section class="hotels" id="hotels">
        <div class="container">
          <h2 class="hotels__title tt-53-40">
            Hotel rooms
          </h2>
          <div class="hotels-wrapper-slider">
            <div class="hotels-slider swiper">
              <div class="swiper-wrapper">
                <div class="hotels-slider__slide swiper-slide">
                  <div class="hotels-slider__image">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/hotel-1.webp" type="image/webp">
                      <img src="./img/hotel-1.jpg" loading="lazy" width="300" height="300" alt="Golfside Rooms">
                    </picture>
                  </div>
                  <div class="hotels-slider__info">
                    <div class="hotels-slider__subtitle tx-23">
                      Golfside Rooms
                    </div>
                    <ul class="hotels-slider__info-list">
                      <li class="hotels-slider__info-item tx-17">
                        32m2
                      </li>
                      <li class="hotels-slider__info-item tx-17">
                        Double Rooms have 1 Super King Bed.
                      </li>
                      <li class="hotels-slider__info-item tx-17">
                        Large Ensuite Bathroom with Rainforest Showers & Separate Baths
                      </li>
                    </ul> 
                  </div>
                  <div class="hotels-slider__texts">
                    <p class="hotels-slider__text tx-17">
                      The standard rooms at The Europe Hotel & Resort in Ireland are some of the best in their class.
                      These rooms combine comfort, elegance and high quality service, exceptional for this licensed
                      hotel.
                    </p>
                  </div>
                </div>
                <div class="hotels-slider__slide swiper-slide">
                  <div class="hotels-slider__image">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/hotel-2.webp" type="image/webp">
                      <img src="./img/hotel-2.jpg" loading="lazy" width="300" height="300" alt="Deluxe Lakeview Rooms">
                    </picture>
                  </div>
                  <div class="hotels-slider__info">
                    <div class="hotels-slider__subtitle tx-23">
                      Deluxe Lakeview Rooms
                    </div>
                    <ul class="hotels-slider__info-list">
                      <li class="hotels-slider__info-item tx-17">
                        41 m2
                      </li>
                      <li class="hotels-slider__info-item tx-17">
                        Spacious Bedroom with 1 Super King or Twin Beds
                      </li>
                      <li class="hotels-slider__info-item tx-17">
                        Large Ensuite Bathroom with Separate Bath & Shower
                      </li>
                    </ul> 
                  </div>
                  <div class="hotels-slider__texts">
                    <p class="hotels-slider__text tx-17">
                      Currently one of the best rooms at The Europe Hotel & Resort in Ireland is the Deluxe Lake View
                      Room. This room offers unparalleled comfort and luxury, combining stylish design and modern
                      amenities.
                    </p>
                  </div>
                </div>
                <div class="hotels-slider__slide swiper-slide">
                  <div class="hotels-slider__image">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/hotel-3.webp" type="image/webp">
                      <img src="./img/hotel-3.jpg" loading="lazy" width="300" height="300" alt="Presidential Suite">
                    </picture>
                  </div>
                  <div class="hotels-slider__info">
                    <div class="hotels-slider__subtitle tx-23">
                      Presidential Suite
                    </div>
                    <ul class="hotels-slider__info-list">
                      <li class="hotels-slider__info-item tx-17">
                        146m2
                      </li>
                      <li class="hotels-slider__info-item tx-17">
                        Super King Size Bed in Master Bedroom
                      </li>
                      <li class="hotels-slider__info-item tx-17">
                        Large Ensuite bathroom with jacuzzi bath and steam shower
                      </li>
                    </ul> 
                  </div>
                  <div class="hotels-slider__texts">
                    <p class="hotels-slider__text tx-17">
                      The Presidential Suite at The Europe Hotel & Resort in Ireland is the pinnacle of luxury and
                      comfort. They are rightly considered one of the best rooms in the hotel and meet the highest
                      quality standards, being in full compliance with licensed norms and requirements.
                    </p>
                  </div>
                </div>
                <div class="hotels-slider__slide swiper-slide">
                  <div class="hotels-slider__image">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/hotel-4.webp" type="image/webp">
                      <img src="./img/hotel-4.jpg" loading="lazy" width="300" height="300" alt="Lakeview Family Suite">
                    </picture>
                  </div>
                  <div class="hotels-slider__info">
                    <div class="hotels-slider__subtitle tx-23">
                      Lakeview Family Suite
                    </div>
                    <ul class="hotels-slider__info-list">
                      <li class="hotels-slider__info-item tx-17">
                        29.8 m2
                      </li>
                      <li class="hotels-slider__info-item tx-17">
                        Super King Size Bed in Master & 3 x Continental
                      </li>
                      <li class="hotels-slider__info-item tx-17">
                        Ensuite Bathroom to Master Bedroom and additional ensuite shower room
                      </li>
                    </ul> 
                  </div>
                  <div class="hotels-slider__texts">
                    <p class="hotels-slider__text tx-17">
                      The interior of the room reflects sophistication and elegance, using natural colors and
                      expensive materials. Large windows allow you to enjoy magnificent views of the lake, surrounded
                      by the picturesque natural scenery of Ireland.
                    </p>
                  </div>
                </div>
                <div class="hotels-slider__slide swiper-slide">
                  <div class="hotels-slider__image">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/hotel-5.webp" type="image/webp">
                      <img src="./img/hotel-5.jpg" loading="lazy" width="300" height="300" alt="Signature Suites">
                    </picture>
                  </div>
                  <div class="hotels-slider__info">
                    <div class="hotels-slider__subtitle tx-23">
                      Signature Suites
                    </div>
                    <ul class="hotels-slider__info-list">
                      <li class="hotels-slider__info-item tx-17">
                        66m2
                      </li>
                      <li class="hotels-slider__info-item tx-17">
                        Super King Size Bed
                      </li>
                      <li class="hotels-slider__info-item tx-17">
                        Large Ensuite Bathroom with Rainforest Shower and Separate Bath
                      </li>
                    </ul> 
                  </div>
                  <div class="hotels-slider__texts">
                    <p class="hotels-slider__text tx-17">
                      The Luxury room is licensed and meets the highest quality standards. This room offers
                      unparalleled comfort and luxury, combining stylish design and modern amenities.
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="hotels-slider-pagination"></div>
          </div>
        </div>
      </section>
      <!-- end hotels -->

      <!-- start bar -->
      <section class="bar" id="bar">
        <div class="bar__container container">
          <h2 class="bar__title tt-53-40">
            Bar and lounge areas
          </h2>
        </div>
        <div class="bar__content">
          <div class="bar__wrapper-descr">
            <div class="bar__descr">
              <h3 class="bar__mintitle tt-31-26">
                Five Star Casual Dining
              </h3>
              <div class="bar__texts">
                <p class="bar__text tx-17">
                  The bar and lounge area of The Europe Hotel & Resort in Ireland is one of the best of its kind,
                  offering
                  guests a luxurious and cozy place to relax and enjoy great evening entertainment. This area is fully
                  licensed and meets the highest standards of quality and service.
                </p>
                <p class="bar__text tx-17">
                  The hotel bar offers a wide selection of alcoholic and non-alcoholic drinks, including fine cocktails,
                  wines and craft beers. You'll enjoy the space's superb ambience and amenities, including comfortable
                  seating, Irish heritage décor and friendly service.
                </p>
                <p class="bar__text tx-17">
                  The lounge area offers a cozy and relaxed space, ideal for meeting friends or business meetings. Here
                  you can relax at a table with armchairs or on soft sofas, enjoying the atmosphere and amenities that
                  create the ideal environment for socializing and relaxation.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end bar -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>