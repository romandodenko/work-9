 <!DOCTYPE html>
 <html lang="nl">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title"
     content="Hotel Restaurant Stad Munster is een resorthotel met topspellen en gegarandeerde winsten.">
   <meta property="og:site_name"
     content="Hotel Restaurant Stad Munster is een gezellig hotel in het centrum van Wageningen, Nederland. Het hotel biedt comfortabele accommodatie en uitstekend eten in het restaurant. ">
   <meta name="twitter:title"
     content="Hotel Restaurant Stad Munster is een resorthotel met topspellen en gegarandeerde winsten.">
   <meta name="twitter:description"
     content="Hotel Restaurant Stad Munster is een gezellig hotel in het centrum van Wageningen, Nederland. Het hotel biedt comfortabele accommodatie en uitstekend eten in het restaurant. ">
   <meta name="description"
     content="Hotel Restaurant Stad Munster is een gezellig hotel in het centrum van Wageningen, Nederland. Het hotel biedt comfortabele accommodatie en uitstekend eten in het restaurant. ">
   <title>Hotel Restaurant Stad Munster is een resorthotel met topspellen en gegarandeerde winsten.</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/Nunito-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/LuckiestGuy-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
                 <a href="tel:+0543512121">
                   +0543 512 121
                 </a>
               </li>
               <li class="contacts__item tx-16-14">
                 Markt 11, 7101 DA Winterswijk
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="mailto:info@stadmunster.nl">
                   info@stadmunster.nl
                 </a>
               </li>
             </ul>
           </address> 
           <div class="contacts__map">
             <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2457.912655717868!2d6.717300077112337!3d51.97201717665523!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8653373af1787%3A0xe22f2e325f06c347!2sMarkt%2011%2C%207101%20DA%20Winterswijk%2C%20Netherlands!5e0!3m2!1sen!2sen!4v1696579345924!5m2!1sen!2sen"
               width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
               referrerpolicy="no-referrer-when-downgrade"></iframe>
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