<!DOCTYPE html>
<html lang="sv">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title" content="Tryggt hotell, med höga vinster och rankingspel">
  <meta property="og:site_name"
    content="Paradise Oasis Hotel är en plats där lyx och natur kombineras för att skapa en oförglömlig upplevelse. Vi garanterar att din semester hos oss blir minnesvärd och avkopplande. Kom och njut av den paradisiska atmosfären.">
  <meta name="twitter:title" content="Tryggt hotell, med höga vinster och rankingspel">
  <meta name="twitter:description"
    content="Paradise Oasis Hotel är en plats där lyx och natur kombineras för att skapa en oförglömlig upplevelse. Vi garanterar att din semester hos oss blir minnesvärd och avkopplande. Kom och njut av den paradisiska atmosfären.">
  <meta name="description"
    content="Paradise Oasis Hotel är en plats där lyx och natur kombineras för att skapa en oförglömlig upplevelse. Vi garanterar att din semester hos oss blir minnesvärd och avkopplande. Kom och njut av den paradisiska atmosfären.">
  <title>Tryggt hotell, med höga vinster och rankingspel</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/NovaMono-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/OxygenMono-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
        <div class="popup__close"></div>
        <div class="popup__body">
          <p class="popup__text">
            Våra spel är avsedda för en VUXEN publik över 18 år. Klicka på Godkänd för
            bekräfta din ålder.
          </p>
          <button class="popup__button">Accepterad</button>
        </div>
      </section>
      <!-- end popup -->

      <!-- start hero -->
      <section class="hero rd-upload">
        <div class="container">
          <div class="hero__content rd-background" data-rd-image="./img/hero.jpg" data-rd-image-webp="./img/hero.webp">
            <div class="hero__descr">
              <h1 class="hero__title tt-62-34">
                <span>Paradise</span> Oasis Hotel
              </h1>
              <div class="hero__texts">
                <p class="hero__text tx-22-18">
                  Ar en plats där lyx och natur kombineras för att skapa en oförglömlig upplevelse
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- end hero -->

      <!-- start boende -->
      <section class="boende rd-upload" id="boende">
        <div class="container">
          <h2 class="boende__title tt-42-30">
            Boende
          </h2>
          <ul class="boende__list">
            <li class="boende__item">
              <div class="boende__texts">
                <p class="boende__text tx-16">
                  Paradise Oasis Hotel ligger i ett pittoreskt hörn vid stranden av det azurblå havet. Denna plats
                  utstrålar lugn och frid, perfekt för vila och avkoppling. Du kan njuta av promenader på stranden,
                  koppla av på din egen privata sandstrand och beundra solnedgångarna.
                </p>
              </div>
              <div class="boende__image">
                <img src="." data-rd-image="./img/room-1.jpg" data-rd-image-webp="./img/room-1.webp" width="336"
                  height="336" alt="Boende">
              </div>
            </li>
            <li class="boende__item">
              <div class="boende__texts">
                <p class="boende__text tx-16">
                  Vårt hotell erbjuder ett brett utbud av rum, från lyxiga sviter till mysiga studiorum. Alla rum är
                  inredda med omsorg om detaljerna och utrustade med moderna bekvämligheter. Om du väljer att bo hos oss
                  kommer du att uppleva en atmosfär av lyx och komfort.
                </p>
              </div>
              <div class="boende__image">
                <img src="." data-rd-image="./img/room-2.jpg" data-rd-image-webp="./img/room-2.webp" width="336"
                  height="336" alt="Boende">
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end boende -->

      <!-- start about -->
      <section class="about rd-upload" id="about">
        <div class="container">
          <h2 class="about__title tt-42-30">
            <span>Om</span> oss
          </h2>
          <div class="about__content rd-background" data-rd-image="./img/about.jpg"
            data-rd-image-webp="./img/about.webp">
            <div class="about__texts">
              <p class="about__text tx-16">
                Paradise Oasis Hotel är en unik plats där lyx och natur förenas för att ge dig en oförglömlig
                upplevelse. Vår resort ligger i ett av de mest pittoreska hörnen av världen, där stranden av det azurblå
                havet och den majestätiska naturen skapar den perfekta kombinationen för en semester.
              </p>
              <p class="about__text tx-16">
                Paradise Oasis Hotel är en plats där lyx och natur kombineras för att skapa en oförglömlig upplevelse.
                Vi garanterar att din semester hos oss blir minnesvärd och avkopplande. Kom och njut av den paradisiska
                atmosfären.
              </p>
            </div>
          </div>
        </div>
      </section>
      <!-- end about -->

      <!-- start kok -->
      <section class="kok rd-upload" id="kok">
        <div class="container">
          <h2 class="kok__title tt-42-30">
            Kök
          </h2>
          <div class="kok__texts">
            <p class="kok__text tx-16">
              Paradise Oasis Hotels restaurang är ett paradis för gourmeter. Våra kockar förbereder utsökta världsrätter
              och lokala delikatesser med endast färska och naturliga ingredienser. Du kan njuta av frukostar med utsikt
              över havet, middagar utomhus och läckra cocktails i vår bar.
            </p>
            <p class="kok__text tx-16">
              Det finns alltid något att göra på Paradise Oasis Hotel. Vi har en stor pool med utsikt över havet där du
              kan svalka dig och sola. För spa-älskare har vi ett spa-center där du kan koppla av och njuta av en
              massage. Vi erbjuder också vattensporter som vindsurfing och dykning.
            </p>
            <p class="kok__text tx-16">
              Vår vänliga personal är alltid redo att hjälpa dig och göra din vistelse så bekväm som möjligt. Vi ägnar
              särskild uppmärksamhet åt detaljer för att få varje gäst att känna sig speciell.
            </p>
          </div>
          <ul class="kok__images">
            <li class="kok__image">
              <img src="." data-rd-image="./img/eda-1.jpg" data-rd-image-webp="./img/eda-1.webp" width="336"
                height="336" alt="Kök">
            </li>
            <li class="kok__image">
              <img src="." data-rd-image="./img/eda-2.jpg" data-rd-image-webp="./img/eda-2.webp" width="336"
                height="336" alt="Kök">
            </li>
            <li class="kok__image">
              <img src="." data-rd-image="./img/eda-3.jpg" data-rd-image-webp="./img/eda-3.webp" width="336"
                height="336" alt="Kök">
            </li>
          </ul>
        </div>
      </section>
      <!-- end kok -->

      <!-- start dest -->
      <section class="dest rd-upload">
        <div class="container">
          <h2 class="dest__title tt-42-30">
            Destination
          </h2>
          <ul class="dest__list">
            <li class="dest__item">
              <div class="dest__image">
                <img src="." data-rd-image="./img/dest-1.jpg" data-rd-image-webp="./img/dest-1.webp" width="336"
                  height="336" alt="Los Roques">
              </div>
              <div class="dest__subtitle tx-22-18">
                Los Roques
              </div>
              <div class="dest__texts">
                <p class="dest__text tx-16">
                  Njut av de vackraste stränderna i världen, i Tsunami Inn eller lyxig katamaran.
                </p>
              </div>
            </li>
            <li class="dest__item">
              <div class="dest__image">
                <img src="." data-rd-image="./img/dest-2.jpg" data-rd-image-webp="./img/dest-2.webp" width="336"
                  height="336" alt="Guacuco Beach">
              </div>
              <div class="dest__subtitle tx-22-18">
                Guacuco Beach
              </div>
              <div class="dest__texts">
                <p class="dest__text tx-16">
                  Upptäck det mest exklusiva och kompletta strandhotellet på Isla Margarita.
                </p>
              </div>
            </li>
            <li class="dest__item">
              <div class="dest__image">
                <img src="." data-rd-image="./img/dest-3.jpg" data-rd-image-webp="./img/dest-3.webp" width="336"
                  height="336" alt="El Yaque Beach">
              </div>
              <div class="dest__subtitle tx-22-18">
                El Yaque Beach
              </div>
              <div class="dest__texts">
                <p class="dest__text tx-16">
                  Vila och njut av de bästa äventyren på 3 olika hotell.
                </p>
              </div>
            </li>
            <li class="dest__item">
              <div class="dest__image">
                <img src="." data-rd-image="./img/dest-4.jpg" data-rd-image-webp="./img/dest-4.webp" width="336"
                  height="336" alt="Coche Islan">
              </div>
              <div class="dest__subtitle tx-22-18">
                Coche Islan
              </div>
              <div class="dest__texts">
                <p class="dest__text tx-16">
                  Ta en välförtjänt vila på den vackra stranden på det allt-inkluderade hotellet.
                </p>
              </div>
            </li>
            <li class="dest__item">
              <div class="dest__image">
                <img src="." data-rd-image="./img/dest-5.jpg" data-rd-image-webp="./img/dest-5.webp" width="336"
                  height="336" alt="Puerto La Cruz">
              </div>
              <div class="dest__subtitle tx-22-18">
                Puerto La Cruz
              </div>
              <div class="dest__texts">
                <p class="dest__text tx-16">
                  Koppla av eller håll företagsevent på det bästa 5-stjärniga hotellet i regionen.
                </p>
              </div>
            </li>
            <li class="dest__item">
              <div class="dest__image">
                <img src="." data-rd-image="./img/dest-6.jpg" data-rd-image-webp="./img/dest-6.webp" width="336"
                  height="336" alt="Adicora">
              </div>
              <div class="dest__subtitle tx-22-18">
                Adicora
              </div>
              <div class="dest__texts">
                <p class="dest__text tx-16">
                  Upptäck det nyaste hotellet med en exklusiv strandklubb som vetter mot havet.
                </p>
              </div>
            </li>
          </ul>
        </div>
      </section>
      <!-- end dest -->

    </main>
    <!-- start footer -->
    <?php
    include 'footer.php';
    ?>
    <!-- end footer -->
  </div>
</body>

</html>