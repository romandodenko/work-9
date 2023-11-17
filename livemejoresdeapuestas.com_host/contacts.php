 <!DOCTYPE html>
 <html lang="es">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title"
     content="Hilton Garden Inn Montevideo - Hotel seguro, con altas ganancias y juegos de ranking.">
   <meta property="og:site_name"
     content="El Hilton Garden Inn Montevideo en Uruguay es un hotel moderno y lujoso de alta calificación que garantiza una estadía cómoda y lujosa para cada huésped. El hotel está situado en una zona prestigiosa de la ciudad y ofrece las mejores condiciones para unas vacaciones perfectas.">
   <meta name="twitter:title"
     content="Hilton Garden Inn Montevideo - Hotel seguro, con altas ganancias y juegos de ranking.">
   <meta name="twitter:description"
     content="El Hilton Garden Inn Montevideo en Uruguay es un hotel moderno y lujoso de alta calificación que garantiza una estadía cómoda y lujosa para cada huésped. El hotel está situado en una zona prestigiosa de la ciudad y ofrece las mejores condiciones para unas vacaciones perfectas.">
   <meta name="description"
     content="El Hilton Garden Inn Montevideo en Uruguay es un hotel moderno y lujoso de alta calificación que garantiza una estadía cómoda y lujosa para cada huésped. El hotel está situado en una zona prestigiosa de la ciudad y ofrece las mejores condiciones para unas vacaciones perfectas.">
   <title>Hilton Garden Inn Montevideo - Hotel seguro, con altas ganancias y juegos de ranking.</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/Kanit-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
       <section class="contacts">
         <div class="container">
           <h1 class="contacts__title tt-42-30 line">
             Contactos
           </h1>
           <form class="form" action="#!" name="form" autocomplete="off">
             <div class="form__inputs">
               <input class="form__input input" type="text" name="text" id="text" placeholder="Nombre" required>
               <input class="form__input input" type="email" name="email" id="email" placeholder="Correo electrónico"
                 required>
             </div>
             <button class="form__button but" type="submit">
               Enviar
             </button>
           </form>
           <div class="contacts__map">
             <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3272.1010131293033!2d-56.13819592326631!3d-34.90391447341597!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x959f813e1511f5a5%3A0x2fb542bcf7c70a23!2sDr.%20Luis%20Bonavita%2C%2011300%20Montevideo%2C%20Departamento%20de%20Montevideo%2C%20Uruguay!5e0!3m2!1sen!2sen!4v1698307608860!5m2!1sen!2sen"
               width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
               referrerpolicy="no-referrer-when-downgrade"></iframe>
           </div>
           <address class="contacts__address">
             <ul class="contacts__list">
               <li class="contacts__item tx-16-14">
                 Montevideo, Montevideo Department, Uruguay
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="tel:+59899137140">
                   +59899137140
                 </a>
               </li>
               <li class="contacts__item tx-16-14">
                 <a href="mailto:info@hiltonhotel.com">
                   info@hiltonhotel.com
                 </a>
               </li>
             </ul>
           </address>
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