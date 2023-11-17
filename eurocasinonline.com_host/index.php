<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Stránky s nejlepšími a nejžhavějšími simulátory hazardních her pro hráče">
  <meta property="og:site_name"
    content="Čekají na vás některé z nejžhavějších a nejlepších her tohoto žánru. Je důležité si uvědomit, že všechny simulátory na našem webu neposkytují možnost vyhrát skutečné peníze.">
  <meta name="twitter:title" content="Stránky s nejlepšími a nejžhavějšími simulátory hazardních her pro hráče">
  <meta name="twitter:description"
    content="Čekají na vás některé z nejžhavějších a nejlepších her tohoto žánru. Je důležité si uvědomit, že všechny simulátory na našem webu neposkytují možnost vyhrát skutečné peníze.">
  <meta name="description"
    content="Čekají na vás některé z nejžhavějších a nejlepších her tohoto žánru. Je důležité si uvědomit, že všechny simulátory na našem webu neposkytují možnost vyhrát skutečné peníze.">
  <title>Stránky s nejlepšími a nejžhavějšími simulátory hazardních her pro hráče</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Nunito-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Varela-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
        <h2 class="visually-hidden">
          Popup title
        </h2>
        <div class="popup__close"></div>
        <div class="popup__body">
          <p class="popup__text">Our games are intended for an ADULT audience over the age of 18. Click Accepted to
            confirm your age.</p>
          <button class="popup__button">Accepted</button>
        </div>
      </section>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero rd-upload">
        <div class="hero__container container">
          <div class="hero__descr">
            <h1 class="hero__title tt-64-50">
              Hazardní hry
            </h1>
            <div class="hero__texts">
              <p class="hero__text tx-23">
                Stránka se simulátory hazardních her, kde nemůžete vyhrát skutečné peníze.
              </p>
            </div>
            <a class="hero__link but" href="#games">
              Hrát si
            </a>
          </div>
          <div class="hero__image">
            <img src="." data-rd-image="./img/hero.png" data-rd-image-webp="./img/hero.webp" width="336" height="336"
              alt="Hazardní hry">
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start games -->
      <section class="games rd-upload" id="games">
        <div class="container">
          <div class="games__head">
            <h2 class="games__title tt-53-46">
              Hry
            </h2>
            <div class="games__texts">
              <p class="games__text tx-23">
                Naše stránka nabízí legální simulátory hazardních her, ve kterých nemůžete vyhrát skutečné peníze.
              </p>
            </div>
          </div>
          <ul class="games__list">
            <li class="games__item">
              <a class="games__image" href="game-1.php">
                <img src="." data-rd-image="./img/game-1.jpg" data-rd-image-webp="./img/game-1.webp" width="336"
                  height="336" alt="Hry">
              </a>
              <a class="games__button but" href="game-1.php">
                Hrát si
              </a>
            </li>
            <li class="games__item">
              <a class="games__image" href="game-2.php">
                <img src="." data-rd-image="./img/game-2.jpg" data-rd-image-webp="./img/game-2.webp" width="336"
                  height="336" alt="Hry">
              </a>
              <a class="games__button but" href="game-2.php">
                Hrát si
              </a>
            </li>
            <li class="games__item">
              <a class="games__image" href="game-3.php">
                <img src="." data-rd-image="./img/game-3.jpg" data-rd-image-webp="./img/game-3.webp" width="336"
                  height="336" alt="Hry">
              </a>
              <a class="games__button but" href="game-3.php">
                Hrát si
              </a>
            </li>
          </ul>
        </div>
      </section>
      <!-- end games -->

      <!-- start benefits -->
      <section class="benefits rd-upload" id="benefits">
        <div class="container">
          <h2 class="benefits__title tt-53-46">
            Výhody
          </h2>
          <div class="benefits__content">
            <ul class="benefits__list">
              <li class="benefits__item">
                <div class="benefits__subtitle tx-23 circle">
                  Zákonnost
                </div>
                <div class="benefits__texts">
                  <p class="benefits__text tx-16">
                    Přísně dodržujeme všechny mezinárodní a místní zákony a nabízíme pouze legální simulátory hazardních
                    her, kde není příležitost vyhrát skutečné peníze. Hru si můžete užít bez porušení zákona.
                  </p>
                </div>
              </li>
              <li class="benefits__item">
                <div class="benefits__subtitle tx-23 circle">
                  Zabezpečení
                </div>
                <div class="benefits__texts">
                  <p class="benefits__text tx-16">
                    Naše stránky zajišťují bezpečnost vašich dat a finančních informací. Můžete si být jisti, že vaše
                    identita a soukromí jsou zcela chráněny.
                  </p>
                </div>
              </li>
              <li class="benefits__item">
                <div class="benefits__subtitle tx-23 circle">
                  Rozmanitost her
                </div>
                <div class="benefits__texts">
                  <p class="benefits__text tx-16">
                    Nabízíme široký výběr simulátorů hazardních her na různá témata. Máme automaty, karetní hry, rulety
                    a další, abychom zajistili, že si každý hráč najde něco.
                  </p>
                </div>
              </li>
            </ul>
            <div class="benefits__image">
              <img src="." data-rd-image="./img/about-1.jpg" data-rd-image-webp="./img/about-1.webp" width="336"
                height="336" alt="Výhody">
            </div>
          </div>
        </div>
      </section>
      <!-- end benefits -->

      <!-- start about -->
      <section class="about rd-upload" id="about">
        <div class="container">
          <h2 class="about__title tt-53-46">
            O nás
          </h2>
          <div class="about__texts">
            <p class="about__text tx-16">
              Na našich stránkách najdete exkluzivní hrací automaty, které představují nejžhavější a nejzajímavější
              herní témata. Je třeba poznamenat, že neposkytujeme automatům ani kasinům možnost vyhrát skutečné peníze.
            </p>
            <p class="about__text tx-16">
              Tyto stránky jsme vytvořili pro ty, kteří hledají zábavu a vzrušení bez finančního rizika. Naše simulátory
              vám umožní pocítit nadšení a vzrušení, které může hráč zažít ve skutečném kasinu, ale bez investování
              skutečných peněz.
            </p>
            <p class="about__text tx-16">
              Simulátory hazardních her, které nabízíme, jsou zaručeně legální a bezpečné. Sledujeme průběh hry, abyste
              si hru mohli užít v bezpečném prostředí. Stránka nabízí široký výběr výherních automatů různých témat,
              které uspokojí touhy každého.
            </p>
            <p class="about__text tx-16">
              Pokud hledáte legální a vzrušující způsob, jak si odpočinout od shonu každodenního života, pak je naše
              stránka simulátoru hazardu tím ideálním místem, jak to udělat. Zde najdete ty nejžhavější a nejvíce
              vzrušující hry, které vás nenechají lhostejnými. Nenechte si ujít příležitost ponořit se do světa zábavy
              bez finančních rizik právě teď!
            </p>
          </div>
        </div>
      </section>
      <!-- end about -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>