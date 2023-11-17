<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Hôtel populaire avec une note élevée">
  <meta property="og:site_name"
    content="Est un hôtel de luxe situé dans la célèbre région de Bordeaux en France. Cet hôtel offre une expérience unique combinant le luxe d'un château et la tradition viticole.">
  <meta name="twitter:title" content="Hôtel populaire avec une note élevée">
  <meta name="twitter:description"
    content="Est un hôtel de luxe situé dans la célèbre région de Bordeaux en France. Cet hôtel offre une expérience unique combinant le luxe d'un château et la tradition viticole.">
  <meta name="description"
    content="Est un hôtel de luxe situé dans la célèbre région de Bordeaux en France. Cet hôtel offre une expérience unique combinant le luxe d'un château et la tradition viticole.">
  <title>Hôtel populaire avec une note élevée</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/CroissantOne-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/WorkSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
          <p class="popup__text">Nos jeux sont destinés à un public ADULTE de plus de 18 ans. Cliquez sur Accepté pour
            confirmer votre âge.</p>
          <button class="popup__button">Accepté</button>
        </div>
      </section>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero">
        <div class="hero__container container">
          <div class="hero__top">
            <h1 class="hero__title tt-46-32">
              L'hôtel Château Léognan
            </h1>
            <div class="hero__texts">
              <p class="hero__text tx-18-16">
                Est un hôtel de luxe situé dans la célèbre région de Bordeaux en France. Cet hôtel offre une expérience
                unique combinant le luxe d'un château et la tradition viticole.
              </p>
              <p class="hero__text tx-18-16">
                Le Château Léognan - Bordeaux - Nouvelle Ouverture est un lieu où le luxe rencontre la tradition et
                l'histoire de la viticulture, ce qui en fait un choix idéal pour les amateurs de vin, les voyageurs
                romantiques et ceux qui recherchent l'isolement au milieu de la nature.
              </p>
              <p class="hero__text tx-18-16">
                I'hôtel peut donner accès à des expositions artistiques et à des événements culturels afin que les
                clients puissent s'immerger dans la culture française.
              </p>
            </div>
            <ul class="hero__images">
              <li class="hero__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hero-1.webp" type="image/webp">
                  <img src="./img/hero-1.jpg" width="300" height="300" alt=" L'hôtel Château Léognan">
                </picture>
              </li>
              <li class="hero__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hero-2.webp" type="image/webp">
                  <img src="./img/hero-2.jpg" width="300" height="300" alt=" L'hôtel Château Léognan">
                </picture>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start situation -->
      <section class="situation" id="situation">
        <div class="container">
          <h2 class="situation__title tt-46-32">
            Emplacement
          </h2>
          <ul class="situation__list">
            <li class="situation__item">
              <div class="situation__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/mesto-1.webp" type="image/webp">
                  <img src="./img/mesto-1.jpg" loading="lazy" width="300" height="300" alt="Situation">
                </picture>
              </div>
              <div class="situation__texts">
                <p class="situation__text tx-18-16">
                  Le Château Léognan est situé au cœur de la région de Bordeaux, ce qui en fait une destination idéale
                  pour les amateurs de vin et d'art. L'hôtel est situé dans la région viticole de Pessac-Léognan,
                  célèbre pour ses vignobles et ses vins.
                </p>
              </div>
            </li>
            <li class="situation__item">
              <div class="situation__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/mesto-2.webp" type="image/webp">
                  <img src="./img/mesto-2.jpg" loading="lazy" width="300" height="300" alt="Situation">
                </picture>
              </div>
              <div class="situation__texts">
                <p class="situation__text tx-18-16">
                  I'hôtel est situé dans un complexe de propriétés avec un magnifique château qui recrée l'atmosphère du
                  vieux Bordeaux. Les clients peuvent savourer l'histoire en faisant le tour du château et de ses
                  environs.
                </p>
              </div>
            </li>
            <li class="situation__item">
              <div class="situation__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/mesto-3.webp" type="image/webp">
                  <img src="./img/mesto-3.jpg" loading="lazy" width="300" height="300" alt="Situation">
                </picture>
              </div>
              <div class="situation__texts">
                <p class="situation__text tx-18-16">
                  l'hôtel est situé au milieu des vignobles, ce qui permet aux clients de profiter de la beauté et de la
                  tranquillité de cette région viticole.
                </p>
              </div>
            </li>
            <li class="situation__item">
              <div class="situation__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/mesto-4.webp" type="image/webp">
                  <img src="./img/mesto-4.jpg" loading="lazy" width="300" height="300" alt="Situation">
                </picture>
              </div>
              <div class="situation__texts">
                <p class="situation__text tx-18-16">
                  les environs offrent d'excellentes possibilités de randonnées, d'exploration de la nature et de
                  détente dans la belle campagne.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end situation -->

      <!-- start hebergement -->
      <section class="hebergement" id="hebergement">
        <div class="container">
          <h2 class="hebergement__title tt-40-28">
            Hébergement et chambres
          </h2>
          <div class="hebergement__item">
            <div class="hebergement__left">
              <div class="hebergement__texts">
                <p class="hebergement__text tx-20-18">
                  L'hôtel propose des chambres et des suites confortables avec un décor exquis qui reflète la valeur
                  historique du lieu. Les chambres sont dotées d'équipements modernes et offrent des vues sur les
                  vignobles.
                </p>
              </div>
            </div>
            <ul class="hebergement__images">
              <li class="hebergement__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-1.webp" type="image/webp">
                  <img src="./img/hotel-1.jpg" loading="lazy" width="300" height="300" alt="Hébergement et chambres">
                </picture>
              </li>
              <li class="hebergement__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-2.webp" type="image/webp">
                  <img src="./img/hotel-2.jpg" loading="lazy" width="300" height="300" alt="Hébergement et chambres">
                </picture>
              </li>
              <li class="hebergement__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-3.webp" type="image/webp">
                  <img src="./img/hotel-3.jpg" loading="lazy" width="300" height="300" alt="Hébergement et chambres">
                </picture>
              </li>
            </ul>
          </div>
        </div>
      </section>
      <!-- end hebergement -->

      <!-- start restaurant -->
      <section class="restaurant" id="restaurant">
        <div class="restaurant__container container">
          <h2 class="restaurant__title tt-40-28">
            Restaurant
          </h2>
          <ul class="restaurant__list">
            <li class="restaurant__item">
              <div class="restaurant__descr">
                <div class="restaurant__texts">
                  <p class="restaurant__text tx-18-16">
                    L'hôtel dispose d'un restaurant servant une cuisine française et des vins produits sur place. Les
                    clients peuvent apprécier une cuisine et des vins exceptionnels dans une atmosphère chaleureuse. 
                  </p>
                </div>
              </div>
              <div class="restaurant__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/rest-1.webp" type="image/webp">
                  <img src="./img/rest-1.jpg" loading="lazy" width="300" height="300" alt="Restaurant">
                </picture>
              </div>
            </li>
            <li class="restaurant__item">
              <div class="restaurant__descr">
                <div class="restaurant__texts">
                  <p class="restaurant__text tx-18-16">
                    le Château Léognan est un domaine viticole et les clients ont la possibilité de participer à des
                    visites du domaine et à des dégustations de vins pour en apprendre davantage sur la richesse du
                    patrimoine viticole de la région.
                  </p>
                </div>
              </div>
              <div class="restaurant__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/rest-2.webp" type="image/webp">
                  <img src="./img/rest-2.jpg" loading="lazy" width="300" height="300" alt="Restaurant">
                </picture>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end restaurant -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>