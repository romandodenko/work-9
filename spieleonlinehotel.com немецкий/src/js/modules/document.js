document.documentElement.classList.add("loaded"); // когда страница загрузилась

window.addEventListener("DOMContentLoaded", windowLoad); // для анимации для первых экранов, чтобы ничего не дергалось

function windowLoad() {}; // для анимации для первых экранов, чтобы ничего не дергалось

const zahlemSliderSlide = document.querySelectorAll(".zahlem-slider__slide");

const wrapperZahlemSliderControls = document.querySelector(".wrapper-zahlem-slider__controls");
 
// Открытие и закрытие бургера

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
  if (elementInteractive.closest(".zahlem-slider-next")) {
    zahlemSliderSlide.forEach(function (e) {
      if (e.classList.contains("swiper-slide-active")) {
        const zahlemSliderDescr = e.querySelector(".zahlem-slider__descr");

        const zahlemSliderDescrStyles = zahlemSliderDescr.getBoundingClientRect();

        const zahlemSliderDescrWidth = zahlemSliderDescrStyles.width;

        const zahlemSliderDescrHeight = zahlemSliderDescrStyles.height;

        wrapperZahlemSliderControls.style.width = zahlemSliderDescrWidth + "px";

        wrapperZahlemSliderControls.style.height = zahlemSliderDescrHeight + "px";


      }
    })
  }
  if (elementInteractive.closest(".zahlem-slider-prev")) {
    zahlemSliderSlide.forEach(function (e) {
      if (e.classList.contains("swiper-slide-active")) {
        const zahlemSliderDescr = e.querySelector(".zahlem-slider__descr");

        const zahlemSliderDescrStyles = zahlemSliderDescr.getBoundingClientRect();

        const zahlemSliderDescrWidth = zahlemSliderDescrStyles.width;

        const zahlemSliderDescrHeight = zahlemSliderDescrStyles.height;

        wrapperZahlemSliderControls.style.width = zahlemSliderDescrWidth + "px";

        wrapperZahlemSliderControls.style.height = zahlemSliderDescrHeight + "px";


      }
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

const zahlemSlider = document.querySelector(".zahlem-slider");

if (zahlemSlider) {

  const zahlemSwiper = new Swiper(zahlemSlider, {
    observer: true,
    observeParents: true,
    watchOverflow: true,
    slidesPerView: 1,
    spaceBetween: 32,
    direction: 'horizontal',
    pagination: {
      el: '.zahlem-slider-pagination',
      clickable: true,
    },
    navigation: {
      nextEl: '.zahlem-slider-next',
      prevEl: '.zahlem-slider-prev',
    },
  });
}

if(document.body.clientWidth > 992) {
  if (zahlemSliderSlide && wrapperZahlemSliderControls) {
    zahlemSliderSlide.forEach(function (e) {
      if (e.classList.contains("swiper-slide-active")) {
        const zahlemSliderDescr = e.querySelector(".zahlem-slider__descr");
  
        const zahlemSliderDescrStyles = zahlemSliderDescr.getBoundingClientRect();
  
        const zahlemSliderDescrWidth = zahlemSliderDescrStyles.width;
  
        const zahlemSliderDescrHeight = zahlemSliderDescrStyles.height;
  
        wrapperZahlemSliderControls.style.width = zahlemSliderDescrWidth + "px";
  
        wrapperZahlemSliderControls.style.height = zahlemSliderDescrHeight + "px";
  
  
      }
    })
  }
}

 
