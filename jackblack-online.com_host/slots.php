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
       <!-- start slot -->
       <section class="slot">
         <div class="container">
           <h1 class="slot__title tt-46-32">
             Spelkamer
           </h1>
           <div class="slot__texts">
            <p class="slot__text tx-16-14">
              De speelkamer, gelegen in het hart van het hotel, biedt een ruime keuze aan speelautomaten en een
              verzameling populaire gokspellen. Van klassieke slots tot moderne videoslots, er is hier voor ieder wat
              wils.
            </p>
             <p class="slot__text tx-16-14">
               Ons casino is een van de beste plekken voor entertainment en ontspanning in de regio. Dit is een luxe
               casino dat bezoekers een ongelofelijke hoogwaardige spelervaring en een uniek sfeervol design biedt.
             </p>
             <p class="slot__text tx-16-14">
               De speelautomaten in de speelhal hebben uitstekende graphics, spannende geluidseffecten en interessante
               bonusspellen. Elke machine is ontworpen met behulp van de nieuwste technologie om maximaal comfort en
               plezier voor spelers te garanderen.
             </p> 
           </div>
           <ul class="slot__images">
             <li class="slot__image">
               <picture>
                 <source media="(min-width: 320px)" srcset="./img/slot-1.webp" type="image/webp">
                 <img src="./img/slot-1.jpg" loading="lazy" width="336" height="336" alt="Spelkamer">
               </picture>
             </li>
             <li class="slot__image">
               <picture>
                 <source media="(min-width: 320px)" srcset="./img/slot-2.webp" type="image/webp">
                 <img src="./img/slot-2.jpg" loading="lazy" width="336" height="336" alt="Spelkamer">
               </picture>
             </li>
             <li class="slot__image">
               <picture>
                 <source media="(min-width: 320px)" srcset="./img/slot-3.webp" type="image/webp">
                 <img src="./img/slot-2.jpg" loading="lazy" width="336" height="336" alt="Spelkamer">
               </picture>
             </li>
           </ul>
         </div>
       </section>
       <!-- end slot -->
     </main>
     <!-- start footer -->
     <?php
     include 'footer.php';
     ?>
     <!-- end footer -->
   </div>
 </body>

 </html>