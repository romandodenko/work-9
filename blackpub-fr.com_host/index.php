<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title"
    content="La vitrine des jeux vous offre la possibilité d'acheter certains des meilleurs jeux de hasard.">
  <meta property="og:site_name"
    content="Dans notre vitrine, vous trouverez une sélection de différents jeux de hasard. Nous mettons constamment à jour notre gamme et ajoutons de nouveaux jeux pour satisfaire nos clients.">
  <meta name="twitter:title"
    content="La vitrine des jeux vous offre la possibilité d'acheter certains des meilleurs jeux de hasard.">
  <meta name="twitter:description"
    content="Dans notre vitrine, vous trouverez une sélection de différents jeux de hasard. Nous mettons constamment à jour notre gamme et ajoutons de nouveaux jeux pour satisfaire nos clients.">
  <meta name="description"
    content="Dans notre vitrine, vous trouverez une sélection de différents jeux de hasard. Nous mettons constamment à jour notre gamme et ajoutons de nouveaux jeux pour satisfaire nos clients.">
  <title>La vitrine des jeux vous offre la possibilité d'acheter certains des meilleurs jeux de hasard.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Scada-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Mukta-ExtraBold.woff2" as="font" type="font/woff2" crossorigin>
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
          <p class="popup__text">Nos jeux sont destinés à un public ADULTE de plus de 18 ans. Cliquez sur Accepté pour
            confirmer votre âge.</p>
          <button class="popup__button">Accepté</button>
        </div>
      </section>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero rd-upload" id="about">
        <div class="container">
          <div class="hero__top">
            <div class="hero__top-left">
              <div class="hero__subtitle tx-23">
                Meilleurs jeux de hasard
              </div>
              <h1 class="hero__title tt-64-50">
                Simulateurs de jeu
              </h1>
            </div>
            <div class="hero__texts">
              <p class="hero__text tx-16">
                Bienvenue dans notre vitrine des jeux d'argent en France ! Vous trouverez ici les meilleurs et certains
                des meilleurs jeux du marché qui vous aideront à plonger dans le monde passionnant de l'excitation et du
                divertissement.
              </p>
            </div>
          </div>
          <div class="hero__image">
            <img src="." data-rd-image="./img/hero.jpg" data-rd-image-webp="./img/hero.webp" width="336" height="336"
              alt="Simulateurs de jeu">
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start vitrine -->
      <section class="vitrine rd-upload" id="vitrine">
        <div class="vitrine__container vitrine__container_margin container">
          <h2 class="vitrine__title vitrine__title_center tt-53-46">
            Vitrine
          </h2>
        </div>
        <div class="vitrine__middle">
          <div class="container">
            <h2 class="vitrine__title tt-53-46">
              Produit phare
            </h2>
            <div class="wrapper-vitrine-slider">
              <div class="wrapper-vitrine-slider__controls">
                <div class="wrapper-vitrine-slider__pagination vitrine-slider-pagination"></div>
                <div class="wrapper-vitrine-slider__buttons">
                  <button class="wrapper-vitrine-slider__button vitrine-slider-next">
                    <img src="." data-rd-image="./img/button.svg" data-rd-image-webp="./img/button.svg" width="32"
                      height="32" alt="Icon button">
                  </button>
                  <button class="wrapper-vitrine-slider__button vitrine-slider-prev">
                    <img src="." data-rd-image="./img/button.svg" data-rd-image-webp="./img/button.svg" width="32"
                      height="32" alt="Icon button">
                  </button>
                </div>
              </div>
              <div class="vitrine-slider swiper">
                <div class="swiper-wrapper">
                  <div class="vitrine-slider__slide swiper-slide">
                    <div class="vitrine-slider__slide-left">
                      <div class="vitrine-slider__top">
                        <ul class="vitrine-slider__stars">
                          <li class="vitrine-slider__star">
                            <img src="." data-rd-image="./img/star.svg" data-rd-image-webp="./img/star.svg" width="24"
                              height="24" alt="Icon star">
                          </li>
                          <li class="vitrine-slider__star">
                            <img src="." data-rd-image="./img/star.svg" data-rd-image-webp="./img/star.svg" width="24"
                              height="24" alt="Icon star">
                          </li>
                          <li class="vitrine-slider__star">
                            <img src="." data-rd-image="./img/star.svg" data-rd-image-webp="./img/star.svg" width="24"
                              height="24" alt="Icon star">
                          </li>
                          <li class="vitrine-slider__star">
                            <img src="." data-rd-image="./img/star.svg" data-rd-image-webp="./img/star.svg" width="24"
                              height="24" alt="Icon star">
                          </li>
                          <li class="vitrine-slider__star">
                            <img src="." data-rd-image="./img/star.svg" data-rd-image-webp="./img/star.svg" width="24"
                              height="24" alt="Icon star">
                          </li>
                        </ul>
                        <div class="vitrine-slider__subtitle tt-44-38">
                          Machines à sous
                        </div>
                        <div class="vitrine-slider__texts">
                          <p class="vitrine-slider__text tx-16"> 
                            Bienvenue dans le monde des meilleures et des meilleures nouvelles machines à sous ! Nous vous offrons une expérience de jeu incroyablement excitante et passionnante sur les machines à sous de la plus haute qualité et les plus avancées du marché.
                          </p>
                        </div>
                      </div>
                      <a class="vitrine-slider__link but" href="game-1.php">
                        Plus de détails
                        <img src="." data-rd-image="./img/arrow.svg" data-rd-image-webp="./img/arrow.svg" width="19"
                          height="8" alt="Icon arrow">
                      </a>
                    </div>
                    <div class="vitrine-slider__image">
                      <img src="." data-rd-image="./img/produit-1.jpg" data-rd-image-webp="./img/produit-1.webp" width="336" height="336" alt="Machines à sous">
                    </div>
                  </div>
                  <div class="vitrine-slider__slide swiper-slide">
                    <div class="vitrine-slider__slide-left">
                      <div class="vitrine-slider__top">
                        <ul class="vitrine-slider__stars">
                          <li class="vitrine-slider__star">
                            <img src="." data-rd-image="./img/star.svg" data-rd-image-webp="./img/star.svg" width="24"
                              height="24" alt="Icon star">
                          </li>
                          <li class="vitrine-slider__star">
                            <img src="." data-rd-image="./img/star.svg" data-rd-image-webp="./img/star.svg" width="24"
                              height="24" alt="Icon star">
                          </li>
                          <li class="vitrine-slider__star">
                            <img src="." data-rd-image="./img/star.svg" data-rd-image-webp="./img/star.svg" width="24"
                              height="24" alt="Icon star">
                          </li>
                          <li class="vitrine-slider__star">
                            <img src="." data-rd-image="./img/star.svg" data-rd-image-webp="./img/star.svg" width="24"
                              height="24" alt="Icon star">
                          </li>
                          <li class="vitrine-slider__star">
                            <img src="." data-rd-image="./img/star.svg" data-rd-image-webp="./img/star.svg" width="24"
                              height="24" alt="Icon star">
                          </li>
                        </ul>
                        <div class="vitrine-slider__subtitle tt-44-38">
                          Kéno
                        </div>
                        <div class="vitrine-slider__texts">
                          <p class="vitrine-slider__text tx-16">  
                            Bienvenue dans le monde des meilleures et des meilleures nouvelles machines à sous ! Nous vous offrons une expérience de jeu incroyablement excitante et passionnante sur les machines à sous de la plus haute qualité et les plus avancées du marché.
                          </p>
                        </div>
                      </div>
                      <a class="vitrine-slider__link but" href="game-2.php">
                        Plus de détails
                        <img src="." data-rd-image="./img/arrow.svg" data-rd-image-webp="./img/arrow.svg" width="19"
                          height="8" alt="Icon arrow">
                      </a>
                    </div>
                    <div class="vitrine-slider__image">
                      <img src="." data-rd-image="./img/produit-2.jpg" data-rd-image-webp="./img/produit-2.webp" width="336" height="336" alt="Kéno">
                    </div>
                  </div>
                  <div class="vitrine-slider__slide swiper-slide">
                    <div class="vitrine-slider__slide-left">
                      <div class="vitrine-slider__top">
                        <ul class="vitrine-slider__stars">
                          <li class="vitrine-slider__star">
                            <img src="." data-rd-image="./img/star.svg" data-rd-image-webp="./img/star.svg" width="24"
                              height="24" alt="Icon star">
                          </li>
                          <li class="vitrine-slider__star">
                            <img src="." data-rd-image="./img/star.svg" data-rd-image-webp="./img/star.svg" width="24"
                              height="24" alt="Icon star">
                          </li>
                          <li class="vitrine-slider__star">
                            <img src="." data-rd-image="./img/star.svg" data-rd-image-webp="./img/star.svg" width="24"
                              height="24" alt="Icon star">
                          </li>
                          <li class="vitrine-slider__star">
                            <img src="." data-rd-image="./img/star.svg" data-rd-image-webp="./img/star.svg" width="24"
                              height="24" alt="Icon star">
                          </li>
                          <li class="vitrine-slider__star">
                            <img src="." data-rd-image="./img/star.svg" data-rd-image-webp="./img/star.svg" width="24"
                              height="24" alt="Icon star">
                          </li>
                        </ul>
                        <div class="vitrine-slider__subtitle tt-44-38">
                          Baccara
                        </div>
                        <div class="vitrine-slider__texts">
                          <p class="vitrine-slider__text tx-16">  
                            Bienvenue dans le monde passionnant du baccara - l'un des jeux de cartes les meilleurs et les plus populaires de l'industrie du jeu ! Vous trouverez ici les dernières versions de ce jeu passionnant, développé à l'aide d'une technologie avancée et des normes de qualité les plus élevées.
                          </p>
                        </div>
                      </div>
                      <a class="vitrine-slider__link but" href="game-3.php">
                        Plus de détails
                        <img src="." data-rd-image="./img/arrow.svg" data-rd-image-webp="./img/arrow.svg" width="19"
                          height="8" alt="Icon arrow">
                      </a>
                    </div>
                    <div class="vitrine-slider__image">
                      <img src="." data-rd-image="./img/produit-3.jpg" data-rd-image-webp="./img/produit-3.webp" width="336" height="336" alt="Baccara">
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="container">
          <ul class="vitrine__list">
            <li class="vitrine__item">
              <div class="vitrine__item-left">
                <div class="vitrine__subtitle tt-44-38">
                  Roulette
                </div>
                <div class="vitrine__texts">
                  <p class="vitrine__text tx-16">
                    Bienvenue dans le monde merveilleux de la roulette - l'un des jeux de hasard les meilleurs et les
                    plus excitants qui attire des millions de joueurs à travers le monde ! Vous trouverez ici les
                    dernières et certaines des meilleures variantes de roulette, développées à l'aide d'une technologie
                    de pointe et des normes de qualité les plus élevées.
                  </p>
                  <p class="vitrine__text tx-16">
                    La roulette est un jeu de casino classique dans lequel le but est de deviner sur quel numéro ou
                    quelle couleur atterrira une boule lancée par un rouet. Nous vous proposons un large choix de
                    variantes de roulette, notamment la roulette américaine, européenne et française, chacune avec ses
                    propres caractéristiques et règles.
                  </p>
                  <p class="vitrine__text tx-16">
                    Notre collection de nouvelles variantes de roulette présente des graphismes époustouflants, des sons
                    réalistes et une atmosphère de casino passionnante. Nous proposons également une variété d'options
                    de paris afin que vous puissiez choisir une stratégie adaptée à votre style de jeu.
                  </p>
                </div>
              </div>
              <div class="vitrine__image">
                <img src="." data-rd-image="./img/roulette.jpg" data-rd-image-webp="./img/roulette.webp" width="336"
                  height="336" alt="Roulette">
              </div>
            </li>
            <li class="vitrine__item">
              <div class="vitrine__item-left">
                <div class="vitrine__subtitle tt-44-38">
                  Jack noir
                </div>
                <div class="vitrine__texts">
                  <p class="vitrine__text tx-16">
                    Bienvenue dans le monde passionnant du blackjack - l'un des jeux de cartes les meilleurs et les plus
                    populaires dans le monde du jeu ! Vous trouverez ici les dernières et certaines des meilleures
                    variantes de blackjack, développées à l'aide d'une technologie de pointe et des normes de qualité
                    les plus élevées.
                  </p>
                  <p class="vitrine__text tx-16">
                    Le Blackjack est un jeu dans lequel votre objectif est d'obtenir des cartes dont le total totalise
                    21, mais pas plus. Le jeu utilise un jeu standard de 52 cartes et votre objectif est de battre le
                    croupier sans en faire trop.
                  </p>
                  <p class="vitrine__text tx-16">
                    Nous vous proposons notre collection des meilleures et dernières variantes de blackjack qui offrent
                    une expérience de jeu amusante et réaliste. Nos versions de blackjack disposent de superbes
                    graphismes, de sons réalistes et d'une interface intuitive pour que vous puissiez profiter du jeu
                    sans aucune complication.
                  </p>
                </div>
              </div>
              <div class="vitrine__image">
                <img src="." data-rd-image="./img/jack.jpg" data-rd-image-webp="./img/jack.webp" width="336"
                  height="336" alt="Jack noir">
              </div>
            </li>
            <li class="vitrine__item">
              <div class="vitrine__item-left">
                <div class="vitrine__subtitle tt-44-38">
                  Crêpes
                </div>
                <div class="vitrine__texts">
                  <p class="vitrine__text tx-16">
                    "Le craps est un mélange inégalé de combinaisons étonnantes de saveurs et de textures. Il est
                    considéré comme l'un des meilleurs plats de dessert pouvant satisfaire les palais les plus
                    sophistiqués.
                  </p>
                  <p class="vitrine__text tx-16">
                    Fabriqué avec les ingrédients les plus frais et les plus fins, chaque craps est préparé avec une
                    attention unique aux détails. Ils ont un arôme unique et une consistance parfaite qui coule sur
                    votre langue et se dissout, laissant un orgasme gustatif inoubliable.
                  </p>
                  <p class="vitrine__text tx-16">
                    Mais qu’est-ce qui rend ces craps si spéciaux et nouveaux ? Notre équipe culinaire plonge dans le
                    mystère et l'innovation pour vous présenter les dernières tendances du craps. Nous sommes
                    constamment à la recherche de nouvelles idées et expérimentons différentes garnitures pour
                    surprendre vos papilles et stimuler votre imagination.
                  </p>
                </div>
              </div>
              <div class="vitrine__image">
                <img src="." data-rd-image="./img/crepes.jpg" data-rd-image-webp="./img/crepes.webp" width="336"
                  height="336" alt="Crêpes">
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end vitrine -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>