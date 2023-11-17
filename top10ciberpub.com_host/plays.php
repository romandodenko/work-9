 <!DOCTYPE html>
 <html lang="sv">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title"
     content="Bank Hotel, en del av Small Luxury Hotels-kedjan - Tryggt hotell, med höga vinster">
   <meta property="og:site_name"
     content="Bank Hotel, en del av Small Luxury Hotels-kedjan, är ett exceptionellt hotell beläget i centrala Stockholm, i hjärtat av den historiska staden. Detta eleganta hotell förkroppsligar lyx, elegans och rik historia, och ger gästerna en oförglömlig upplevelse och förstklassig service.">
   <meta name="twitter:title"
     content="Bank Hotel, en del av Small Luxury Hotels-kedjan - Tryggt hotell, med höga vinster">
   <meta name="twitter:description"
     content="Bank Hotel, en del av Small Luxury Hotels-kedjan, är ett exceptionellt hotell beläget i centrala Stockholm, i hjärtat av den historiska staden. Detta eleganta hotell förkroppsligar lyx, elegans och rik historia, och ger gästerna en oförglömlig upplevelse och förstklassig service.">
   <meta name="description"
     content="Bank Hotel, en del av Small Luxury Hotels-kedjan, är ett exceptionellt hotell beläget i centrala Stockholm, i hjärtat av den historiska staden. Detta eleganta hotell förkroppsligar lyx, elegans och rik historia, och ger gästerna en oförglömlig upplevelse och förstklassig service.">
   <title>Bank Hotel, en del av Small Luxury Hotels-kedjan - Tryggt hotell, med höga vinster</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/RedHatDisplay-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/AbrilFatface-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
       <section class="restaurang restaurang_2" id="restaurang">
         <div class="container">
           <h1 class="restaurang__title tt-52-30">
             Spelrum
           </h1>
           <div class="restaurang__texts">
             <p class="restaurang__text tx-18-16">
               Vårt hotells spelrum är en av de bästa platserna för nöje och avkoppling i regionen. Detta lyxiga spelrum
               erbjuder besökarna en otrolig högkvalitativ spelupplevelse och en unik atmosfärisk design.
             </p>
             <p class="restaurang__text tx-18-16">
               Spelrummet ligger i hjärtat av hotellet och erbjuder ett brett utbud av spelautomater och en samling av
               populära hasardspel. Spelautomaterna i spelhallen har utmärkt grafik, spännande ljudeffekter och
               intressanta bonusspel.
             </p>
             <p class="restaurang__text tx-18-16">
               Varje maskin är designad med den senaste tekniken för att säkerställa maximal komfort och njutning för
               spelare.
             </p>
             <p class="restaurang__text tx-18-16">
               Den exklusiva atmosfären i spelhallen gör den också till en av de bästa platserna för spel. Detta skapar
               en känsla av prestige och lyx, vilket gör att besökare kan njuta av spelet i en miljö av elegans och
               stil.
             </p>
             <p class="restaurang__text tx-18-16">
               Professionell casinopersonal är alltid redo att ge hjälp och stöd under dina spelsessioner.
             </p>
           </div>
           <ul class="restaurang__list">
             <li class="restaurang__image">
               <picture>
                 <source media="(min-width: 320px)" srcset="./img/slot-1.webp" type="image/webp">
                 <img src="./img/slot-1.jpg" loading="lazy" width="336" height="336" alt="Spelrum">
               </picture>
             </li>
             <li class="restaurang__image">
               <picture>
                 <source media="(min-width: 320px)" srcset="./img/slot-2.webp" type="image/webp">
                 <img src="./img/slot-2.jpg" loading="lazy" width="336" height="336" alt="Spelrum">
               </picture>
             </li>
             <li class="restaurang__image">
               <picture>
                 <source media="(min-width: 320px)" srcset="./img/slot-3.webp" type="image/webp">
                 <img src="./img/slot-3.jpg" loading="lazy" width="336" height="336" alt="Spelrum">
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