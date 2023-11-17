 <!DOCTYPE html>
 <html lang="fr">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Hôtel populaire avec une note élevée">
   <meta property="og:site_name"
     content="Est un hôtel de luxe situé dans la célèbre région de Bordeaux en France. Cet hôtel offre une expérience unique combinant le luxe d'un château et la tradition viticole.">
   <meta name="twitter:title" content="Hôtel populaire avec une note élevée">
   <meta name="twitter:description"
     content="Est un hôtel de luxe situé dans la célèbre région de Bordeaux en France. Cet hôtel offre une expérience unique combinant le luxe d'un château et la tradition viticole.">
   <meta name="description"
     content="Est un hôtel de luxe situé dans la célèbre région de Bordeaux en France. Cet hôtel offre une expérience unique combinant le luxe d'un château et la tradition viticole.">
   <title>Hôtel populaire avec une note élevée</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/CroissantOne-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/WorkSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
       <!-- start no-found -->
       <section class="no-found">
         <div class="container">
           <h1 class="no-found__title">
             Désolé, cette page n'a pas été trouvée !
           </h1>
           <p class="no-found__text">
             Cher utilisateur. Cette page n'a pas été trouvée, veuillez aller à la page principale.
           </p>
           <a class="no-found__link" href="index.php">
             Maison
           </a>
         </div>
       </section>
       <!-- end no-found -->
     </main>
     <!-- start footer -->
     <?php
     include 'footer.php';
     ?>
     <!-- end footer -->
   </div>
 </body>

 </html>