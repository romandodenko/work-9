<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Nobu Hotel Barcelona es un hotel de lujo ubicado en España.">
  <meta property="og:site_name"
    content="Es famoso por su excelente calidad de servicio. El hotel goza de una alta valoración debido a su incomparable confort y su elegante diseño.">
  <meta name="twitter:title" content="Nobu Hotel Barcelona es un hotel de lujo ubicado en España.">
  <meta name="twitter:description"
    content="Es famoso por su excelente calidad de servicio. El hotel goza de una alta valoración debido a su incomparable confort y su elegante diseño.">
  <meta name="description"
    content="Es famoso por su excelente calidad de servicio. El hotel goza de una alta valoración debido a su incomparable confort y su elegante diseño.">
  <title>Nobu Hotel Barcelona es un hotel de lujo ubicado en España.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/PlayfairDisplay-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/PlayfairDisplay-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
          <p class="popup__text">Nuestros juegos están destinados a un público ADULTO mayor de 18 años. Haz clic en
            Aceptado para confirmar tu edad.</p>
          <button class="popup__button">Aceptado</button>
        </div>
      </section>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__descr">
            <div class="hero__texts">
              <p class="hero__text tx-17">
                El Nobu Hotel Barcelona en España es uno de los mejores lugares de lujo para alojarse y está altamente
                calificado. Es famoso por su servicio de primera clase y su diseño moderno.
              </p>
            </div>
            <h1 class="hero__title tt-64-40">
              Nobu Hotel Barcelona
            </h1>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start spa -->
      <section class="spa" id="spa">
        <div class="container">
          <h2 class="spa__title tt-53-36">
            Spa y bienestar
          </h2>
          <div class="spa__content">
            <div class="spa__image spa__image_1">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/spa-1.webp" type="image/webp">
                <img src="./img/spa-1.jpg" loading="lazy" width="336" height="336" alt="Spa y bienestar">
              </picture>
            </div>
            <div class="spa__image spa__image_2">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/spa-2.webp" type="image/webp">
                <img src="./img/spa-2.jpg" loading="lazy" width="336" height="336" alt="Spa y bienestar">
              </picture>
            </div>
            <div class="spa__descr">
              <div class="spa__subtitle tt-31-26">
                SPA NOBU
              </div>
              <div class="spa__texts">
                <p class="spa__text tx-17">
                  El spa del Nobu Hotel Barcelona en España está legítimamente clasificado entre los mejores y tiene una
                  alta calificación entre todos los spas de la región. Este spa presenta un diseño oriental innovador y
                  ofrece a los huéspedes uno de los enfoques más nuevos y avanzados para el bienestar y la relajación.
                </p>
                <p class="spa__text tx-17">
                  Una visita al spa de Nobu Hotel Barcelona es una experiencia inmersiva de lujo y bienestar. Con el
                  diseño sutil y elegante del spa, los huéspedes experimentarán inmediatamente un ambiente relajante y
                  tranquilo. Interiores únicos que crean armonía y tranquilidad, combinados con una iluminación suave y
                  música agradable, le permitirán sumergirse en un estado de profunda relajación.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end spa -->

      <!-- start ofertas -->
      <section class="ofertas" id="ofertas">
        <div class="container">
          <h2 class="ofertas__title tt-53-36">
            Ofertas
          </h2>
          <ul class="ofertas__list">
            <li class="ofertas__item">
              <div class="ofertas__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/ofertas-1.webp" type="image/webp">
                  <img src="./img/ofertas-1.jpg" loading="lazy" width="336" height="336" alt="">
                </picture>
              </div>
              <div class="ofertas__descr">
                <div class="ofertas__subtitle tt-31-26">
                  Quédate más tiempo en NOBU
                </div>
                <div class="ofertas__texts">
                  <p class="ofertas__text tx-17">
                    Nobu Hotel Barcelona es un hotel de primera clase en España, que ha ocupado un lugar destacado en la
                    lista de los mejores hoteles. Goza de una alta valoración entre los viajeros debido a su lujoso
                    interior y su servicio de primera clase.
                  </p>
                </div>
              </div>
            </li>
            <li class="ofertas__item">
              <div class="ofertas__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/ofertas-2.webp" type="image/webp">
                  <img src="./img/ofertas-2.jpg" loading="lazy" width="336" height="336" alt="">
                </picture>
              </div>
              <div class="ofertas__descr">
                <div class="ofertas__subtitle tt-31-26">
                  ESCAPADA DE OTOÑO
                </div>
                <div class="ofertas__texts">
                  <p class="ofertas__text tx-17">
                    Una estancia de otoño en Nobu Hotel Barcelona es una experiencia inolvidable que se sitúa entre los
                    mejores hoteles de España. El hotel está altamente valorado por su lujo inigualable y la calidad de
                    su servicio.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end ofertas -->

      <!-- start hotel -->
      <section class="hotel" id="hotel">
        <div class="container">
          <h2 class="hotel__title tt-53-36">
            Habitaciones de hotel
          </h2>
          <div class="hotel-wrapper-slider">
            <div class="hotel-slider swiper">
              <div class="swiper-wrapper">
                <div class="hotel-slider__slide swiper-slide">
                  <div class="hotel-slider__image">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/hotel-1.webp" type="image/webp">
                      <img src="./img/hotel-1.jpg" loading="lazy" width="336" height="336" alt="Habitaciones de lujo">
                    </picture>
                  </div>
                  <div class="hotel-slider__descr">
                    <div class="hotel-slider__column">
                      <div class="hotel-slider__subtitle tt-31-26">
                        Habitaciones de lujo
                      </div>
                      <div class="hotel-slider__texts">
                        <p class="hotel-slider__text tx-17">
                          Bienvenido al lujoso Nobu Hotel Barcelona, ​​que se ha ganado el lugar que le corresponde en
                          la lista de hoteles mejor valorados de España.
                        </p>
                      </div>
                    </div>
                    <div class="hotel-slider__column">
                      <div class="hotel-slider__subtitle tx-22">
                        CARACTERÍSTICAS
                      </div>
                      <ul class="hotel-slider__list">
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            30 m² / 323 pies²
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Wi-Fi gratuito en la habitación
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Cama king size
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Televisor LCD de 65 pulgadas
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Baño de mármol con ducha tipo lluvia
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Cafetera nespresso
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Altavoz Bluetooth Marshall
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="hotel-slider__slide swiper-slide">
                  <div class="hotel-slider__image">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/hotel-2.webp" type="image/webp">
                      <img src="./img/hotel-2.jpg" loading="lazy" width="336" height="336"
                        alt="HABITACIONES SKYLINE PREMIUM">
                    </picture>
                  </div>
                  <div class="hotel-slider__descr">
                    <div class="hotel-slider__column">
                      <div class="hotel-slider__subtitle tt-31-26">
                        HABITACIONES SKYLINE PREMIUM
                      </div>
                      <div class="hotel-slider__texts">
                        <p class="hotel-slider__text tx-17">
                          Bienvenido a Nobu Hotel Barcelona, ​​un hotel de primer nivel y mejor puntuación en España.
                        </p>
                      </div>
                    </div>
                    <div class="hotel-slider__column">
                      <div class="hotel-slider__subtitle tx-22">
                        CARACTERÍSTICAS
                      </div>
                      <ul class="hotel-slider__list">
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            35m² / 377 pies²
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Wi-Fi gratuito en la habitación
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Vistas de ventanas del piso al techo
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Cama king size / Camas dobles Queen bajo petición
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Televisor LCD de 65 pulgadas
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Baño de mármol con ducha tipo lluvia
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Cafetera expreso
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="hotel-slider__slide swiper-slide">
                  <div class="hotel-slider__image">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/hotel-3.webp" type="image/webp">
                      <img src="./img/hotel-3.jpg" loading="lazy" width="336" height="336" alt="HABITACIONES PREMIUM">
                    </picture>
                  </div>
                  <div class="hotel-slider__descr">
                    <div class="hotel-slider__column">
                      <div class="hotel-slider__subtitle tt-31-26">
                        HABITACIONES PREMIUM
                      </div>
                      <div class="hotel-slider__texts">
                        <p class="hotel-slider__text tx-17">
                          Las habitaciones están equipadas con todo lo necesario para tu comodidad, incluyendo amplias
                          camas con mullidos colchones, mullidas almohadas y batas para que puedas conciliar un sueño
                          reparador.
                        </p>
                      </div>
                    </div>
                    <div class="hotel-slider__column">
                      <div class="hotel-slider__subtitle tx-22">
                        CARACTERÍSTICAS
                      </div>
                      <ul class="hotel-slider__list">
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            35m² / 377 pies²
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Wi-Fi gratuito en la habitación
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Vistas de ventanas del piso al techo
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Cama king size / Camas dobles Queen bajo petición
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Televisor LCD de 65 pulgadas
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Baño de mármol con ducha tipo lluvia
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Cafetera expreso
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="hotel-slider__slide swiper-slide">
                  <div class="hotel-slider__image">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/hotel-4.webp" type="image/webp">
                      <img src="./img/hotel-4.jpg" loading="lazy" width="336" height="336"
                        alt="HABITACIONES DE LUJO SKYLINE">
                    </picture>
                  </div>
                  <div class="hotel-slider__descr">
                    <div class="hotel-slider__column">
                      <div class="hotel-slider__subtitle tt-31-26">
                        HABITACIONES DE LUJO SKYLINE
                      </div>
                      <div class="hotel-slider__texts">
                        <p class="hotel-slider__text tx-17">
                          El diseño moderno, el uso de materiales naturales y muebles sofisticados crean un ambiente
                          elegante en el que podrá relajarse y descansar.
                        </p>
                      </div>
                    </div>
                    <div class="hotel-slider__column">
                      <div class="hotel-slider__subtitle tx-22">
                        CARACTERÍSTICAS
                      </div>
                      <ul class="hotel-slider__list">
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            30 m² / 323 pies²
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Wi-Fi gratuito en la habitación
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Ventanas de piso a techo
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            cama king size
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Televisor LCD de 65 pulgadas
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Baño de mármol con ducha tipo lluvia
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Cafetera nespresso
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="hotel-slider__slide swiper-slide">
                  <div class="hotel-slider__image">
                    <picture>
                      <source media="(min-width: 320px)" srcset="./img/hotel-5.webp" type="image/webp">
                      <img src="./img/hotel-5.jpg" loading="lazy" width="336" height="336"
                        alt="HABITACIONES CIUDAD DE LUJO">
                    </picture>
                  </div>
                  <div class="hotel-slider__descr">
                    <div class="hotel-slider__column">
                      <div class="hotel-slider__subtitle tt-31-26">
                        HABITACIONES CIUDAD DE LUJO
                      </div>
                      <div class="hotel-slider__texts">
                        <p class="hotel-slider__text tx-17">
                          Cuando ingrese a su habitación de lujo, será recibido por una atmósfera de lujo y comodidad.
                        </p>
                      </div>
                    </div>
                    <div class="hotel-slider__column">
                      <div class="hotel-slider__subtitle tx-22">
                        CARACTERÍSTICAS
                      </div>
                      <ul class="hotel-slider__list">
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            30 m² / 323 pies²
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Wi-Fi gratuito en la habitación
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Ventanas de piso a techo
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            cama king size
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Televisor LCD de 65 pulgadas
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Baño de mármol con ducha tipo lluvia
                          </p>
                        </li>
                        <li class="hotel-slider__item circle tx-17">
                          <p class="hotel-slider__text hotel-slider__text_opacity tx-17">
                            Cafetera nespresso
                          </p>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="hotel-controls"> 
              <button class="hotel-controls__button hotel-slider-prev">
                <img src="./img/arrow.svg" loading="lazy" width="32" height="32" alt="Arrow">
              </button>
              <div class="hotel-controls__pagination hotel-slider-pagination tx-17"></div>
              <button class="hotel-controls__button hotel-slider-next">
                <img src="./img/arrow.svg" loading="lazy" width="32" height="32" alt="Arrow">
              </button>
            </div>
          </div>
        </div>
      </section>
      <!-- end  hotel-->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>