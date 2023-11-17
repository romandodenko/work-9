<!DOCTYPE html>
<html lang="de">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title"
    content="Wir präsentieren Ihnen eine exklusive Präsentation von Simulatoren verschiedener Spielarten">
  <meta property="og:site_name"
    content="Unsere Simulationsspiele bieten fesselndes Gameplay, atemberaubende Grafiken und außergewöhnliche Unterhaltung. Sie werden zu Recht in die Liste der besten Spieleunterhaltung aufgenommen">
  <meta name="twitter:title"
    content="Wir präsentieren Ihnen eine exklusive Präsentation von Simulatoren verschiedener Spielarten">
  <meta name="twitter:description"
    content="Unsere Simulationsspiele bieten fesselndes Gameplay, atemberaubende Grafiken und außergewöhnliche Unterhaltung. Sie werden zu Recht in die Liste der besten Spieleunterhaltung aufgenommen">
  <meta name="description"
    content="Unsere Simulationsspiele bieten fesselndes Gameplay, atemberaubende Grafiken und außergewöhnliche Unterhaltung. Sie werden zu Recht in die Liste der besten Spieleunterhaltung aufgenommen">
  <title>Wir präsentieren Ihnen eine exklusive Präsentation von Simulatoren verschiedener Spielarten</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/SpaceGrotesk-Bold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/OpenSans-SemiBold.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/OpenSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="stylesheet" href="./css/main-min.css">
  <script defer src="./js/main.js"></script>
</head>

<body>
  <div class="page page_change">
    <!-- start header -->
    <?php
    include 'header.php';
    ?>
    <!-- end header -->
    <main>
      <!-- start game -->
      <section class="game rd-upload">
        <div class="container">
          <h1 class="game__title tt-31-27">
            Video Poker World
          </h1>
          <div class="game__texts">
            <p class="game__text tx-17">
              Willkommen in der wunderbaren Welt der Video Poker World! Dieses tolle Spiel bietet Ihnen nicht nur
              spannende Unterhaltung, sondern auch die Möglichkeit, sich mit anderen Spielern in unserer Bestenliste zu
              messen.
            </p>
            <p class="game__text tx-17">
              Video Poker World ist das beste Spiel seiner Art und garantiert Ihnen jede Menge Spaß. Es gibt eine große
              Auswahl an Pokeroptionen, bei denen Sie Ihr Können und Ihre strategischen Fähigkeiten unter Beweis stellen
              können. Gleichzeitig müssen Sie sich keine Sorgen um den Gewinn von echtem Geld machen, da alle Spiele
              ausschließlich in einer virtuellen Umgebung gespielt werden.
            </p>
            <p class="game__text tx-17">
              Video Poker World umfasst die heißesten und beliebtesten Pokervarianten, mit denen Sie echte Spannung
              erleben können. Sie können Ihre Spielfähigkeiten weiterentwickeln und Ihre Strategie verbessern, mit dem
              Ziel, der Beste in der Rangliste zu sein. Es gibt keine Einschränkungen – Sie können mit allen Spielern
              auf der ganzen Welt spielen und konkurrieren.
            </p>
          </div>
          <ul class="game__images">
            <li class="game__image">
              <img src="." data-rd-image="./img/game-1.jpg" data-rd-image-webp="./img/game-1.webp" width="336"
                height="336" alt="Video Poker World">
            </li>
            <li class="game__image">
              <img src="." data-rd-image="./img/game-1-2.jpg" data-rd-image-webp="./img/game-1-2.webp" width="336"
                height="336" alt="Video Poker World">
            </li>
          </ul>
        </div>
      </section>
      <!-- end game -->

      <!-- start contacts -->
      <section class="contacts rd-upload" id="contacts">
        <div class="contacts__container container">
          <div class="contacts__descr">
            <h2 class="contacts__title tt-37-30">
              Füllen Sie das Formular aus und bestellen Sie das Spiel
            </h2>
            <form class="form" action="#!" name="form" autocomplete="off">
              <div class="form__inputs">
                <label class="form__label" for="text">
                  <span class="tx-17">
                    Gib deinen Namen ein
                  </span>
                  <input class="form__input input" type="text" name="text" id="text" required>
                </label>
                <label class="form__label" for="email">
                  <span class="tx-17">
                    Geben sie ihre E-Mail Adresse ein
                  </span>
                  <input class="form__input input" type="email" name="email" id="email" required>
                </label>
              </div>
              <button class="form__button but" type="submit">
                Schicken
                <img src="." data-rd-image="./img/arrow.svg" data-rd-image-webp="./img/arrow.svg" width="18" height="8"
                  alt="Icon arrow">
              </button>
            </form>
          </div>
          <div class="contacts__right">
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2723.6717488935674!2d7.453101376904837!3d46.948490233190434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478e39dc9530d4d5%3A0x9831ad72994a4b6d!2sGerechtigkeitsgasse%201%2C%203011%20Bern%2C%20Switzerland!5e0!3m2!1sen!2sen!4v1699871442154!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address tx-23">
              Gerechtigkeitsgasse 1, Bern
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