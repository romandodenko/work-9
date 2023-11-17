<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="L'InterContinental Marseille est un hôtel très apprécié à Marseille.">
  <meta property="og:site_name" content="Il est connu pour son service impeccable et ses chambres confortables qui garantissent un séjour agréable aux clients.
L'hôtel est situé sur la promenade du Beau Port.">
  <meta name="twitter:title" content="L'InterContinental Marseille est un hôtel très apprécié à Marseille.">
  <meta name="twitter:description" content="Il est connu pour son service impeccable et ses chambres confortables qui garantissent un séjour agréable aux clients.
L'hôtel est situé sur la promenade du Beau Port.">
  <meta name="description" content="Il est connu pour son service impeccable et ses chambres confortables qui garantissent un séjour agréable aux clients.
L'hôtel est situé sur la promenade du Beau Port.">
  <title>L'InterContinental Marseille est un hôtel très apprécié à Marseille.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Baskerville-Incline.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Newsreader-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
</head>

<body>
  <div class="page page_2">
    <!-- start header -->
    <?php
    include 'header.php';
    ?>
    <!-- end header -->
    <main>
      <!-- start contacts -->
      <section class="contacts">
        <div class="container">
          <h1 class="contacts__title tt-53-30">
            Contacts
          </h1>
          <div class="contacts__subtitle tt-44-28">
            Reservez votre chambre maintenant !
          </div>
          <div class="contacts__content">
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Nom..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="Mail..." required>
              </div>
              <button class="form__button but-159" type="submit">
                Envoyer
              </button>
            </form>
            <div class="contacts__texts">
              <p class="contacts__text tx-17">
                Vous souhaitez réserver une chambre à l’InterContinental Marseille à Marseille et profiter d’un séjour
                luxueux et inoubliable ? Soumettez votre demande maintenant et notre personnel professionnel se fera un
                plaisir de vous aider avec votre réservation.
              </p>
            </div>
          </div>
          <div class="contacts__bottom">
            <ul class="contacts__list">
              <li class="contacts__item tx-17">
                <img src="./img/geo.svg" loading="lazy" width="32" height="32" alt="Icon">
                1 Place Daviel, 13002 Marseille, France
              </li>
              <li class="contacts__item tx-17">
                <img src="./img/phone.svg" loading="lazy" width="32" height="32" alt="Icon">
                <a href="+330413424242">
                  +33 (0)4 13 42 42 42
                </a>
              </li>
            </ul>
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2903.743916216326!2d5.3672127767656965!3d43.29868427528675!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9c0c1ab1bea79%3A0x2cee9fff6aa7fa04!2s1%20Pl.%20Daviel%2C%2013002%20Marseille%2C%20France!5e0!3m2!1sen!2sen!4v1695285712054!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
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