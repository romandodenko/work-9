 <!DOCTYPE html>
 <html lang="fi">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title"
     content="Odotamme sinua Hotelli Kämpissä, jossa uusin ja paras palvelu, korkeat arvosanat ja huomio yksityiskohtiin tekevät vierailustasi unohtumattoman!">
   <meta property="og:site_name"
     content="Tervetuloa Suomen uusimpaan ja ensimmäiseen Hotelli Kämpiin! Olemme ylpeitä hotellimme korkeasta arvosanasta, mikä johtuu erinomaisesta palvelustamme ja huomiosta yksityiskohtiin.">
   <meta name="twitter:title"
     content="Odotamme sinua Hotelli Kämpissä, jossa uusin ja paras palvelu, korkeat arvosanat ja huomio yksityiskohtiin tekevät vierailustasi unohtumattoman!">
   <meta name="twitter:description"
     content="Tervetuloa Suomen uusimpaan ja ensimmäiseen Hotelli Kämpiin! Olemme ylpeitä hotellimme korkeasta arvosanasta, mikä johtuu erinomaisesta palvelustamme ja huomiosta yksityiskohtiin.">
   <meta name="description"
     content="Tervetuloa Suomen uusimpaan ja ensimmäiseen Hotelli Kämpiin! Olemme ylpeitä hotellimme korkeasta arvosanasta, mikä johtuu erinomaisesta palvelustamme ja huomiosta yksityiskohtiin.">
   <title>Odotamme sinua Hotelli Kämpissä, jossa uusin ja paras palvelu, korkeat arvosanat ja huomio yksityiskohtiin
     tekevät vierailustasi unohtumattoman!</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/ShareTechMono-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/CutiveMono-Regular.woff2" as="font" type="font/woff2" crossorigin>
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

           <form class="form" action="#!" name="form" autocomplete="off">
             <div class="form__inputs">
               <input class="form__input input" type="text" name="text" id="text" placeholder="Nimi" required>
               <input class="form__input input" type="email" name="email" id="email" placeholder="Sähköposti" required>
             </div>
             <button class="form__button but" type="submit">
               Lähettää
             </button>
           </form>
           <address class="contacts__address">
             <ul class="contacts__list">
               <li class="contacts__item tx-16-14">
                 Pohjoisesplanadi, 29, Helsinki, 00100, Finland
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="tel:+358958409520">
                   +358 9 5840 9520
                 </a>
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="mailto:sales@hotelkamp.com">
                   sales@hotelkamp.com
                 </a>
               </li>
             </ul>
           </address>

           <div class="contacts__map">
             <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1984.7761093412025!2d24.944647177469637!3d60.167885243618!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x46920bcebfa71baf%3A0xdc610e1e7389723d!2sPohjoisesplanadi%2029%2C%2000100%20Helsinki%2C%20Finland!5e0!3m2!1sen!2sen!4v1698392439797!5m2!1sen!2sen"
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