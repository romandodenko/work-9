 <!DOCTYPE html>
 <html lang="da">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Sikkert hotel med høje gevinster og rangeringsspil">
   <meta property="og:site_name"
     content="Copenhagen Marriott Hotel er et luksushotel med en ideel beliggenhed i hjertet af København, som tilbyder gæsterne komfortabel indkvartering og en utrolig udsigt over denne fantastiske by. Med sin historiske atmosfære og moderne faciliteter er dette hotel det perfekte sted for både fritids- og forretningsrejsende.">
   <meta name="twitter:title" content="Sikkert hotel med høje gevinster og rangeringsspil">
   <meta name="twitter:description"
     content="Copenhagen Marriott Hotel er et luksushotel med en ideel beliggenhed i hjertet af København, som tilbyder gæsterne komfortabel indkvartering og en utrolig udsigt over denne fantastiske by. Med sin historiske atmosfære og moderne faciliteter er dette hotel det perfekte sted for både fritids- og forretningsrejsende.">
   <meta name="description"
     content="Copenhagen Marriott Hotel er et luksushotel med en ideel beliggenhed i hjertet af København, som tilbyder gæsterne komfortabel indkvartering og en utrolig udsigt over denne fantastiske by. Med sin historiske atmosfære og moderne faciliteter er dette hotel det perfekte sted for både fritids- og forretningsrejsende.">
   <title>Sikkert hotel med høje gevinster og rangeringsspil</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/AlumniSansCollegiateOne-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/Montserrat-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
             Kontaktpersoner
           </h1>
           <div class="contacts__content">
             <div class="contacts__left">
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Navn" required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail" required>
                 </div>
                 <button class="form__button but" type="submit">
                   Sende
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item tx-16-14">
                     KALVEBOD BRYGGE 5, COPENHAGEN, DENMARK, 1560
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="tel:+4588339999">
                       +45 88-33 99 99
                     </a>
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="mailto:info@copenhagenmarriotthotel.com">
                       info@copenhagenmarriotthotel.com
                     </a>
                   </li>
                 </ul>
               </address>
             </div>
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2250.1755321040087!2d12.571243177276148!3d55.66854769847714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4652536c9d07ab95%3A0xa71129cc40a93153!2sKalvebod%20Brygge%205%2C%201560%20K%C3%B8benhavn%2C%20Denmark!5e0!3m2!1sen!2sen!4v1697611338910!5m2!1sen!2sen"
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