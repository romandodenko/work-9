<!DOCTYPE html>
<html lang="no">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Hotel Sommerro - dette hotellet rangerer blant de beste hotellene.">
  <meta property="og:site_name"
    content="Hotel Sommerro har nylig åpnet og har allerede vunnet mye ros og utmerkede anmeldelser. Sjarmerende hotelldesign som kombinerer moderne elementer og norsk sjarm">
  <meta name="twitter:title" content="Hotel Sommerro - dette hotellet rangerer blant de beste hotellene.">
  <meta name="twitter:description"
    content="Hotel Sommerro har nylig åpnet og har allerede vunnet mye ros og utmerkede anmeldelser. Sjarmerende hotelldesign som kombinerer moderne elementer og norsk sjarm">
  <meta name="description"
    content="Hotel Sommerro har nylig åpnet og har allerede vunnet mye ros og utmerkede anmeldelser. Sjarmerende hotelldesign som kombinerer moderne elementer og norsk sjarm">
  <title>Hotel Sommerro - dette hotellet rangerer blant de beste hotellene.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/HelveticaNeueCyrRoman-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Marcellus-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/MeaCulpa-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
      <section class="contacts rd-upload">
        <div class="container">
          <div class="contacts__top">
            <h1 class="contacts__title tt-53-38">
              Contactos
            </h1>
            <div class="contacts__texts">
              <p class="contacts__text tx-22"> 
                Deja una solicitud y nos pondremos en contacto contigo para ayudarte y resolver todas tus dudas. Reserva tu habitación ahora y regálate unas vacaciones de lujo.
              </p>
            </div>
          </div>
          <div class="contacts__middle">
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Nombre..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="Correo..." required>
              </div>
              <button class="form__button but" type="submit">
                Sende
              </button>
            </form>
            <img class="contacts__image" src="." data-rd-image="./img/contacts.jpg"
              data-rd-image-webp="./img/contacts.webp" width="336" height="336" alt="Contactos">
          </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2000.0090371075466!2d10.718148477474783!3d59.91539736397129!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46416daa3ebf1211%3A0x4f240148642920ee!2sSommerrogata%201%2C%200255%20Oslo%2C%20Norway!5e0!3m2!1sen!2sen!4v1697715806660!5m2!1sen!2sen" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__info">
                <li class="contacts__info-item tx-17">
                  <span>
                    Telefon 
                  </span>
                  <a href="tel:+4721404950">
                    +47 214 04 950
                  </a>
                </li>
                <li class="contacts__info-item tx-17">
                  <span>
                    Post
                  </span> 
                  <a href="mailto:VESTKANTBADET@SOMMERROHOUSE.COM">
                    VESTKANTBADET@SOMMERROHOUSE.COM
                  </a>
                </li>
                <li class="contacts__info-item tx-17">
                  <span>
                    ADRESSE 
                  </span>
                  1 Sommerrogata, Frogner, 0255 Oslo, Norge
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