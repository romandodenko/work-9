 <!DOCTYPE html>
 <html lang="fr">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title"
     content="Jeux et paris sportifs sécurisés, jeux passionnants et bien notés dans la salle de jeux">
   <meta property="og:site_name"
     content="Bienvenue dans l'un des bars sportifs les plus sûrs et les plus populaires de France ! Ce bar sportif est célèbre pour sa cote élevée auprès des visiteurs, ainsi que pour une variété de retransmissions de matchs de football et de compétitions sportives.">
   <meta name="twitter:title"
     content="Jeux et paris sportifs sécurisés, jeux passionnants et bien notés dans la salle de jeux">
   <meta name="twitter:description"
     content="Bienvenue dans l'un des bars sportifs les plus sûrs et les plus populaires de France ! Ce bar sportif est célèbre pour sa cote élevée auprès des visiteurs, ainsi que pour une variété de retransmissions de matchs de football et de compétitions sportives.">
   <meta name="description"
     content="Bienvenue dans l'un des bars sportifs les plus sûrs et les plus populaires de France ! Ce bar sportif est célèbre pour sa cote élevée auprès des visiteurs, ainsi que pour une variété de retransmissions de matchs de football et de compétitions sportives.">
   <title>Jeux et paris sportifs sécurisés, jeux passionnants et bien notés dans la salle de jeux</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/Lugrasimo-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/Sono-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
             Contacts
           </h1>
           <form class="form" action="#!" name="form" autocomplete="off">
             <div class="form__inputs">
               <input class="form__input input" type="text" name="text" id="text" placeholder="Nom" required>
               <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail" required>
             </div>
             <button class="form__button but" type="submit">
               Envoyer
             </button>
           </form>
           <address class="contacts__address">
             <ul class="contacts__list">
               <li class="contacts__item tx-16-14">
                 25/27, RUE FREDERIC SAUTON 75005 PARIS
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="tel:+0143294054">
                   +01 43 29 40 54
                 </a>
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="mailto:legaux-ciberpub@gmail.com">
                   legaux-ciberpub@gmail.com
                 </a>
               </li>
             </ul>
           </address>
           <div class="contacts__map">
             <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2625.4063066345634!2d2.346510676981259!3d48.85046210126381!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e671e6a580237f%3A0x9aa10eaf914ddf67!2s25%20Rue%20Fr%C3%A9d%C3%A9ric%20Sauton%2C%2075005%20Paris%2C%20France!5e0!3m2!1sen!2sen!4v1700113501802!5m2!1sen!2sen"
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