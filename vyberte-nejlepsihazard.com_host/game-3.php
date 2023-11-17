<!DOCTYPE html>
<html lang="cs">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Stránka obsahuje simulátory hazardních her vytvořené výhradně pro zábavu.">
  <meta property="og:site_name"
    content="Naším hlavním cílem je poskytnout uživatelům realistické a vzrušující herní prostředí bez možnosti vyhrát skutečné peníze. Nabízíme široký výběr her">
  <meta name="twitter:title" content="Stránka obsahuje simulátory hazardních her vytvořené výhradně pro zábavu.">
  <meta name="twitter:description"
    content="Naším hlavním cílem je poskytnout uživatelům realistické a vzrušující herní prostředí bez možnosti vyhrát skutečné peníze. Nabízíme široký výběr her">
  <meta name="description"
    content="Naším hlavním cílem je poskytnout uživatelům realistické a vzrušující herní prostředí bez možnosti vyhrát skutečné peníze. Nabízíme široký výběr her">
  <title>Stránka obsahuje simulátory hazardních her vytvořené výhradně pro zábavu.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Play-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/RopaSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./resources/swiper/swiper.css">
  <link rel="stylesheet" href="./css/main-min.css">
  <script src="./resources/swiper/swiper.js"></script>
  <script defer src="./js/main.js"></script>
</head>

<body>
  <div class="page">
    <div class="page__content">
      <!-- start header -->
      <?php
      include 'header.php';
      ?>
      <!-- end header -->
      <div class="page__body">
        <main>
          <!-- start slot -->
          <section class="slot rd-upload">
            <div class="container">
              <h1 class="slot__title tt-53-40">
                Apple Crush
              </h1>
              <div class="slot__game">
                <iframe src="https://play-test.truelab.games/game/apple-crush-v3/static/index.html"></iframe>
              </div>
            </div>
          </section>
          <!-- end slot -->
        </main>
        <!-- start footer -->
        <?php
        include 'footer.php';
        ?>
        <!-- end footer -->
      </div>
    </div>
  </div>
</body>

</html>