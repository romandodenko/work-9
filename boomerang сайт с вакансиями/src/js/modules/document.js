document.documentElement.classList.add("loaded"); // когда страница загрузилась

window.addEventListener("DOMContentLoaded", windowLoad); // для анимации для первых экранов, чтобы ничего не дергалось

function windowLoad() {}; // для анимации для первых экранов, чтобы ничего не дергалось


// Открытие и закрытие бургера

const country = document.querySelectorAll(".country");

const header = document.querySelector(".header");

const menu = document.querySelector(".header__menu");

document.addEventListener("click", function (e) {

  const elementInteractive = e.target;

  if (elementInteractive.closest(".burger")) { // Открытие и закрытие бургера
    menu.classList.add("active")
    document.body.style.overflow = "hidden";
  }
  if (elementInteractive.closest(".header__exit-menu")) { // Открытие и закрытие бургера 
    menu.classList.remove("active")
    document.body.style.overflow = "";
  }
  if (elementInteractive.closest(".nav__link")) { // Открытие и закрытие бургера
    menu.classList.remove("active")
    document.body.style.overflow = "";
  }
  if (elementInteractive.closest(".country__top-button")) {
    elementInteractive.closest(".country").classList.add("interactive");
  }
  if (!elementInteractive.closest(".country__top-button")) {
    country.forEach(function (e) {
      e.classList.remove("interactive");
    })
  }
})

document.addEventListener("mouseover", function (e) {

  const elementInteractive = e.target;

  if (elementInteractive.closest(".country")) {
    elementInteractive.closest(".country").classList.add("interactive");
  }
  if (!elementInteractive.closest(".country")) {
    country.forEach(function (e) {
      e.classList.remove("interactive");
    })
  }
})

// Плагин webp. Скрипт для проверки , поддерживает ли браузер webp 

function testWebP(callback) {
  var webP = new Image();

  webP.onload = webP.onerror = function () {
    callback(webP.height == 2);
  };

  webP.src = "data:image/webp;base64,UklGRjoAAABXRUJQVlA4IC4AAACyAgCdASoCAAIALmk0mk0iIiIiIgBoSygABc6WWgAA/veff/0PP8bA//LwYAAA";
}

testWebP(function (support) {
  if (support == true) {
    document.querySelector('body').classList.add('webp');
  } else {
    document.querySelector('body').classList.add('no-webp');
  }
});

// Плагин загрузки изображений и видео

const rdUpload = document.querySelectorAll(".rd-upload");

const body = document.body;

