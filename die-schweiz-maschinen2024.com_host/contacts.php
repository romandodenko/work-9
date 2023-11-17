 <!DOCTYPE html>
 <html lang="de">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title"
     content="Willkommen auf unserer einzigartigen Gaming-Plattform in der Schweiz mit hohen Gewinnen und bewerteten Spielen">
   <meta property="og:site_name"
     content="Die Sicherheit und das Wohlbefinden unserer Spieler stehen bei uns an erster Stelle. Unsere Spiele werden von Experten entwickelt und gepflegt, und Moderatoren überwachen die Einhaltung der Regeln und den freundlichen Umgang, um Ihnen ein positives Spielerlebnis zu bieten. Unser Ziel ist es, eine sichere und angenehme Umgebung zu schaffen, in der sich alle Spieler wohl und geschützt fühlen.">
   <meta name="twitter:title"
     content="Willkommen auf unserer einzigartigen Gaming-Plattform in der Schweiz mit hohen Gewinnen und bewerteten Spielen">
   <meta name="twitter:description"
     content="Die Sicherheit und das Wohlbefinden unserer Spieler stehen bei uns an erster Stelle. Unsere Spiele werden von Experten entwickelt und gepflegt, und Moderatoren überwachen die Einhaltung der Regeln und den freundlichen Umgang, um Ihnen ein positives Spielerlebnis zu bieten. Unser Ziel ist es, eine sichere und angenehme Umgebung zu schaffen, in der sich alle Spieler wohl und geschützt fühlen.">
   <meta name="description"
     content="Die Sicherheit und das Wohlbefinden unserer Spieler stehen bei uns an erster Stelle. Unsere Spiele werden von Experten entwickelt und gepflegt, und Moderatoren überwachen die Einhaltung der Regeln und den freundlichen Umgang, um Ihnen ein positives Spielerlebnis zu bieten. Unser Ziel ist es, eine sichere und angenehme Umgebung zu schaffen, in der sich alle Spieler wohl und geschützt fühlen.">
   <title>Willkommen auf unserer einzigartigen Gaming-Plattform in der Schweiz mit hohen Gewinnen und bewerteten
     Spielen
   </title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/JosefinSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/JosefinSans-BoldItalic.woff2" as="font" type="font/woff2" crossorigin>
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
       <section class="contacts rd-upload">
         <div class="container">
           <h1 class="contacts__title tt-42-30">
             Kontakte
           </h1>
           <div class="contacts__content">
             <form class="form" action="#!" name="form" autocomplete="off">
               <div class="form__inputs">
                 <input class="form__input input" type="text" name="text" id="text" placeholder="Name" required>
                 <input class="form__input input" type="email" name="email" id="email" placeholder="Email" required>
               </div>
               <button class="form__button but" type="submit">
                 Schicken
               </button>
             </form>
             <div class="contacts__image">
               <img src="." data-rd-image="./img/image-1.jpg" data-rd-image-webp="./img/image-1.webp" width="336"
                 height="336" alt="">
             </div>
           </div>
          <div class="contacts__bottom"> 
            <div class="contacts__map">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d930.9400208186728!2d8.681462911737217!3d50.12116033097818!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47bd0eb129bd87fb%3A0x658f7cd0929637cb!2sNewBase%20GmbH!5e0!3m2!1sen!2sen!4v1698655481275!5m2!1sen!2sen"
                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <address class="contacts__address">
              <ul class="contacts__list">
                <li class="contacts__item tx-16-14">
                  Oeder Weg 52-54, 60318 Frankfurt am Main, Germany
                </li>
                <li class="contacts__item tx-16-14">
                  <a href="tel:+49697191490">
                    +49697191490
                  </a>
                </li>
                <li class="contacts__item tx-16-14">
                  <a href="mailto:info@dach.de">
                    info@dach.de
                  </a>
                </li>
              </ul>
            </address>
          </div>
         </div>
       </section>
     </main>
     <!-- start footer -->
     <?php
     include 'footer.php';
     ?>
     <!-- end footer -->
   </div>
 </body>

 </html>