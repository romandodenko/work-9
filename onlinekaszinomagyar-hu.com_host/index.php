<!DOCTYPE html>
<html lang="hu">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title"
    content="A magyarországi Mövenpick Balaland Resort az egyik legjobb pihenési és kikapcsolódási hely.">
  <meta property="og:site_name"
    content="Vendégeinek a legjobb életkörülményeket, magas szintű szolgáltatást és biztonságot kínálja. A szállodai szobák teljesen felszereltek mindennel, ami a kényelmes tartózkodáshoz szükséges.">
  <meta name="twitter:title"
    content="A magyarországi Mövenpick Balaland Resort az egyik legjobb pihenési és kikapcsolódási hely.">
  <meta name="twitter:description"
    content="Vendégeinek a legjobb életkörülményeket, magas szintű szolgáltatást és biztonságot kínálja. A szállodai szobák teljesen felszereltek mindennel, ami a kényelmes tartózkodáshoz szükséges.">
  <meta name="description"
    content="Vendégeinek a legjobb életkörülményeket, magas szintű szolgáltatást és biztonságot kínálja. A szállodai szobák teljesen felszereltek mindennel, ami a kényelmes tartózkodáshoz szükséges.">
  <title>A magyarországi Mövenpick Balaland Resort az egyik legjobb pihenési és kikapcsolódási hely.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/SansitaSwashed-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/VarelaRound-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
          <p class="popup__text">
            Játékainkat 18 éven felüli FELNŐTT közönségnek szánjuk. Életkorának megerősítéséhez kattintson az Elfogadott
            gombra.
          </p>
          <button class="popup__button">Elfogadott</button>
        </div>
      </section>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__descr">
            <p class="hero__text tx-23">
              Ötcsillagos üdülőszálloda Mövenpick Balaland Balaton
            </p>
            <h1 class="hero__title tt-64-56">
              Mövenpick
            </h1>
            <p class="hero__text tx-16">
              A Mövenpick Balaland Resort Magyarország egyik legjobb szállodája. Vendégeinek minőségi szolgáltatást és
              kényelmet kínál.
            </p>
          </div>
          <a class="hero__link" href="#szamok">
            <img src="./img/arrow.svg" loading="lazy" width="32" height="32" alt="Arrow">
          </a>
        </div>
      </section>
      <!-- end hero -->

      <!-- start szamok -->
      <section class="szamok" id="szamok">
        <div class="container">
          <h2 class="szamok__title tt-53-42">
            Számok
          </h2>
          <ul class="szamok__list">
            <li class="szamok__item">
              <div class="szamok__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-1.webp" type="image/webp">
                  <img src="./img/hotel-1.jpg" loading="lazy" width="336" height="336"
                    alt="Superior szoba kilátással a parkra">
                </picture>
              </div>
              <div class="szamok__descr">
                <div class="szamok__subtitle tx-23">
                  Superior szoba kilátással a parkra
                </div>
                <div class="szamok__texts">
                  <p class="szamok__text tx-16">
                    A törökországi Mövenpick Balaland Resort parkra néző superior szobája ideális választás azok
                    számára, akik értékelik a kényelmet, a biztonságot és az új kényelmi felszereléseket.
                  </p>
                </div>
              </div>
            </li>
            <li class="szamok__item">
              <div class="szamok__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-2.webp" type="image/webp">
                  <img src="./img/hotel-2.jpg" loading="lazy" width="336" height="336"
                    alt="Superior szoba kilátással a tóra">
                </picture>
              </div>
              <div class="szamok__descr">
                <div class="szamok__subtitle tx-23">
                  Superior szoba kilátással a tóra
                </div>
                <div class="szamok__texts">
                  <p class="szamok__text tx-16">
                    A szobából csodálatos kilátás nyílik a szálloda folyójára, ahol zöldterületeket és eldugott légkört
                    élvezhet.
                  </p>
                </div>
              </div>
            </li>
            <li class="szamok__item">
              <div class="szamok__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-3.webp" type="image/webp">
                  <img src="./img/hotel-3.jpg" loading="lazy" width="336" height="336"
                    alt="Junior lakosztály kilátással a parkra">
                </picture>
              </div>
              <div class="szamok__descr">
                <div class="szamok__subtitle tx-23">
                  Junior lakosztály kilátással a parkra
                </div>
                <div class="szamok__texts">
                  <p class="szamok__text tx-16">
                    A törökországi Mövenpick Balaland Resort parkra néző junior lakosztálya kiváló választás azoknak a
                    vendégeknek, akik stílusos és kényelmes szállást keresnek.
                  </p>
                </div>
              </div>
            </li>
            <li class="szamok__item">
              <div class="szamok__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-4.webp" type="image/webp">
                  <img src="./img/hotel-4.jpg" loading="lazy" width="336" height="336"
                    alt="Junior lakosztály kilátással a tóra">
                </picture>
              </div>
              <div class="szamok__descr">
                <div class="szamok__subtitle tx-23">
                  Junior lakosztály kilátással a tóra
                </div>
                <div class="szamok__texts">
                  <p class="szamok__text tx-16">
                    A törökországi Mövenpick Balaland Resort tóra néző junior lakosztályának leírása egyedi és luxus
                    élményt ígér minden vendég számára.
                  </p>
                </div>
              </div>
            </li>
            <li class="szamok__item">
              <div class="szamok__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-5.webp" type="image/webp">
                  <img src="./img/hotel-5.jpg" loading="lazy" width="336" height="336"
                    alt="Deluxe lakosztály kilátással a tóra">
                </picture>
              </div>
              <div class="szamok__descr">
                <div class="szamok__subtitle tx-23">
                  Deluxe lakosztály kilátással a tóra
                </div>
                <div class="szamok__texts">
                  <p class="szamok__text tx-16">
                    A törökországi Mövenpick Balaland Resort egy gyönyörű deluxe szobát kínál lélegzetelállító
                    kilátással a tóra. Ezt a szállodát a régió egyik legjobb szállásának tartják.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end szamok -->

      <!-- start park -->
      <section class="park" id="park">
        <div class="container">
          <h2 class="park__title tt-53-42">
            Családi Park
          </h2>
          <div class="park__subtitle tt-31-26">
            Nyaralás az egész családdal
          </div>
          <div class="park__texts">
            <p class="park__text tx-16">
              A magyarországi Mövenpick Balaland Resort egyedülálló családi parkot kínál, amely az egyik legjobb
              nyaralóhely az egész család számára. Ez a park egy új és biztonságos hely, ahol a gyerekek és a felnőttek
              különféle tevékenységeket folytathatnak, és együtt tölthetik az aktív időt.
            </p>
            <p class="park__text tx-16">
              A Mövenpick Balaland Resort családi parkja túrák és szórakozási lehetőségek széles választékát kínálja
              minden korosztály számára. A gyerekeket extrém csúszdák, gyermekmedencék vízicsúszdával és egy speciális
              homokmedence várja. Tapasztalt személyzet felügyelete mellett felfedezhetik a játszóteret, és különféle
              szervezett tevékenységekben vehetnek részt.
            </p>
          </div>
          <p class="park__bottom-text tx-23">
            CSALÁDI PARK NYITVA MINDEN NAP: 09:00-19:00
          </p>
          <div class="park__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/park.webp" type="image/webp">
              <img src="./img/park.jpg" loading="lazy" width="336" height="336" alt="Családi Park">
            </picture>
          </div>
        </div>
      </section>
      <!-- end park -->

      <!-- start ettermek -->
      <section class="ettermek" id="ettermek">
        <div class="container">
          <h2 class="ettermek__title tt-53-42">
            Ettermek és bárok
          </h2>
          <div class="ettermek__content">
            <ul class="ettermek__images">
              <li class="ettermek__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/eda-1.webp" type="image/webp">
                  <img src="./img/eda-1.jpg" loading="lazy" width="336" height="336" alt="Ettermek és bárok">
                </picture>
              </li>
              <li class="ettermek__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/eda-2.webp" type="image/webp">
                  <img src="./img/eda-2.jpg" loading="lazy" width="336" height="336" alt="Ettermek és bárok">
                </picture>
              </li>
            </ul>
            <div class="ettermek__descr">
              <div class="ettermek__subtitle tt-31-26">
                Kalóz étterem és terasz
              </div>
              <div class="ettermek__texts">
                <p class="ettermek__text tx-16">
                  A törökországi Mövenpick Balaland Resort étterme az egyik legjobb hely, ahol a vendégek finom
                  ételeket, biztonságos légkört és új gasztronómiai élményeket élvezhetnek.
                </p>
                <p class="ettermek__text tx-16">
                  Az étterem igazi mestermű a kulináris világban, változatos ételeivel igazi ízfesztivált kínál. A
                  szakácsok gondosan közelítenek minden ételhez, csak friss és kiváló minőségű alapanyagokat használnak.
                  Itt a vendégek a kulináris élmények széles skáláját kóstolhatják meg, a helyi, hagyományos konyhától a
                  kifinomult nemzetközi konyháig.
                </p>
                <p class="ettermek__text tx-16">
                  A Mövenpick Balaland Resort étterme magas szintű biztonsági és higiéniai színvonaláról is híres. A
                  személyzet minden tagja, beleértve a szakácsokat és a felszolgálókat is, gondoskodik a tisztaságról,
                  valamint betartja a biztonsági protokollokat, hogy a vendégek teljes bizalommal élvezhessék a
                  kulináris élményt.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end ettermek -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>