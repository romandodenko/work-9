 <!DOCTYPE html>
 <html lang="de">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title"
     content="Das Rocco Forte Hotel Amigo ist ein Luxushotel im Herzen Belgiens mit einem hoch bewerteten Spielzimmer und sicheren Spielen">
   <meta property="og:site_name"
     content="Das Rocco Forte Hotel Amigo ist ein Luxushotel im Herzen Belgiens. Wir sind stolz auf unseren Ruf als sicheres und eines der besten Hotels der Region sowie auf unsere hohe Gästebewertung.">
   <meta name="twitter:title"
     content="Das Rocco Forte Hotel Amigo ist ein Luxushotel im Herzen Belgiens mit einem hoch bewerteten Spielzimmer und sicheren Spielen">
   <meta name="twitter:description"
     content="Das Rocco Forte Hotel Amigo ist ein Luxushotel im Herzen Belgiens. Wir sind stolz auf unseren Ruf als sicheres und eines der besten Hotels der Region sowie auf unsere hohe Gästebewertung.">
   <meta name="description"
     content="Das Rocco Forte Hotel Amigo ist ein Luxushotel im Herzen Belgiens. Wir sind stolz auf unseren Ruf als sicheres und eines der besten Hotels der Region sowie auf unsere hohe Gästebewertung.">
   <title>Das Rocco Forte Hotel Amigo ist ein Luxushotel im Herzen Belgiens mit einem hoch bewerteten Spielzimmer und
     sicheren Spielen</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/JetBrainsMono-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/PlaypenSans-SemiBold.woff2" as="font" type="font/woff2" crossorigin>
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
       <section class="contacts">
         <div class="container">
           <h1 class="contacts__title tt-42-30">
             Kontakte
           </h1>
           <form class="form" action="#!" name="form" autocomplete="off">
             <div class="form__inputs">
               <input class="form__input input" type="text" name="text" id="text" placeholder="Name..." required>
               <input class="form__input input" type="email" name="email" id="email" placeholder="Email..." required>
             </div>
             <button class="form__button but" type="submit">
               Schicken
             </button>
           </form>
           <address class="contacts__address">
             <ul class="contacts__list">
               <li class="contacts__item tx-16-14">
                 Hotel Amigo, Rue de l'Amigo, Brüssel, Belgien
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="tel:+3225474747">
                   +32 2 547 4747
                 </a>
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="mailto:enquiries.amigo@roccofortehotels.com">
                   enquiries.amigo@roccofortehotels.com
                 </a>
               </li>
             </ul>
           </address>
           <div class="contacts__map">
             <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2519.1911349464044!2d4.348820477064275!3d50.84614475879359!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c3c478cdd61231%3A0x64f6400acaad431!2sHotel%20Amigo!5e0!3m2!1sen!2sen!4v1699951190984!5m2!1sen!2sen"
               width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
               referrerpolicy="no-referrer-when-downgrade"></iframe>
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