if (rdUpload) {
  const options = {
    root: null,
    rootMargin: '0px',
    threshold: 0,
  }

  const callback = function (entries, observer) {

    entries.forEach(entry => {
      const elementEntry = entry.target;
      if (entry.isIntersecting) {

        if (!elementEntry.classList.contains("rd-load")) {
          elementEntry.classList.add("rd-load");

          let rdUploadBackgroundImage = elementEntry.querySelectorAll(".rd-background")

          let rdUploadImage = elementEntry.querySelectorAll("img")

          let rdUploadVideo = elementEntry.querySelectorAll("video")

          if (elementEntry.classList.contains("rd-background")) {

            let elementEntryBackgroundImageDataImage = elementEntry.dataset.rdImage;
            let elementEntryBackgroundImageDataWebp = elementEntry.dataset.rdImageWebp;

            if (body.classList.contains("webp")) {
              elementEntry.style.backgroundImage = `url(${elementEntryBackgroundImageDataWebp})`;
            } else {
              elementEntry.style.backgroundImage = `url(${elementEntryBackgroundImageDataImage})`;
            }

          }

          if (rdUploadBackgroundImage) {
            rdUploadBackgroundImage.forEach(function (rdUploadBackgroundImage) {

              let rdUploadBackgroundImageDataImage = rdUploadBackgroundImage.dataset.rdImage;
              let rdUploadBackgroundImageDataWebp = rdUploadBackgroundImage.dataset.rdImageWebp;


              if (body.classList.contains("webp")) {
                rdUploadBackgroundImage.style.backgroundImage = `url(${rdUploadBackgroundImageDataWebp})`;
              } else {
                rdUploadBackgroundImage.style.backgroundImage = `url(${rdUploadBackgroundImageDataImage})`;
              }

            })
          }

          if (rdUploadImage) {
            rdUploadImage.forEach(function (rdUploadImage) {

              let rdUploadImageDataImage = rdUploadImage.dataset.rdImage;
              let rdUploadImageDataWebp = rdUploadImage.dataset.rdImageWebp;


              if (body.classList.contains("webp")) {
                rdUploadImage.setAttribute("src", `${rdUploadImageDataWebp}`);
              } else {
                rdUploadImage.setAttribute("src", `${rdUploadImageDataImage}`);
              }

            })
          }

          if (rdUploadVideo) {
            rdUploadVideo.forEach(function (rdUploadVideo) {

              let rdUploadVideoDataVideo = rdUploadVideo.dataset.rdVideo;
              let rdUploadVideoDataImage = rdUploadVideo.dataset.rdImage;
              let rdUploadVideoDataWebp = rdUploadVideo.dataset.rdImageWebp;

              rdUploadVideo.setAttribute("src", `${rdUploadVideoDataVideo}`);

              if (body.classList.contains("webp")) {
                rdUploadVideo.setAttribute("poster", `${rdUploadVideoDataWebp}`);
              } else {
                rdUploadVideo.setAttribute("poster", `${rdUploadVideoDataImage}`);
              }

            })
          }
        }

      }

    })

  }

  const observer = new IntersectionObserver(callback, options);

  rdUpload.forEach(i => {
    observer.observe(i);
  })
}

// Примечание:
// Если используется фоновая картинка у элемента внутри rd-upload, то добавляем элементу класс rd-background и аттрибуты data-rd-image="картинка" data-rd-image-webp="картинка", должно получиться вот так:
// <div class="rd-background" data-rd-image="./img/image-1.jpg" data-rd-image-webp="./img/image-1.webp"></div>
// Если используется фоновая картинка у элемента rd-upload, то элементу rd-upload добавляем класс rd-background и аттрибуты data-rd-image="картинка" data-rd-image-webp="картинка", должно получиться вот так:
// <section class="hero rd-upload rd-background" data-rd-image="./img/image-1.jpg" data-rd-image-webp="./img/image-1.webp"></section>

const headerList = document.querySelector('.header__list');

const footerContainer = document.querySelector(".footer__container");

const footerLeft = document.querySelector(".footer__left");

const countryFooter = document.querySelector(".country_footer");

const navFooter = document.querySelector(".nav_footer");

if (menu && headerList) {

  if (document.body.clientWidth < 700) {
    menu.append(headerList);
  }

}

if (footerContainer && countryFooter && navFooter) {
  if (document.body.clientWidth < 992) {
    footerContainer.append(navFooter);
    footerLeft.append(countryFooter);
  }
}

const decorOne = document.querySelector(".decor_1");

if (decorOne) {

  const headerStyles = header.getBoundingClientRect();

  const headerHeight = headerStyles.height;

  decorOne.style.top = headerHeight + "px";

}

const vacFormCheckbox = document.querySelector(".vac-form__checkbox");

const vacFormButton = document.querySelector(".vac-form__button");
 
if (vacFormCheckbox) {
  vacFormCheckbox.addEventListener("change", function () {
    if (vacFormCheckbox.checked) {
      if (vacFormButton) {
        vacFormButton.classList.remove("disabled");
      }
    } else {
      if (vacFormButton) {
        vacFormButton.classList.add("disabled");
      }
    }
  })
}

const itiSelectedFlag = document.querySelector(".iti__selected-flag");

const vacFormPhone = document.querySelector("#vac_form_phone");

if(itiSelectedFlag && vacFormPhone) {
  const vacFormPhoneStyles = vacFormPhone.getBoundingClientRect();

  const vacFormPhoneHeight = vacFormPhoneStyles.height;

  itiSelectedFlag.style.height = vacFormPhoneHeight + "px";
}