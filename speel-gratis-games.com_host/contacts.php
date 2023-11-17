 <!DOCTYPE html>
 <html lang="nl">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Veilig hotel, met hoge winsten en rankingspellen">
   <meta property="og:site_name"
     content="Hotel Restaurant Stad Munster is een charmant en elegant hotel gelegen in het hart van de pittoreske stad Wiltz, Luxemburg. Met een rijke geschiedenis die teruggaat tot de 18e eeuw, combineert dit prachtig gerestaureerde hotel op naadloze wijze historische charme met moderne gemakken om een unieke en onvergetelijke ervaring te bieden aan haar gasten.">
   <meta name="twitter:title" content="Veilig hotel, met hoge winsten en rankingspellen">
   <meta name="twitter:description"
     content="Hotel Restaurant Stad Munster is een charmant en elegant hotel gelegen in het hart van de pittoreske stad Wiltz, Luxemburg. Met een rijke geschiedenis die teruggaat tot de 18e eeuw, combineert dit prachtig gerestaureerde hotel op naadloze wijze historische charme met moderne gemakken om een unieke en onvergetelijke ervaring te bieden aan haar gasten.">
   <meta name="description"
     content="Hotel Restaurant Stad Munster is een charmant en elegant hotel gelegen in het hart van de pittoreske stad Wiltz, Luxemburg. Met een rijke geschiedenis die teruggaat tot de 18e eeuw, combineert dit prachtig gerestaureerde hotel op naadloze wijze historische charme met moderne gemakken om een unieke en onvergetelijke ervaring te bieden aan haar gasten.">
   <title>Veilig hotel, met hoge winsten en rankingspellen</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/IBMPlexMono-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/MavenPro-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
           <h1 class="contacts__title tt-42-30">
             Contacten
           </h1>
           <form class="form" action="#!" name="form" autocomplete="off">
             <div class="form__inputs">
               <input class="form__input input" type="text" name="text" id="text" placeholder="Naam" required>
               <input class="form__input input" type="email" name="email" id="email" placeholder="E-mail" required>
             </div>
             <button class="form__button but" type="submit">
               Versturen
             </button>
           </form>
           <address class="contacts__address">
             <ul class="contacts__list">
               <li class="contacts__item tx-16-14">
                 Hotel – Restaurant Stad Munster, Markt 11, 7101 DA Winterswijk
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="tel:+0543512121">
                   +0543 512 121
                 </a>
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="mailto:info@stadmunster.nl">
                   info@stadmunster.nl
                 </a>
               </li>
             </ul>
           </address>
           <div class="contacts__map">
             <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2457.9126557178715!2d6.7173000770907985!3d51.97201717665516!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47b8653373af1787%3A0xf1435a0de785ee8c!2sHotel%20Restaurant%20Stad%20Munster!5e0!3m2!1sen!2sen!4v1698313184184!5m2!1sen!2sen"
               width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
               referrerpolicy="no-referrer-when-downgrade"></iframe>
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