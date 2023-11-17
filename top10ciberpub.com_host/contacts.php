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
       <section class="contacts">
         <div class="container">
           <h1 class="contacts__title tt-64-34">
             Kontakter
           </h1>
           <div class="contacts__content">
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2035.0941277952938!2d18.072051877446885!3d59.33138231085617!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465f9d597d09e3d5%3A0x58b129d949912354!2sArsenalsgatan%206%2C%20111%2047%20Stockholm%2C%20Sweden!5e0!3m2!1sen!2sen!4v1697616736528!5m2!1sen!2sen"
                 width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                 referrerpolicy="no-referrer-when-downgrade"></iframe>
             </div>
             <div class="contacts__left">
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Namn" required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="E-post" required>
                 </div>
                 <button class="form__button but" type="submit">
                   Skicka
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item tx-16">
                     Arsenalsgatan 6, Norrmalm, 111 47 Stockholm
                   </li>
                   <li class="contacts__item tx-16">
                     <a href="tel:+0200125402">
                       +0200 125 402
                     </a>
                   </li>
                   <li class="contacts__item tx-16">
                     <a href="mailto:contact@slh.com">
                       contact@slh.com
                     </a>
                   </li>
                 </ul>
               </address>
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