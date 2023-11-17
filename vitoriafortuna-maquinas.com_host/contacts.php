<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Um dos hotéis mais sofisticados e bem avaliados do Brasil é o Royal Tulip.">
  <meta property="og:site_name"
    content="O hotel é considerado um dos melhores do país devido ao seu ambiente e excelente equipe. O Royal Tulip Hotel oferece uma variedade de quartos e suítes espaçosos.">
  <meta name="twitter:title" content="Um dos hotéis mais sofisticados e bem avaliados do Brasil é o Royal Tulip.">
  <meta name="twitter:description"
    content="O hotel é considerado um dos melhores do país devido ao seu ambiente e excelente equipe. O Royal Tulip Hotel oferece uma variedade de quartos e suítes espaçosos.">
  <meta name="description"
    content="O hotel é considerado um dos melhores do país devido ao seu ambiente e excelente equipe. O Royal Tulip Hotel oferece uma variedade de quartos e suítes espaçosos.">
  <title>Um dos hotéis mais sofisticados e bem avaliados do Brasil é o Royal Tulip.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/Marcellus-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/MarcellusSC-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
            <h1 class="contacts__title tt-53-40">
              Contatos
            </h1>
            <div class="contacts__texts">
              <p class="contacts__text tx-22">
                Reserve já um quarto no nosso hotel!
              </p>
            </div>
          </div>
          <div class="contacts__middle">
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <input class="form__input input" type="text" name="text" id="text" placeholder="Nome..." required>
                <input class="form__input input" type="email" name="email" id="email" placeholder="Correspondência..."
                  required>
              </div>
              <button class="form__button but-114" type="submit">
                Enviar
              </button>
            </form>
            <div class="contacts__image">
              <picture>
                <source media="(min-width: 320px)" srcset="./img/contacts.webp" type="image/webp">
                <img src="./img/contacts.jpg" width="300" height="300" alt="Contatos">
              </picture>
            </div>
          </div>
          <div class="contacts__bottom">
            <address class="contacts__address">
              <ul class="contacts__list">
                <li class="contacts__item">
                  <div class="contacts__text contacts__text_opacity tx-17">
                    Telefone
                  </div>
                  <a href="tel:+556134247000" class="contacts__link tx-17">
                    +55 61 34 24 70 00
                  </a>
                </li>
                <li class="contacts__item">
                  <div class="contacts__text contacts__text_opacity tx-17">
                    Publicar
                  </div>
                  <a href="mailto:info@RoyalTulip.hr" class="contacts__link tx-17">
                    info@RoyalTulip.hr
                  </a>
                </li>
                <li class="contacts__item">
                  <div class="contacts__text contacts__text_opacity tx-17">
                    Endereço
                  </div>
                  <div class="contacts__text tx-17">
                    1, SHIGS 708 Bloco, Brasília
                  </div>
                </li>
              </ul>
            </address>
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3838.870191317961!2d-47.909166923782045!3d-15.81079722336133!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x935a3ab963a5321b%3A0xff9bbb5d98fe03e3!2s1%20-%20St.%20de%20Habita%C3%A7%C3%B5es%20Individuais%20Geminadas%20Sul%20707%20-%20Bras%C3%ADlia%2C%20DF%2C%2070390-100%2C%20Brazil!5e0!3m2!1sen!2sen!4v1695980683594!5m2!1sen!2sen"
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