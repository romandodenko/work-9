 <!DOCTYPE html>
 <html lang="pt">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title" content="Magnífico hotel com belas vistas e acomodações seguras.">
   <meta property="og:site_name"
     content="E o lugar perfeito para relaxar na natureza, desfrutar de férias na praia e conhecer a cultura brasileira. As acomodações luxuosas, a ampla gama de atividades e a ênfase na sustentabilidade tornam esse hotel atraente para uma gama variada de hóspedes.">
   <meta name="twitter:title" content="Magnífico hotel com belas vistas e acomodações seguras.">
   <meta name="twitter:description"
     content="E o lugar perfeito para relaxar na natureza, desfrutar de férias na praia e conhecer a cultura brasileira. As acomodações luxuosas, a ampla gama de atividades e a ênfase na sustentabilidade tornam esse hotel atraente para uma gama variada de hóspedes.">
   <meta name="description"
     content="E o lugar perfeito para relaxar na natureza, desfrutar de férias na praia e conhecer a cultura brasileira. As acomodações luxuosas, a ampla gama de atividades e a ênfase na sustentabilidade tornam esse hotel atraente para uma gama variada de hóspedes.">
   <title>Magnífico hotel com belas vistas e acomodações seguras.</title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/MartianMono-Bold.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/Nunito-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
            Contatos
           </h1>
           <div class="contacts__content">
             <div class="contacts__left">
               <form class="form" action="#!" name="form" autocomplete="off">
                 <div class="form__inputs">
                   <input class="form__input input" type="text" name="text" id="text" placeholder="Nome" required>
                   <input class="form__input input" type="email" name="email" id="email" placeholder="Correspondência"
                     required>
                 </div>
                 <button class="form__button but" type="submit">
                   Enviar
                 </button>
               </form>
               <address class="contacts__address">
                 <ul class="contacts__list">
                   <li class="contacts__item">
                     Apartado 1299 - Vale do Covo - Praia do Carvoeiro 8401-911 Lagoa, Portugal
                   </li>
                   <li class="contacts__item">
                     <a href="tel:+351282351100">
                       (+351) 282 351 100
                     </a>
                   </li>
                   <li class="contacts__item">
                     <a href="mailto:carvoeiro@tivoli-hotels.com">
                       carvoeiro@tivoli-hotels.com
                     </a>
                   </li>
                 </ul>
               </address>
             </div>
             <div class="contacts__map">
               <iframe
                 src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12729.555529401021!2d-8.478743357317327!3d37.095859521725515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd1ad66c63edec63%3A0x84e0ef8252259d87!2sVale%20de%20Covo%2C%20Carvoeiro%2C%20Portugal!5e0!3m2!1sen!2sen!4v1695701623305!5m2!1sen!2sen"
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