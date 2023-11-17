 <!DOCTYPE html>
 <html lang="nl">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Zicht op Twente is een resorthotel met topspellen en gegarandeerde winsten.">
   <meta property="og:site_name"
     content="Zicht op Twent is een gezellig hotel gelegen in de prachtige natuur van de regio Twente in Nederland. Dit hotel heeft een rustige sfeer en biedt gasten de mogelijkheid om te genieten van de omliggende natuur en comfort.">
   <meta name="twitter:title" content="Zicht op Twente is een resorthotel met topspellen en gegarandeerde winsten.">
   <meta name="twitter:description"
     content="Zicht op Twent is een gezellig hotel gelegen in de prachtige natuur van de regio Twente in Nederland. Dit hotel heeft een rustige sfeer en biedt gasten de mogelijkheid om te genieten van de omliggende natuur en comfort.">
   <meta name="description"
     content="Zicht op Twent is een gezellig hotel gelegen in de prachtige natuur van de regio Twente in Nederland. Dit hotel heeft een rustige sfeer en biedt gasten de mogelijkheid om te genieten van de omliggende natuur en comfort.">
   <title>Zicht op Twente is een resorthotel met topspellen en gegarandeerde winsten.</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/Lato.woff2" as="font" type="font/woff2" crossorigin>
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
           <h1 class="contacts__title tt-46-32">
            Contacten 
           </h1>
           <div class="contacts__content">
             <div class="contacts__left">
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Naam" required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="Mail" required>
                 </div>
                 <button class="form__button but" type="submit">
                  Versturen
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item tx-16-14">
                     Traasweg 5 7475 PS Markelo
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="tel:+0547821010">
                       +0547 – 82 10 10
                     </a>
                   </li>
                   <li class="contacts__item tx-16-14">
                     <a href="mailto:reservations@zichtoptwente.nl">
                       reservations@zichtoptwente.nl
                     </a>
                   </li>
                 </ul>
               </address>
             </div>

             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2443.8522462230717!2d6.473183977123356!3d52.22790215781394!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c7f461b576922f%3A0x21c4f1223cf2b0aa!2sTraasweg%205%2C%207475%20PS%20Markelo%2C%20Netherlands!5e0!3m2!1sen!2sen!4v1696240548573!5m2!1sen!2sen"
                 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                 referrerpolicy="no-referrer-when-downgrade"></iframe>
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