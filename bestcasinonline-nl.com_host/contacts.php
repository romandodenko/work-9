 <!DOCTYPE html>
 <html lang="nl">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Comfortabele en veilige kamers, evenals lage prijzen..">
   <meta property="og:site_name"
     content="Een historisch hotel gelegen in het hart van Amsterdam, Nederland. Het hotel heeft een rijke geschiedenis en biedt gasten comfortabele accommodatie en faciliteiten.">
   <meta name="twitter:title" content="Comfortabele en veilige kamers, evenals lage prijzen.">
   <meta name="twitter:description"
     content="Een historisch hotel gelegen in het hart van Amsterdam, Nederland. Het hotel heeft een rijke geschiedenis en biedt gasten comfortabele accommodatie en faciliteiten.">
   <meta name="description"
     content="Een historisch hotel gelegen in het hart van Amsterdam, Nederland. Het hotel heeft een rijke geschiedenis en biedt gasten comfortabele accommodatie en faciliteiten.">
   <title>Comfortabele en veilige kamers, evenals lage prijzen.</title>
   <link rel="shortcut icon" href="./img/favicon.png">
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
           <h1 class="contacts__title tt-42-26">
            Contacten
           </h1>
           <div class="contacts__content">
             <div class="contacts__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2436.121554865861!2d4.8908971943580335!3d52.36821587532278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c609bf924311ab%3A0xd13451c50b63197f!2sNieuwe%20Doelenstraat%2024%2C%201012%20CP%20Amsterdam%2C%20Netherlands!5e0!3m2!1sen!2sru!4v1695196451769!5m2!1sen!2sru" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
             </div>
             <div class="contacts__part">
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item tx-20-16">
                    Nieuwe Doelenstraat 24, 1012 CP Amsterdam, Netherlands
                   </li>
                   <li class="contacts__item tx-20-16">
                     <a class="contacts__link tx-20-16" href="tel:+31205311777">
                      +31205311777
                     </a>
                   </li>
                   <li class="contacts__item tx-20-16">
                     <a class="contacts__link tx-20-16" href="mailto:booking@tda.com">
                       booking@tda.com
                     </a>
                   </li>
                 </ul>
               </address>
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Namn" required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="Post" required>
                 </div>
                 <button class="form__button but" type="submit">Att skicka</button>
               </form>
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