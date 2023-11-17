<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title"
    content="Gleam Collection Hotel Türkiye'nin en iyi otellerinden biri olan yeni bir oteldir.">
  <meta property="og:site_name"
    content="Gleam Collection Hotel, modern bir şekilde dekore edilmiş odalarda lüks konaklama olanağı sunmaktadır. Gleam Collection otelleri çok çeşitli eğlence ve hizmetler sunmaktadır.">
  <meta name="twitter:title"
    content="Gleam Collection Hotel Türkiye'nin en iyi otellerinden biri olan yeni bir oteldir.">
  <meta name="twitter:description"
    content="Gleam Collection Hotel, modern bir şekilde dekore edilmiş odalarda lüks konaklama olanağı sunmaktadır. Gleam Collection otelleri çok çeşitli eğlence ve hizmetler sunmaktadır.">
  <meta name="description"
    content="Gleam Collection Hotel, modern bir şekilde dekore edilmiş odalarda lüks konaklama olanağı sunmaktadır. Gleam Collection otelleri çok çeşitli eğlence ve hizmetler sunmaktadır.">
  <title>Gleam Collection Hotel Türkiye'nin en iyi otellerinden biri olan yeni bir oteldir.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Graphik-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Righteous-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
            <h1 class="contacts__title tt-53-40 dfspan">
              <span>
                Kişiler
              </span>
            </h1>
            <div class="contacts__top-content">
              <div class="contacts__image">
                <picture>
                  <source media="(min-width: 320px)" srcset="./img/contacts.webp" type="image/webp">
                  <img src="./img/contacts.jpg" width="336" height="336" alt="">
                </picture>
              </div>
              <div class="contacts__wrapper-form">
                <div class="contacts__subtitle tt-31-20">
                  Formu doldurun ve oda ayırtın
                </div>
                <form class="form" action="#!" name="form" autocomplete="off">
                  <div class="form__inputs">
                    <input class="form__input input" type="text" name="text" id="text" placeholder="Yapımı..." required>
                    <input class="form__input input" type="email" name="email" id="email" placeholder="Postalamak..."
                      required>
                  </div>
                  <button class="form__button but" type="submit">
                    Göndermek
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="contacts__bottom">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3008.863235290973!2d28.98548847668522!3d41.050119816846376!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14cab70d866c6eb5%3A0xbf995597e63f1b1e!2zSGFsYXNrYXJnYXppLCBEZXJzaGFuZSBTb2thxJ_EsSBObzoxNiwgMzQzNzEgxZ5pxZ9saS_EsHN0YW5idWwsIFTDvHJraXll!5e0!3m2!1sen!2sen!4v1696838103572!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__list">
                <li class="contacts__item">
                  Halaskargazi , Dershane St. No:16 Şişli / İstanbul
                </li>
                <li class="contacts__item">
                  <a href="tel:+902123687175">
                    +90 212 368 71 75
                  </a>
                </li>
                <li class="contacts__item">
                  <a href="mailto:info@gleamcollection.com">
                    info@gleamcollection.com
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