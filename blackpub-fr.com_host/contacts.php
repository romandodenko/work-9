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
      <!-- start contacts -->
      <section class="contacts rd-upload">
        <div class="container">
          <div class="contacts__top">
            <h1 class="contacts__title tt-53-46">
              Contacts
            </h1>
            <div class="contacts__texts">
              <p class="contacts__text tx-16">
                Remplissez le formulaire et commandez le jeu chez nous dès maintenant
              </p>
            </div>
          </div>
          <form class="form" action="#!" name="form" autocomplete="off">
            <div class="form__inputs">
              <input class="form__input input" type="text" name="text" id="text" placeholder="Nom..." required>
              <input class="form__input input" type="email" name="email" id="email" placeholder="Mail..." required>
            </div>
            <button class="form__button but" type="submit">
              Envoyer
              <img src="." data-rd-image="./img/arrow.svg" data-rd-image-webp="./img/arrow.svg" width="19" height="8"
                alt="Icon arrow">
            </button>
          </form>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2624.8876525597757!2d2.3415494769587224!3d48.8603527005677!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e21ef55dd71%3A0x449265ff3fc68616!2s19%20Rue%20du%20Pont%20Neuf%2C%2075001%20Paris%2C%20France!5e0!3m2!1sen!2sen!4v1698232443955!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-16">
                  <span>
                    Adresse
                  </span>
                  Rue du Pont Neuf, 19, 1er Arrondissement, Paris
                </li>
                <li class="contacts__info-item tx-16">
                  <span>
                    Mail
                  </span>
                  <a href="mailto:blackpub@fr.com">
                    blackpub@fr.com
                  </a>
                </li>
                <li class="contacts__info-item tx-16">
                  <span>
                    Téléphone
                  </span>
                  <a href="tel:+33142339564">
                    +33 1 42 33 95 64
                  </a>
                </li>
              </ul>
            </address>
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