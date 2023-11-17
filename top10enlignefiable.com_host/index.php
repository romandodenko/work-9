<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title"
    content="L'Hôtel Bulgari Paris est le tout premier, le plus chaud et le meilleur hôtel de France.">
  <meta property="og:site_name"
    content="Ce complexe hôtelier de luxe est situé au cœur de Paris, sur la célèbre avenue George, offrant des niveaux de confort, d'élégance et de service inégalés.">
  <meta name="twitter:title"
    content="L'Hôtel Bulgari Paris est le tout premier, le plus chaud et le meilleur hôtel de France.">
  <meta name="twitter:description"
    content="Ce complexe hôtelier de luxe est situé au cœur de Paris, sur la célèbre avenue George, offrant des niveaux de confort, d'élégance et de service inégalés.">
  <meta name="description"
    content="Ce complexe hôtelier de luxe est situé au cœur de Paris, sur la célèbre avenue George, offrant des niveaux de confort, d'élégance et de service inégalés.">
  <title>L'Hôtel Bulgari Paris est le tout premier, le plus chaud et le meilleur hôtel de France.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/DMSerifDisplay-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Poly-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
            <div class="hero__subtitle tt-31-20">
              Hôtel 5 étoiles
            </div>
            <h1 class="hero__title tt-64-46">
              Bulgari Hotel Paris
            </h1>
            <div class="hero__texts">
              <p class="hero__text tx-17">
                Le Bulgari Hôtel Paris est un hôtel exclusif au cœur de la France, considéré comme l'un des lieux de
                séjour les plus luxueux et prestigieux à Paris.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start hebergement -->
      <section class="hebergement" id="hebergement">
        <div class="container">
          <div class="hebergement__head">
            <div class="hebergement__subtitle tt-31-20">
              Chambres et suites standards
            </div>
            <h2 class="hebergement__title tt-53-40">
              Hébergement
            </h2>
          </div>
          <ul class="hebergement__list">
            <li class="hebergement__item">
              <div class="hebergement__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-1.webp" type="image/webp">
                  <img src="./img/hotel-1.jpg" loading="lazy" width="336" height="336" alt="CHAMBRES EXÉCUTIVES">
                </picture>
              </div>
              <div class="hebergement__descr">
                <div class="hebergement__mintitle tt-31-20">
                  CHAMBRES EXÉCUTIVES
                </div>
                <div class="hebergement__texts">
                  <p class="hebergement__text tx-17">
                    La Suite Présidentielle de l'Hôtel Bulgari Paris est une œuvre d'art inégalée, le summum du luxe et
                    de l'élégance. Cette chambre est l'une des plus prestigieuses de l'hôtel et offre les toutes
                    premières conditions d'hébergement, les plus chaudes et les meilleures.
                  </p>
                </div>
              </div>
            </li>
            <li class="hebergement__item">
              <div class="hebergement__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-2.webp" type="image/webp">
                  <img src="./img/hotel-2.jpg" loading="lazy" width="336" height="336" alt="SUITES JUNIOR">
                </picture>
              </div>
              <div class="hebergement__descr">
                <div class="hebergement__mintitle tt-31-20">
                  SUITES JUNIOR
                </div>
                <div class="hebergement__texts">
                  <p class="hebergement__text tx-17">
                    La chambre est située à un étage élevé de l'hôtel, ce qui offre une vue magnifique sur le magnifique
                    paysage parisien, dont la Tour Eiffel. La Suite Junior dispose de chambres spacieuses et élégamment
                    décorées qui sauront satisfaire même les goûts les plus sophistiqués des clients.
                  </p>
                </div>
              </div>
            </li>
            <li class="hebergement__item">
              <div class="hebergement__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/hotel-3.webp" type="image/webp">
                  <img src="./img/hotel-3.jpg" loading="lazy" width="336" height="336" alt="SUITES DE LUXE">
                </picture>
              </div>
              <div class="hebergement__descr">
                <div class="hebergement__mintitle tt-31-20">
                  SUITES DE LUXE
                </div>
                <div class="hebergement__texts">
                  <p class="hebergement__text tx-17">
                    La chambre dispose d'un salon séparé où les clients peuvent profiter d'une atmosphère privée et
                    chaleureuse, ainsi que d'une chambre séparée équipée des lits les plus confortables et des draps de
                    la plus haute qualité.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end hebergement -->

      <!-- start impression -->
      <section class="impression" id="impression">
        <div class="container">
          <div class="impression__head">
            <h2 class="impression__title tt-53-40">
              Impression
            </h2>
            <div class="impression__subtitle tt-31-20">
              MUSÉE JEAN-JACQUES HENNER
            </div>
          </div>
          <div class="impression__image">
            <picture>
              <source media="(min-width: 320px)" srcset="./img/impression.webp" type="image/webp">
              <img src="./img/impression.jpg" loading="lazy" width="336" height="336" alt="Impression">
            </picture>
          </div>
          <div class="impression__texts">
            <p class="impression__text tx-17">
              Le musée Jean-Jacques Anner, situé à l'hôtel Barceló Imagine en Espagne, est très bien noté et fortement
              recommandé. Ce musée est l'un des musées les plus récents de la ville, proposant des expositions d'art
              uniques et des expositions interactives.
            </p>
            <p class="impression__text tx-17">
              Le musée est dédié au grand critique d'art Jean-Jacques Anner, qui a grandement contribué au développement
              et à la vulgarisation de l'art. Sa collection comprend des œuvres d'art de différentes époques et styles,
              notamment des peintures, des sculptures, des photographies et bien plus encore. Les murs du musée
              s'animent grâce à de magnifiques projections et effets sonores qui permettent aux visiteurs de s'immerger
              pleinement dans l'histoire de l'art.
            </p>
          </div>
        </div>
      </section>
      <!-- end impression -->

      <!-- start services -->
      <section class="services" id="services">
        <div class="container">
          <h2 class="services__title tt-53-40">
            Service et commodités
          </h2>
          <ul class="services__list">
            <li class="services__item">
              <div class="services__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/service-1.webp" type="image/webp">
                  <img src="./img/service-1.jpg" loading="lazy" width="336" height="336" alt="Le restaurant - Niko Romito">
                </picture>
              </div>
              <div class="services__descr">
                <div class="services__subtitle tt-31-20">
                  Le restaurant - Niko Romito
                </div>
                <div class="services__texts">
                  <p class="services__text tx-17"> 
                    Le restaurant, situé dans l'hôtel Barceló Imagine en Espagne, mérite une note élevée et est à juste titre populaire parmi les visiteurs. Il s'agit d'un nouveau lieu offrant une ambiance gastronomique unique et des plats luxueux.
                  </p>
                </div>
              </div>
            </li>
            <li class="services__item">
              <div class="services__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/service-2.webp" type="image/webp">
                  <img src="./img/service-2.jpg" loading="lazy" width="336" height="336" alt="Le SPA BULGARI">
                </picture>
              </div>
              <div class="services__descr">
                <div class="services__subtitle tt-31-20">
                  Le SPA BULGARI
                </div>
                <div class="services__texts">
                  <p class="services__text tx-17"> 
                    Le spa, situé à l'hôtel Barceló Imagine en Espagne, est très apprécié des visiteurs pour ses excellents services et son atmosphère relaxante. Il s'agit d'un nouveau lieu proposant des soins modernes et des thérapies SPA pour une relaxation et une récupération complètes.
                  </p>
                </div>
              </div>
            </li>
            <li class="services__item">
              <div class="services__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/service-3.webp" type="image/webp">
                  <img src="./img/service-3.jpg" loading="lazy" width="336" height="336" alt="Le bar Bulgari">
                </picture>
              </div>
              <div class="services__descr">
                <div class="services__subtitle tt-31-20">
                  Le bar Bulgari
                </div>
                <div class="services__texts">
                  <p class="services__text tx-17"> 
                    Le bar, situé dans l'hôtel Barceló Imagine en Espagne, jouit d'une bonne note et est très apprécié pour son atmosphère unique et son service de qualité. C'est un nouveau lieu proposant une variété de boissons et de cocktails pour tous les goûts.
                  </p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end services -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>