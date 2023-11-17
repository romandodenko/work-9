 <!DOCTYPE html>
 <html lang="fi">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Pelaa turvallisesti ja voita, ja ilmaiseksi!">
   <meta property="og:site_name"
     content="Esittely uhkapelisimulaattoreista, jotka eivät tarjoa mahdollisuutta voittaa oikeaa rahaa, tarjoaa mahtavaa viihdettä rahapelien harrastajille. Se sisältää parhaat, kuumimmat ja suosituimmat simulaatiopelit, joilla on korkea luokitus käyttäjien keskuudessa.">
   <meta name="twitter:title" content="Pelaa turvallisesti ja voita, ja ilmaiseksi!">
   <meta name="twitter:description"
     content="Esittely uhkapelisimulaattoreista, jotka eivät tarjoa mahdollisuutta voittaa oikeaa rahaa, tarjoaa mahtavaa viihdettä rahapelien harrastajille. Se sisältää parhaat, kuumimmat ja suosituimmat simulaatiopelit, joilla on korkea luokitus käyttäjien keskuudessa.">
   <meta name="description"
     content="Esittely uhkapelisimulaattoreista, jotka eivät tarjoa mahdollisuutta voittaa oikeaa rahaa, tarjoaa mahtavaa viihdettä rahapelien harrastajille. Se sisältää parhaat, kuumimmat ja suosituimmat simulaatiopelit, joilla on korkea luokitus käyttäjien keskuudessa.">
   <title>Pelaa turvallisesti ja voita, ja ilmaiseksi!</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/Eczar-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/Eczar-SemiBold.woff2" as="font" type="font/woff2" crossorigin>
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
             Yhteystiedot
           </h1>
           <div class="contacts__content">
             <div class="contacts__left">
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Nimi" required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="Sähköposti"
                     required>
                 </div>
                 <button class="form__button but" type="submit">
                   Lähettää
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item tx-16-14">
                     Untamontie 5, 00610 Helsinki, Finland
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="tel:+3589791343">
                       +3589791343
                     </a>
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="mailto:info@buy.com">
                       info@buy.com
                     </a>
                   </li>
                 </ul>
               </address>
             </div>
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1528.5110696531433!2d24.950277578311564!3d60.20996384410925!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x469209bd0c1011e1%3A0xf99fac66a90a27c0!2sUntamontie%205%2C%2000610%20Helsinki%2C%20Finland!5e0!3m2!1sen!2sen!4v1698390742637!5m2!1sen!2sen"
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