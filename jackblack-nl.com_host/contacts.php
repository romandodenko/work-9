 <!DOCTYPE html>
 <html lang="nl">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Brasss Hotel Suites is een resorthotel met topspellen en gegarandeerde winsten.">
   <meta property="og:site_name"
     content="Brasss Hotel Suites is een geweldige plek om te verblijven in Amsterdam en biedt een combinatie van comfort, stijl en gemak in het hart van deze geweldige stad.">
   <meta name="twitter:title" content="Brasss Hotel Suites is een resorthotel met topspellen en gegarandeerde winsten.">
   <meta name="twitter:description"
     content="Brasss Hotel Suites is een geweldige plek om te verblijven in Amsterdam en biedt een combinatie van comfort, stijl en gemak in het hart van deze geweldige stad.">
   <meta name="description"
     content="Brasss Hotel Suites is een geweldige plek om te verblijven in Amsterdam en biedt een combinatie van comfort, stijl en gemak in het hart van deze geweldige stad.">
   <title>Brasss Hotel Suites is een resorthotel met topspellen en gegarandeerde winsten.</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/DelaGothicOne-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/Raleway-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
           <h1 class="contacts__title tt-46-32">
             Contacten
           </h1>
           <div class="contacts__content">
             <div class="contacts__left">
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Naam" required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="Mail" required>
                 </div>
                 <button class="form__button but" type="submit">
                   Versturen
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                  <li class="contacts__item tx-16-14">
                    <a href="tel:+310235427804">
                      +31 (0) 23-542 78 04
                    </a>
                  </li>
                   <li class="contacts__item tx-16-14">
                     Brasss Hotel Suites Korte Veerstraat 3, 2011 CL Haarlem,a The Netherlands
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="mailto:info@brasss-hotelsuites.nl">
                       info@brasss-hotelsuites.nl
                     </a>
                   </li>
                 </ul>
               </address>
             </div>

             <div class="contacts__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2435.4915207033755!2d4.635132777129935!3d52.37963944661135!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c5ef6a32b188f7%3A0xfe08058e4eacbabd!2sBrasss%20Hotel%20Suites!5e0!3m2!1sen!2sen!4v1696575765451!5m2!1sen!2sen" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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