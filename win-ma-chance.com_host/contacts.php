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
       <!-- start contacts -->
       <section class="contacts">
         <div class="container">
           <div class="contacts__top">
             <h1 class="contacts__title tt-40-28">
               Contacts
             </h1>
             <form class="form" action="#!" name="form" autocomplete="off">
               <div class="form__inputs">
                 <input class="form__input input" type="text" name="text" id="text" placeholder="Nom" required>
                 <input class="form__input input" type="email" name="email" id="email" placeholder="Mail" required>
               </div>
               <button class="form__button but" type="submit">
                 Envoyer
               </button>
             </form>
           </div>
           <div class="contacts__bottom">
             <address class="contacts__address">
               <ul class="contacts__list">
                 <li class="contacts__item tx-20-18">
                   Château Prieuré Marquet, Château d'hôtes de prestige 33910 Saint-Martin-du-Bois, France
                 </li>
                 <li class="contacts__item tx-20-18">
                   <a href="tel:+33557494170">
                     +33 5 57 49 41 70
                   </a>
                 </li>
                 <li class="contacts__item tx-20-18">
                   <a href="mailto:contact@prieure-marquet.com">
                     contact@prieure-marquet.com
                   </a>
                 </li>
               </ul>
             </address>
             <div class="contacts__map">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2819.4712314203134!2d-0.25376312316935085!3d45.03565846192877!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x48001e59a5f742cf%3A0x99a664fe6dbe61cb!2sCh%C3%A2teau%20Prieur%C3%A9%20Marquet!5e0!3m2!1sen!2sen!4v1695379285160!5m2!1sen!2sen" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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