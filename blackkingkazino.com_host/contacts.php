<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Villa Dagmar i Sverige är ett nytt ädelt lyxhotellställe">
  <meta property="og:site_name"
    content="Villa Dagmar positionerar sig som en trygg och säker plats för alla besökare. Med en så viktig aspekt som säkerhet, tar hotellet alla försiktighetsåtgärder">
  <meta name="twitter:title" content="Villa Dagmar i Sverige är ett nytt ädelt lyxhotellställe">
  <meta name="twitter:description"
    content="Villa Dagmar positionerar sig som en trygg och säker plats för alla besökare. Med en så viktig aspekt som säkerhet, tar hotellet alla försiktighetsåtgärder">
  <meta name="description"
    content="Villa Dagmar positionerar sig som en trygg och säker plats för alla besökare. Med en så viktig aspekt som säkerhet, tar hotellet alla försiktighetsåtgärder">
  <title>Villa Dagmar i Sverige är ett nytt ädelt lyxhotellställe</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Gotu-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
          <h1 class="contacts__title tt-53-40">
            Kontakter
          </h1>
          <div class="contacts__content">
            <div class="contacts__left">
              <div class="contacts__texts">
                <p class="contacts__text tx-22">
                  Fyll i formuläret så kontaktar vi dig för att hjälpa dig boka ett rum på vårt hotell.
                </p>
              </div>
              <form class="form" action="#!" name="form" autocomplete="off">
                <div class="form__inputs">
                  <input class="form__input input" type="text" name="text" id="text" placeholder="Namn..." required>
                  <input class="form__input input" type="email" name="email" id="email" placeholder="Post..." required>
                </div>
                <button class="form__button but" type="submit">
                  Skicka
                </button>
              </form>
              <address class="contacts__address">
                <ul class="contacts__info">
                  <li class="contacts__info-item tx-17">
                    <span>
                      Post
                    </span>
                    <a href="mailto:info@hotelvilladagmar.com">
                      info@hotelvilladagmar.com
                    </a>
                  </li>
                  <li class="contacts__info-item tx-17">
                    <span>
                      Adress
                    </span>
                    Nybrogatan 25-27 114 39 Stockholm
                  </li>
                  <li class="contacts__info-item tx-17">
                    <span>
                      Telefon
                    </span>
                    <a href="tel:+460812213550">
                      +46 (0) 8 122 135 50
                    </a>
                  </li>
                </ul>
              </address>
            </div>
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2034.8472804846508!2d18.075244977446985!3d59.335503510526294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f9d5b189d4f2b%3A0xa67f13b0f97e432f!2sNybrogatan%2025-27%2C%20114%2039%20Stockholm%2C%20Sweden!5e0!3m2!1sen!2sen!4v1697710824125!5m2!1sen!2sen"
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