"use strict"

// window.addEventListener("load", windowLoad);
// window.addEventListener("DOMContentLoaded", windowLoad);

// function windowLoad() {
  document.documentElement.classList.add("loaded"); // когда страница загрузилась

window.addEventListener("DOMContentLoaded", windowLoad); // для анимации для первых экранов, чтобы ничего не дергалось

function windowLoad() {}; // для анимации для первых экранов, чтобы ничего не дергалось


// Открытие и закрытие бургера

const logFormPassword = document.querySelector("#log_form_password");

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
  if (elementInteractive.closest(".header__lang")) { // Открытие выбора языка
    elementInteractive.closest(".header__wrapper-lang").classList.toggle("active");
  }
  if (!elementInteractive.closest(".header__wrapper-lang")) { // Закрытие выбора языка
    document.querySelector(".header__wrapper-lang").classList.remove("active");
  }
  if (elementInteractive.closest(".faq-init")) { // Аккордеон в faq

    const faqItem = elementInteractive.closest(".faq__item");

    const faqItemBottom = faqItem.querySelector(".faq__bottom");

    if (!faqItem.classList.contains("active")) {

      document.querySelectorAll(".faq__item").forEach(function (e) {
        e.classList.remove("active");
        gsap.to(e.querySelector(".faq__bottom"), {
          height: 0,
        });
      })

      faqItem.classList.add("active");

      gsap.to(faqItemBottom, {
        height: 'auto',
      });

    } else if (faqItem.classList.contains("active")) {

      faqItem.classList.remove("active");

      gsap.to(faqItemBottom, {
        height: 0,
      });
    }

  }
  if (elementInteractive.closest(".log-form__glass")) { // Показ пароля у формы входа

    if (!elementInteractive.closest(".log-form__glass").classList.contains("active")) {
      elementInteractive.closest(".log-form__glass").classList.add("active");

      if (logFormPassword) {
        logFormPassword.setAttribute("type", "text");
      }

    } else if (elementInteractive.closest(".log-form__glass").classList.contains("active")) {

      if (logFormPassword) {
        logFormPassword.setAttribute("type", "password");
      }

      elementInteractive.closest(".log-form__glass").classList.remove("active");
    }

  }
})

// Скрипт для проверки , поддерживает ли браузер webp 

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

// перекидывание элементов

const flippingTdTop1 = document.querySelector('.flipping-td-top-1');
const flippingTdTop2 = document.querySelector('.flipping-td-top-2');
const flippingMiddle1 = document.querySelector('.flipping-td-middle-1');
const flippingMiddle2 = document.querySelector('.flipping-td-middle-2');
const flippingTdBottom1 = document.querySelector('.flipping-td-bottom-1');
const flippingTdBottom2 = document.querySelector('.flipping-td-bottom-2');
const flippingTh1 = document.querySelector(".flipping-th-1");
const flippingTh2 = document.querySelector(".flipping-th-2");
const comparisonTableTrThMobile = document.querySelector(".comparison-table__tr_thmobile");
const comparisonTableTrTrMobile1 = document.querySelector(".comparison-table__tr_trmobile1");
const comparisonTableTrTrMobile2 = document.querySelector(".comparison-table__tr_trmobile2");
const comparisonTableTrTrMobile3 = document.querySelector(".comparison-table__tr_trmobile3");

// перекидывание элементов в таблице
if (document.body.clientWidth < 601) {
  if (comparisonTableTrThMobile && comparisonTableTrTrMobile1 && comparisonTableTrTrMobile2) {
    comparisonTableTrThMobile.append(flippingTh1);
    comparisonTableTrThMobile.append(flippingTh2);
    comparisonTableTrTrMobile1.append(flippingTdTop1);
    comparisonTableTrTrMobile1.append(flippingTdTop2);
    comparisonTableTrTrMobile2.append(flippingMiddle1);
    comparisonTableTrTrMobile2.append(flippingMiddle2);
    comparisonTableTrTrMobile3.append(flippingTdBottom1);
    comparisonTableTrTrMobile3.append(flippingTdBottom2);
  }
}

// перекидывание элементов в блкое с формой
const regRight = document.querySelector(".reg__right");
const regImage = document.querySelector(".reg__image");

if (document.body.clientWidth < 991) {
  if (regRight && regImage) {
    regRight.append(regImage);
  }
}
// анимация

const aosInit = document.querySelector(".aos-init");

if (aosInit) {
  AOS.init({
    duration: 900,
  });
}

const itiSelectedFlag = document.querySelector('.iti__selected-flag');

const phn = document.querySelector('#phone');

if (itiSelectedFlag && phn) {

  const phnStyles = phn.getBoundingClientRect();

  const phnHeight = phnStyles.height;

  itiSelectedFlag.style.height = phnHeight + "px";
}
// };