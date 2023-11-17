 <!DOCTYPE html>
 <html lang="bg">

 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta property="og:type" content="website">
   <meta property="og:title"
     content="Wave Resort - Ultra All Inclusive - луксозен курортен хотел с високо оценени игри и сигурни печалби">
   <meta property="og:site_name"
     content="Wave Resort - Ultra All Inclusive е луксозен курортен хотел, разположен в живописна местност на брега на морето. Този хотел предлага на гостите си висококачествено обслужване, разнообразни удобства и изискана кухня. ">
   <meta name="twitter:title"
     content="Wave Resort - Ultra All Inclusive - луксозен курортен хотел с високо оценени игри и сигурни печалби">
   <meta name="twitter:description"
     content="Wave Resort - Ultra All Inclusive е луксозен курортен хотел, разположен в живописна местност на брега на морето. Този хотел предлага на гостите си висококачествено обслужване, разнообразни удобства и изискана кухня. ">
   <meta name="description"
     content="Wave Resort - Ultra All Inclusive е луксозен курортен хотел, разположен в живописна местност на брега на морето. Този хотел предлага на гостите си висококачествено обслужване, разнообразни удобства и изискана кухня. ">
   <title>Wave Resort - Ultra All Inclusive - луксозен курортен хотел с високо оценени игри и сигурни печалби
   </title>
   <link rel="shortcut icon" href="./img/favicon.png">
   <link rel="preload" href="./fonts/YoungSerif-Regular.woff2" as="font" type="font/woff2" crossorigin>
   <link rel="preload" href="./fonts/OpenSans-Regular.woff2" as="font" type="font/woff2" crossorigin>
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
             Контакти
           </h1>
           <div class="contacts__content">
            <div class="contacts__left">
              <form class="form" action="#!" name="form" autocomplete="off">
                <div class="form__inputs">
                  <input class="form__input input" type="text" name="text" id="text" placeholder="Име" required>
                  <input class="form__input input" type="email" name="email" id="email" placeholder="Поща" required>
                </div>
                <button class="form__button but" type="submit">
                  Изпрати
                </button>
              </form>
              <address class="contacts__address">
                <ul class="contacts__list">
                  <li class="contacts__item tx-16-14">
                    Camping area Aheloy, 8217 Pomorie, Bulgaria
                  </li>
                  <li class="contacts__item tx-16-14">
                    <a href="tel:+359885444590">
                      +359 885 444 590
                    </a>
                  </li>
                  <li class="contacts__item tx-16-14">
                    <a href="mailto:info@waveresort.bg">
                      info@waveresort.bg
                    </a>
                  </li>
                </ul>
              </address>
            </div>
            
             <div class="contacts__image">
               <picture>
                 <source media="(min-width: 320px)" srcset="./img/contacts.webp" type="image/webp">
                 <img src="./img/contacts.jpg" width="300" height="300" alt="Контакти">
               </picture>
             </div>
           </div>
           <div class="contacts__map">
             <iframe
               src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d5870.453960303371!2d27.644484898276378!3d42.63534782767355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x40a6996e04708e95%3A0x2f2616fd8ac89c8a!2z0J_QsNGA0LrQuNC90LMg0LfQsCDQmtC10LzQv9C10YDQuCLQodC10LvRgdC60LjRjyDQlNCy0L7RgCDQvdCwINC80L7RgNC10YLQviI!5e0!3m2!1sen!2sen!4v1696238756156!5m2!1sen!2sen"
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