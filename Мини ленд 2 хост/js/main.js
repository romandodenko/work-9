"use strict"


document.documentElement.classList.add("loaded");

// Открытие и закрытие бургера

const menu = document.querySelector(".header__menu");

document.addEventListener("click", function (e) {

  const elementInteractive = e.target;

  if (elementInteractive.closest(".burger")) { // Открытие и закрытие бургера
    menu.classList.add("menu-active")
    document.body.style.overflow = "hidden";
  }
  if (elementInteractive.closest(".header__exit-menu")) { // Открытие и закрытие бургера 
    menu.classList.remove("menu-active")
    document.body.style.overflow = "";
  }
  if (elementInteractive.closest(".nav__link")) { // Открытие и закрытие бургера
    menu.classList.remove("menu-active")
    document.body.style.overflow = "";
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

if(document.body.clientWidth > 769) {
  const heroBottomPaysHd1 = document.querySelector(".hero-bottom__pays_hd1");

  const heroBottomPay = document.querySelectorAll(".hero-bottom__pay");
  
  const createUl = document.createElement("ul");
  
  createUl.classList.add("hero-bottom__pays");
  
  createUl.classList.add("hero-bottom__pays_hd2");
  
  const heroBottomTop = document.querySelector(".hero-bottom__top");
  
  heroBottomTop.append(createUl);
  
  const heroBottomPaysHd2 = document.querySelector(".hero-bottom__pays_hd2");
  
  if (heroBottomPaysHd1) {
    const heroBottomPayLength = heroBottomPay.length;
    const heroBottomPayLengthHalf = heroBottomPayLength / 2;
    const heroBottomPayLengthHalfMath = Math.ceil(heroBottomPayLengthHalf)
    const massiveElements = [];
  
    heroBottomPaysHd1.querySelectorAll("li").forEach(function (li, i) {
      massiveElements.push(li);
    })
    massiveElements.forEach(function (qq, i) {
      console.log(i)
      if (heroBottomPayLengthHalfMath <= (i + 1)) {
        heroBottomPaysHd1.append(qq);
      } else {
        heroBottomPaysHd2.append(qq);
      }
    })
  }
}

 