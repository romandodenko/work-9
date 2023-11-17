 <!DOCTYPE html>
 <html lang="fr">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Hôtel populaire avec une note élevée">
   <meta property="og:site_name"
     content="Le Château Prieure Marquet est l'endroit idéal pour ceux qui recherchent l'intimité, une escapade romantique et la possibilité d'apprécier le vin et la culture bordelaise dans l'atmosphère unique d'un ancien château et la beauté naturelle de la région de Bordeaux.">
   <meta name="twitter:title" content="Hôtel populaire avec une note élevée">
   <meta name="twitter:description"
     content="Le Château Prieure Marquet est l'endroit idéal pour ceux qui recherchent l'intimité, une escapade romantique et la possibilité d'apprécier le vin et la culture bordelaise dans l'atmosphère unique d'un ancien château et la beauté naturelle de la région de Bordeaux.">
   <meta name="description"
     content="Le Château Prieure Marquet est l'endroit idéal pour ceux qui recherchent l'intimité, une escapade romantique et la possibilité d'apprécier le vin et la culture bordelaise dans l'atmosphère unique d'un ancien château et la beauté naturelle de la région de Bordeaux.">
   <title>Hôtel populaire avec une note élevée</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/TitilliumWeb-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/IndieFlower-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
           <h1 class="slot__title tt-40-28">
             Salle de jeux
           </h1>
           <div class="slot__item">
             <div class="slot__descr">
               <div class="slot__texts">
                 <p class="slot__text tx-18-16">
                   La salle de jeux est un lieu unique où vous pourrez profiter des machines à sous les plus chaudes,
                   les meilleures et les premières. Si vous aimez jouer et souhaitez faire monter l’adrénaline, alors
                   cette salle de jeux est l’endroit idéal pour vous.
                 </p>
                 <p class="slot__text tx-18-16">
                   Nous proposons également une ambiance cosy et élégante pour vous et vos amis. Vous pourrez profiter
                   du jeu dans un environnement agréable et un personnel professionnel se fera un plaisir de vous aider
                   et de vous conseiller si nécessaire.
                 </p>
               </div>
             </div>
             <ul class="slot__images">
               <li class="slot__image">
                 <picture>
                   <source media="(min-width: 320px)" srcset="./img/slot-1.webp" type="image/webp">
                   <img src="./img/slot-1.jpg" width="300" height="300" alt="Salle de jeux">
                 </picture>
               </li>
               <li class="slot__image">
                 <picture>
                   <source media="(min-width: 320px)" srcset="./img/slot-2.webp" type="image/webp">
                   <img src="./img/slot-2.jpg" width="300" height="300" alt="Salle de jeux">
                 </picture>
               </li>
               <li class="slot__image">
                 <picture>
                   <source media="(min-width: 320px)" srcset="./img/slot-3.webp" type="image/webp">
                   <img src="./img/slot-3.jpg" width="300" height="300" alt="Salle de jeux">
                 </picture>
               </li>
             </ul>
           </div>
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