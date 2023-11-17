<!DOCTYPE html>
<html lang="bg">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title"
    content="Wave Resort - Ultra All Inclusive - луксозен курортен хотел с високо оценени игри и сигурни печалби">
  <meta property="og:site_name"
    content="Wave Resort - Ultra All Inclusive е луксозен курортен хотел, разположен в живописна местност на брега на морето. Този хотел предлага на гостите си висококачествено обслужване, разнообразни удобства и изискана кухня. ">
  <meta name="twitter:title"
    content="Wave Resort - Ultra All Inclusive - луксозен курортен хотел с високо оценени игри и сигурни печалби">
  <meta name="twitter:description"
    content="Wave Resort - Ultra All Inclusive е луксозен курортен хотел, разположен в живописна местност на брега на морето. Този хотел предлага на гостите си висококачествено обслужване, разнообразни удобства и изискана кухня. ">
  <meta name="description"
    content="Wave Resort - Ultra All Inclusive е луксозен курортен хотел, разположен в живописна местност на брега на морето. Този хотел предлага на гостите си висококачествено обслужване, разнообразни удобства и изискана кухня. ">
  <title>Wave Resort - Ultra All Inclusive - луксозен курортен хотел с високо оценени игри и сигурни печалби</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/YoungSerif-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/OpenSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
      <!-- start popup -->
      <section class="popup popup-active" id="popup">
        <div class="popup__close"></div>
        <div class="popup__body">
          <p class="popup__text">Нашите игри са предназначени за ВЪЗРАСТНА аудитория над 18 години. Щракнете върху
            Прието, за да потвърдите възрастта си.</p>
          <button class="popup__button">Прието</button>
        </div>
      </section>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero__video">
          <video src="./video/video.mp4" loop autoplay playsinline preload="metadata" muted 
            width="300" height="300"></video>
        </div>
        <div class="hero__container container">
          <div class="hero__descr">
            <h1 class="hero__title tt-52-36">
              Wave Resort
              <span class="tx-16-14">
                Ultra All Inclusive
              </span>
            </h1>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start about -->
      <section class="about" id="about">
        <div class="container">
          <h2 class="about__title tt-46-32">
            За нас
          </h2>
          <div class="about__content">
            <div class="about__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/about.webp" type="image/webp">
                <img src="./img/about.jpg" loading="lazy" width="300" height="300"
                  alt="За нас Wave Resort - Ultra All Inclusive">
              </picture>
            </div>
            <div class="about__descr">
              <div class="about__texts">
                <p class="about__text tx-16-14">
                  Wave Resort - Ultra All Inclusive е луксозен курортен хотел, разположен в живописна местност на брега
                  на морето. Този хотел предлага на гостите си висококачествено обслужване, разнообразни удобства и
                  изискана кухня.
                </p>
                <p class="about__text tx-16-14">
                  Wave Resort - Ultra All Inclusive е идеалното място за релаксираща и забавна почивка на брега на
                  морето. Хотелът предлага високо ниво на обслужване и комфорт, което прави престоя на гостите
                  незабравим и луксозен.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end about -->

      <!-- start benefits -->
      <section class="benefits" id="benefits">
        <div class="container">
          <h2 class="benefits__title tt-46-32">
            Предимства
          </h2>
          <ul class="benefits__list">
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon-1.svg" loading="lazy" width="32" height="32" alt="Аквапарк">
              </div>
              <div class="benefits__texts">
                <p class="benefits__text tx-24-18">
                  Аквапарк
                </p>
              </div>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon-2.svg" loading="lazy" width="32" height="32" alt="Вечерняя программа">
              </div>
              <div class="benefits__texts">
                <p class="benefits__text tx-24-18">
                  Вечерняя программа
                </p>
              </div>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon-3.svg" loading="lazy" width="32" height="32" alt="6 бассейнов">
              </div>
              <div class="benefits__texts">
                <p class="benefits__text tx-24-18">
                  6 бассейнов
                </p>
              </div>
            </li>
            <li class="benefits__item">
              <div class="benefits__icon">
                <img src="./img/icon-4.svg" loading="lazy" width="32" height="32" alt="Фитнес-центр">
              </div>
              <div class="benefits__texts">
                <p class="benefits__text tx-24-18">
                  Фитнес-центр
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end benefits -->

      <!-- start hotels -->
      <section class="hotels" id="hotels">
        <div class="container">
          <h2 class="hotels__title tt-46-32">
            Просторни стаи
          </h2>
          <div class="hotels__content">
            <div class="hotels__descr">
              <div class="hotels__texts">
                <p class="hotels__text tx-16-14">
                  Хотелът предлага луксозни стаи и апартаменти с модерен дизайн и комфортно обзавеждане. Всички стаи са
                  оборудвани с модерни уреди, климатик и балкони или тераси с изглед към морето или градината.
                </p>
                <p class="hotels__text tx-16-14">
                  Wave Resort предлага ултра ол инклузив, което означава, че гостите могат да се насладят на безплатни
                  ястия и напитки през целия ден. Това включва разнообразие от ресторанти и барове, предлагащи местна и
                  световна кухня.
                </p>
              </div>
            </div>
            <ul class="hotels__images">
              <li class="hotels__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-1.webp" type="image/webp">
                  <img src="./img/hotel-1.jpg" loading="lazy" width="300" height="300" alt="Просторни стаи">
                </picture>
              </li>
              <li class="hotels__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-2.webp" type="image/webp">
                  <img src="./img/hotel-2.jpg" loading="lazy" width="300" height="300" alt="Просторни стаи">
                </picture>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end hotels -->

      <!-- start events -->
      <section class="events" id="events">
        <div class="events__container container">
          <ul class="events__images">
            <li class="events__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/bassein-1.webp" type="image/webp">
                <img src="./img/bassein-1.jpg" loading="lazy" width="300" height="300" alt="Развлечение">
              </picture>
            </li>
            <li class="events__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/bassein-2.webp" type="image/webp">
                <img src="./img/bassein-2.jpg" loading="lazy" width="300" height="300" alt="Развлечение">
              </picture>
            </li>
          </ul>
          <div class="events__descr">
            <h2 class="events__title tt-46-32">
              Развлечение
            </h2>
            <div class="events__texts">
              <p class="events__text tx-16-14">
                Хотелът осигурява достъп до плувни басейни с красива гледка към морето, както и до частен плаж, където
                гостите могат да се отпуснат на шезлонги и да се наслаждават на слънцето.
              </p>
              <p class="events__text tx-16-14">
                За пълноценна релаксация гостите могат да посетят СПА центъра на хотела, който предлага разнообразни
                процедури за тяло, масажи и сауна.
              </p>
            </div>
          </div>
          <ul class="events__images">
            <li class="events__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/bassein-3.webp" type="image/webp">
                <img src="./img/bassein-3.jpg" loading="lazy" width="300" height="300" alt="Развлечение">
              </picture>
            </li>
            <li class="events__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/bassein-4.webp" type="image/webp">
                <img src="./img/bassein-4.jpg" loading="lazy" width="300" height="300" alt="Развлечение">
              </picture>
            </li>
          </ul>
        </div>
      </section>
      <!-- end events -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>