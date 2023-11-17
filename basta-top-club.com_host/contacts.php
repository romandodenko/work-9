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
       <section class="contacts">
         <div class="container">
           <h1 class="contacts__title tt-42-30">
             Kontakter
           </h1>
           <div class="contacts__content">
             <div class="contacts__left">
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Namn" required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="E-post" required>
                 </div>
                 <button class="form__button but" type="submit">
                   Skicka
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item tx-16-14">
                     Playa Guacuco, Isla Margarita
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="tel:+584122902000">
                       +58-412-2902000
                     </a>
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="mailto:Reservas@ParadiseHoteles.com">
                       Reservas@ParadiseHoteles.com
                     </a>
                   </li>
                 </ul>
               </address>
             </div>
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7831.500945667479!2d-63.82284520466343!3d11.05732543612698!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c31904a89a60823%3A0x56ce17350fe53bb8!2sPlaya%20Guacuco!5e0!3m2!1sen!2sen!4v1697772962856!5m2!1sen!2sen"
                 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                 referrerpolicy="no-referrer-when-downgrade"></iframe>
             </div>
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