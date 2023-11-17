<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Hôtel populaire avec une note élevée">
  <meta property="og:site_name"
    content="Le Château Prieure Marquet est l'endroit idéal pour ceux qui recherchent l'intimité, une escapade romantique et la possibilité d'apprécier le vin et la culture bordelaise dans l'atmosphère unique d'un ancien château et la beauté naturelle de la région de Bordeaux.">
  <meta name="twitter:title" content="Hôtel populaire avec une note élevée">
  <meta name="twitter:description"
    content="Le Château Prieure Marquet est l'endroit idéal pour ceux qui recherchent l'intimité, une escapade romantique et la possibilité d'apprécier le vin et la culture bordelaise dans l'atmosphère unique d'un ancien château et la beauté naturelle de la région de Bordeaux.">
  <meta name="description"
    content="Le Château Prieure Marquet est l'endroit idéal pour ceux qui recherchent l'intimité, une escapade romantique et la possibilité d'apprécier le vin et la culture bordelaise dans l'atmosphère unique d'un ancien château et la beauté naturelle de la région de Bordeaux.">
  <title>Hôtel populaire avec une note élevée</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/TitilliumWeb-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/IndieFlower-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
          <div class="hero__descr">
            <h1 class="hero__title tt-46-32">
              Le Château Prieure Marquet
            </h1>
            <div class="hero__texts">
              <p class="hero__text tx-18-16">
                Est un hôtel unique situé dans un château du même nom, entouré de vignobles pittoresques dans la région
                de Bordeaux en France. Cet hôtel offre une combinaison de luxe, de tradition viticole et de beauté de la
                nature.
              </p>
              <p class="hero__text tx-18-16">
                Le Château Prieure Marquet est l'endroit idéal pour ceux qui recherchent l'intimité, une escapade
                romantique et la possibilité d'apprécier le vin et la culture bordelaise dans l'atmosphère unique d'un
                ancien château et la beauté naturelle de la région de Bordeaux.
              </p>
            </div>
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
          <div class="situation__texts">
            <p class="situation__text tx-18-16">
              Le Château Prieure Marquet est situé dans la région de Bordeaux, célèbre pour ses domaines viticoles et
              ses châteaux. L'hôtel est entouré de magnifiques vignobles et offre aux clients la possibilité de
              s'immerger dans le monde du vin et de la nature.
            </p>
            <p class="situation__text tx-18-16">
              I'hôtel est situé dans un château et un manoir historiques, qui créent l'atmosphère du vieux Bordeaux. Les
              clients peuvent passer du temps à explorer le château, son architecture et les terrains environnants.
            </p>
            <p class="situation__text tx-18-16">
              l'hôtel propose des chambres et des suites luxueuses qui associent des équipements modernes à des éléments
              d'ambiance d'antan. Les chambres sont équipées de tout ce dont les clients ont besoin pour un séjour
              confortable.
            </p>
          </div>
          <ul class="situation__images">
            <li class="situation__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/resp-1.webp" type="image/webp">
                <img src="./img/resp-1.jpg" loading="lazy" width="300" height="300" alt="Emplacement">
              </picture>
            </li>
            <li class="situation__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/resp-2.webp" type="image/webp">
                <img src="./img/resp-2.jpg" loading="lazy" width="300" height="300" alt="Emplacement">
              </picture>
            </li>
          </ul>
        </div>
      </section>
      <!-- end situation -->

      <!-- start restaurant -->
      <section class="restaurant" id="restaurant">
        <div class="restaurant__container container">
          <h2 class="restaurant__title tt-40-28">
            Restaurant
          </h2>
          <ul class="restaurant__list">
            <li class="restaurant__item">
              <div class="restaurant__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/rest-1.webp" type="image/webp">
                  <img src="./img/rest-1.jpg" loading="lazy" width="300" height="300" alt="Restaurant">
                </picture>
              </div>
              <div class="restaurant__descr">
                <div class="restaurant__texts">
                  <p class="restaurant__text tx-18-16">
                    l'hôtel dispose d'un restaurant qui sert une cuisine française raffinée à base de produits frais
                    locaux. Il propose également des vins issus des vignobles locaux.
                  </p>
                </div>
              </div>
            </li>
            <li class="restaurant__item">
              <div class="restaurant__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/rest-2.webp" type="image/webp">
                  <img src="./img/rest-2.jpg" loading="lazy" width="300" height="300" alt="Restaurant">
                </picture>
              </div>
              <div class="restaurant__descr">
                <div class="restaurant__texts">
                  <p class="restaurant__text tx-18-16">
                    le Château Prieure Marquet est un domaine viticole et les clients peuvent participer à des visites
                    du domaine et à des dégustations des meilleurs vins de Bordeaux.
                  </p>
                </div>
              </div>
            </li>
            <li class="restaurant__item">
              <div class="restaurant__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/rest-3.webp" type="image/webp">
                  <img src="./img/rest-3.jpg" loading="lazy" width="300" height="300" alt="Restaurant">
                </picture>
              </div>
              <div class="restaurant__descr">
                <div class="restaurant__texts">
                  <p class="restaurant__text tx-18-16">
                    l'hôtel est situé au cœur des vignobles bordelais, ce qui permet aux clients d'en apprendre
                    davantage sur le processus de production du vin et sur l'histoire de la région.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end restaurant -->

      <!-- start arts -->
      <section class="arts" id="arts">
        <div class="container">
          <h2 class="arts__title tt-40-28">
            Arts et culture
          </h2>
          <ul class="arts__list">
            <li class="arts__item">
              <div class="arts__descr">
                <div class="arts__texts">
                  <p class="arts__text tx-20-18">
                    l'hôtel peut donner accès à des expositions artistiques et à des événements culturels afin que les
                    clients puissent s'immerger dans la culture et l'art français.
                  </p>
                </div>
              </div>
              <div class="arts__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/isk-1.webp" type="image/webp">
                  <img src="./img/isk-1.jpg" loading="lazy" width="300" height="300" alt="Arts et culture">
                </picture>
              </div>
            </li>
            <li class="arts__item">
              <div class="arts__descr">
                <div class="arts__texts">
                  <p class="arts__text tx-20-18">
                    l'hôtel est entouré de vignobles pittoresques et invite les clients à faire de longues promenades
                    dans les environs, où ils peuvent apprécier la beauté de la nature.
                  </p>
                </div>
              </div>
              <div class="arts__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/isk-2.webp" type="image/webp">
                  <img src="./img/isk-2.jpg" loading="lazy" width="300" height="300" alt="Arts et culture">
                </picture>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end arts -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>