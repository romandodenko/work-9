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
     content="Wir bieten eine Vielzahl fesselnder sozialer Spiele, die vollkommen kostenfrei sind und Ihnen keine Möglichkeit bieten, echtes Geld zu gewinnen. Unser Hauptanliegen ist es, Ihnen eine unterhaltsame Spielerfahrung in einer freundlichen und sicheren Umgebung zu bieten.">
   <meta name="twitter:title"
     content="Willkommen auf unserer einzigartigen Gaming-Plattform in der Schweiz mit hohen Gewinnen und bewerteten Spielen">
   <meta name="twitter:description"
     content="Wir bieten eine Vielzahl fesselnder sozialer Spiele, die vollkommen kostenfrei sind und Ihnen keine Möglichkeit bieten, echtes Geld zu gewinnen. Unser Hauptanliegen ist es, Ihnen eine unterhaltsame Spielerfahrung in einer freundlichen und sicheren Umgebung zu bieten.">
   <meta name="description"
     content="Wir bieten eine Vielzahl fesselnder sozialer Spiele, die vollkommen kostenfrei sind und Ihnen keine Möglichkeit bieten, echtes Geld zu gewinnen. Unser Hauptanliegen ist es, Ihnen eine unterhaltsame Spielerfahrung in einer freundlichen und sicheren Umgebung zu bieten.">
   <title>Willkommen auf unserer einzigartigen Gaming-Plattform in der Schweiz mit hohen Gewinnen und bewerteten
     Spielen
   </title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/Inconsolata-Bold.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/.woff2" as="font" type="font/woff2" crossorigin>
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
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1582.7380430997512!2d11.571900012598094!3d48.15193810311525!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479e75e9101c39f9%3A0x6b5b883ce7467408!2sAIC%20Architekten%20Ingenieur%20Consult%20KG%20Versicherungsmakler!5e0!3m2!1sen!2sen!4v1698658115906!5m2!1sen!2sen"
                 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                 referrerpolicy="no-referrer-when-downgrade"></iframe>
             </div>
           </div>
           <address class="contacts__address">
             <ul class="contacts__list">
               <li class="contacts__item tx-16-14">
                 Zieblandstraße 7, 80799 München, Germany
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="tel:+4989201888720">
                   +4989201888720
                 </a>
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="mailto:maschinen2024@gmail.com">
                   maschinen2024@gmail.com
                 </a>
               </li>
             </ul>
           </address>
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