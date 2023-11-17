 <!DOCTYPE html>
 <html lang="ro">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Hotel magnific cu vederi frumoase și cazare sigură.">
   <meta property="og:site_name"
     content="Este un hotel și o reședință modernă, situată pe malul Mării Negre, în stațiunea Mamaia, România. Această stațiune oferă o varietate de facilități și oportunități de vacanță">
   <meta name="twitter:title" content="Hotel magnific cu vederi frumoase și cazare sigură.">
   <meta name="twitter:description"
     content="Este un hotel și o reședință modernă, situată pe malul Mării Negre, în stațiunea Mamaia, România. Această stațiune oferă o varietate de facilități și oportunități de vacanță">
   <meta name="description"
     content="Este un hotel și o reședință modernă, situată pe malul Mării Negre, în stațiunea Mamaia, România. Această stațiune oferă o varietate de facilități și oportunități de vacanță">
   <title>Hotel magnific cu vederi frumoase și cazare sigură.</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/DelaGothicOne-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/Merriweather-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
           <h1 class="contacts__title tt-52-36">
             Contacte
           </h1>
           <div class="contacts__content">
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d22831.867649611468!2d28.612630772276443!3d44.33084459727272!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40baf5e6ef72edbd%3A0x5c69d110b638b042!2sN%C4%83vodari%20905700%2C%20Romania!5e0!3m2!1sen!2sen!4v1695703672611!5m2!1sen!2sen"
                 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                 referrerpolicy="no-referrer-when-downgrade"></iframe>
             </div>
             <div class="contacts__left">
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Nume" required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="Corespondenţă"
                     required>
                 </div>
                 <button class="form__button but" type="submit">
                   A trimite
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item">
                     <a href="tel:+40241607920">
                       +40 241 607 920
                     </a>
                   </li>
                   <li class="contacts__item">
                     <a href="mailto:reservations@marinaregia.com ">
                       reservations@marinaregia.com
                     </a>
                   </li>
                   <li class="contacts__item">
                     905700 Mamaia Nord, Constanta
                   </li>
                 </ul>
               </address>
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