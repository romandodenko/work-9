 <!DOCTYPE html>
 <html lang="fr">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Hôtel populaire avec une note élevée">
   <meta property="og:site_name"
     content="Est un hôtel de luxe situé dans la célèbre région de Bordeaux en France. Cet hôtel offre une expérience unique combinant le luxe d'un château et la tradition viticole.">
   <meta name="twitter:title" content="Hôtel populaire avec une note élevée">
   <meta name="twitter:description"
     content="Est un hôtel de luxe situé dans la célèbre région de Bordeaux en France. Cet hôtel offre une expérience unique combinant le luxe d'un château et la tradition viticole.">
   <meta name="description"
     content="Est un hôtel de luxe situé dans la célèbre région de Bordeaux en France. Cet hôtel offre une expérience unique combinant le luxe d'un château et la tradition viticole.">
   <title>Hôtel populaire avec une note élevée</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/CroissantOne-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/WorkSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
             <h1 class="contacts__title tt-40-28">
               Contacts
             </h1>
             <form class="form" action="#!" name="form" autocomplete="off">
               <div class="form__inputs">
                 <input class="form__input input" type="text" name="text" id="text" placeholder="Nom" required>
                 <input class="form__input input" type="email" name="email" id="email" placeholder="Mail" required>
               </div>
               <button class="form__button but" type="submit">
                 Envoyer
               </button>
             </form>
           </div>
           <div class="contacts__bottom">
             <address class="contacts__address">
              <ul class="contacts__list">
                <li class="contacts__item tx-20-18">
                  88 Chemin du Barp 33 850 Léognan
                </li>
                <li class="contacts__item tx-20-18">
                  <a href="tel:+330535569670">
                    +33 (0)5 35 56 96 70
                  </a>
                </li>
              </ul>
             </address>
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2835.3089530120783!2d-0.6397739231815942!3d44.71330578322454!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd54dfcb78d3f8af%3A0x3d6389530ae8bce5!2s88%20Chem.%20du%20Barp%2033%20850%2C%2033850%20L%C3%A9ognan%2C%20France!5e0!3m2!1sen!2sen!4v1695375328492!5m2!1sen!2sen"
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