 <!DOCTYPE html>
 <html lang="es">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title"
     content="Taka Matanzas - vacaciones de lujo en la playa, altas calificaciones y juegos seguros.">
   <meta property="og:site_name"
     content="Taka Matanzas es un lujoso establecimiento situado en primera línea de playa en Matanzas, Chile, que ofrece una serena escapada a los viajeros que buscan relajación y aventura. Situado a sólo 700 metros de la playa Matanzas Norte, este exquisito hotel cuenta con una serie de instalaciones para garantizar unas vacaciones inolvidables.">
   <meta name="twitter:title"
     content="Taka Matanzas - vacaciones de lujo en la playa, altas calificaciones y juegos seguros.">
   <meta name="twitter:description"
     content="Taka Matanzas es un lujoso establecimiento situado en primera línea de playa en Matanzas, Chile, que ofrece una serena escapada a los viajeros que buscan relajación y aventura. Situado a sólo 700 metros de la playa Matanzas Norte, este exquisito hotel cuenta con una serie de instalaciones para garantizar unas vacaciones inolvidables.">
   <meta name="description"
     content="Taka Matanzas es un lujoso establecimiento situado en primera línea de playa en Matanzas, Chile, que ofrece una serena escapada a los viajeros que buscan relajación y aventura. Situado a sólo 700 metros de la playa Matanzas Norte, este exquisito hotel cuenta con una serie de instalaciones para garantizar unas vacaciones inolvidables.">
   <title>Taka Matanzas - vacaciones de lujo en la playa, altas calificaciones y juegos seguros.</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/CroissantOne-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/Gabarito-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
           <h1 class="contacts__title tt-52-36">
             Contactos
           </h1>
           <div class="contacts__content">
             <div class="contacts__left">
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Nombre" required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="Correspondencia"
                     required>
                 </div>
                 <button class="form__button but" type="submit">
                   Mandar
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item">
                     Centinela S/N Navidad, O’Higgins
                   </li>
                   <li class="contacts__item">
                     <a href="tel:+56933468549">
                       +56 9 3346 8549
                     </a>
                   </li>
                   <li class="contacts__item">
                     <a href="mailto:reservas@taka.cl">
                       reservas@taka.cl
                     </a>
                   </li>
                 </ul>
               </address>
             </div>
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3309.412433893895!2d-71.85717992327203!3d-33.95623732359465!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9663d17e3bf17e8d%3A0xf6f19ad19604787a!2sCentinela%20de%20Matanzas!5e0!3m2!1sen!2sen!4v1695893448452!5m2!1sen!2sen"
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