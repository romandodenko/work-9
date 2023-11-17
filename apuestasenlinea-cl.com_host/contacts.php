 <!DOCTYPE html>
 <html lang="es">

 <head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta property="og:type" content="website">
  <meta property="og:title"
    content="Termas de Jahuel Hotel & Spa es un acogedor y lujoso hotel situado en el pintoresco Valle de Jahuel, Chile.">
  <meta property="og:site_name"
    content="Termas de Jahuel Hotel & Spa es un acogedor y lujoso hotel situado en el pintoresco Valle de Jahuel,
    Chile. Este hotel ofrece a sus huéspedes la oportunidad única de disfrutar de las aguas termales
    naturales, relajarse en el centro de spa y disfrutar de las hermosas vistas de los alrededores.">
  <meta name="twitter:title"
    content="Termas de Jahuel Hotel & Spa es un acogedor y lujoso hotel situado en el pintoresco Valle de Jahuel, Chile.">
  <meta name="twitter:description"
    content="Termas de Jahuel Hotel & Spa es un acogedor y lujoso hotel situado en el pintoresco Valle de Jahuel,
    Chile. Este hotel ofrece a sus huéspedes la oportunidad única de disfrutar de las aguas termales
    naturales, relajarse en el centro de spa y disfrutar de las hermosas vistas de los alrededores.">
  <meta name="description"
    content="Termas de Jahuel Hotel & Spa es un acogedor y lujoso hotel situado en el pintoresco Valle de Jahuel,
    Chile. Este hotel ofrece a sus huéspedes la oportunidad única de disfrutar de las aguas termales
    naturales, relajarse en el centro de spa y disfrutar de las hermosas vistas de los alrededores.">
  <title>Termas de Jahuel Hotel & Spa es un acogedor y lujoso hotel situado en el pintoresco Valle de Jahuel, Chile.</title>
  <link rel="shortcut icon" href="./img/favicon.png">
  <link rel="preload" href="./fonts/LilitaOne-Regular.woff2" as="font" type="font/woff2" crossorigin>
  <link rel="preload" href="./fonts/Mooli-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
             <div class="contacts__image">
               <picture>
                 <source media="(min-width: 320px)" srcset="./img/contacts.webp" type="image/webp">
                 <img src="./img/contacts.jpg" width="300" height="300" alt="Contactos">
               </picture>
             </div>
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
                     Piso 5, Las Condes, Santiago
                   </li>
                   <li class="contacts__item">
                     <a href="tel:+56224111720">
                       (+56 2) 2 411 17 20
                     </a>
                   </li>
                   <li class="contacts__item">
                     <a href="mailto:reservas@jahuel.cl">
                       reservas@jahuel.cl
                     </a>
                   </li>
                 </ul>
               </address>
             </div>
           </div>
           <div class="contacts__map">
             <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d106557.9707860479!2d-70.67342384161996!3d-33.424897567441626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9662cc2ec8c925bd%3A0x82ed9a4180d925d0!2sLas%20Condes%2C%20Santiago%20Metropolitan%20Region%2C%20Chile!5e0!3m2!1sen!2sen!4v1695894877840!5m2!1sen!2sen"
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