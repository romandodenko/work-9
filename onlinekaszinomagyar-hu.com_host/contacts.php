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
      <!-- start contacts -->
      <section class="contacts">
        <div class="container">
          <div class="contacts__top">
            <div class="contacts__left">
              <h1 class="contacts__title tt-53-42">
                Kapcsolatok
              </h1>
              <p class="contacts__text tx-16">
                Foglaljon le bármelyik szobát most, töltse ki az űrlapot, és visszahívjuk, hogy tisztázzuk a kérdéseit,
                és a legjobb lehetőségeket kínáljuk
              </p>
              <address class="contacts__address">
                <ul class="contacts__info">
                  <li class="contacts__info-item">
                    <span>
                      Cím
                    </span>
                    Móricz Zsigmond utca 96., 8622 Szántód, Hungary
                  </li>
                  <li class="contacts__info-item">
                    <span>
                      Telefon
                    </span>
                    <a href="tel:+3684526888">
                      +36 84 526 888
                    </a>
                  </li>
                  <li class="contacts__info-item">
                    <span>
                      Levél
                    </span>
                    <a href="mailto:info@movenpickbalaland.hu">
                      info@movenpickbalaland.hu
                    </a>
                  </li>
                </ul>
              </address>
            </div>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Név..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="Levél..." required>
              </div>
              <button class="form__button but" type="submit">
                Küld
              </button>
            </form>
          </div>
          <div class="contacts__map">
            <iframe
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2727.195023729594!2d17.904793876902087!3d46.879211737923!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4769bb08808acb8b%3A0x494f3e921381832c!2sSz%C3%A1nt%C3%B3d%2C%20M%C3%B3ricz%20Zsigmond%20u.%2096%2C%208622%20Hungary!5e0!3m2!1sen!2sen!4v1696480624427!5m2!1sen!2sen"
              width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
              referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </section>
      <!-- end contacts -->
    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>