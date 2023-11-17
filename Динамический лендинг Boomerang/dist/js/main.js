"use strict"

const popup = document.querySelector(".popup");

document.addEventListener("click", function (e) {

  const elementInteractive = e.target;
  // Запускаем игру
  if (elementInteractive.closest(".init-game")) {
    const heroContent = document.querySelector(".hero-content");
    const pole = document.querySelector(".pole");
    const fog = document.querySelector(".fog");
    heroContent.classList.add("starting");
    pole.classList.add("start");
    elementInteractive.closest(".init-game").remove();
    fog.classList.add("hidden");
    const gatesBall = document.querySelector(".gates-ball");
    const myach = document.querySelector(".hero-content__wrapper-myach");
    const myachStyles = myach.getBoundingClientRect();
    const myachWidth = myachStyles.width;
    const myachHeight = myachStyles.height;
    const heroContentStart = document.querySelector(".start");
    const heroContentLine = document.querySelector(".hero-content__line");
    const heroContentStyles = pole.getBoundingClientRect();
    const heroContentWidth = heroContentStyles.width;
    const heroContentPlayer = document.querySelector(".hero-content__player_2");
    const heroContentPlayer1 = document.querySelector(".hero-content__player_1");

    heroContentLine.classList.add("active");

    if (heroContentStart) {
      // heroContentStart.addEventListener("mousemove", function (e) {
      //   const heroContentWidth2 = heroContentWidth / 2.3;

      //   myach.style.bottom = (e.offsetY - (myachHeight / 2)) + "px";
      //   myach.style.left = (e.offsetX - (myachWidth / 2)) + "px";

      //   let delitel;

      //   if ((document.body.clientWidth >= 320)) {
      //     delitel = 2;
      //     heroContentPlayer1.style.left = (e.offsetX / delitel) + "px";
      //   }
      //   if ((document.body.clientWidth >= 420)) {
      //     delitel = 3;
      //     heroContentPlayer1.style.left = (e.offsetX / delitel) + "px";
      //   }
      //   if ((document.body.clientWidth >= 601)) {
      //     delitel = 4;
      //     heroContentPlayer1.style.left = (e.offsetX / delitel) + "px";
      //   }
      //   if ((document.body.clientWidth >= 769)) {
      //     delitel = 5;
      //     heroContentPlayer1.style.left = (e.offsetX / delitel) + "px";
      //   }
      //   if ((document.body.clientWidth >= 992)) {
      //     delitel = 4;
      //     heroContentPlayer1.style.left = (e.offsetX / delitel) + "px";
      //   }
      //   if (document.body.clientWidth >= 1220) {
      //     delitel = 3.8; 
      //     heroContentPlayer1.style.left = (e.offsetX / delitel) + "px";
      //   }

      //   if (e.offsetX <= heroContentWidth2) {
      //     heroContentLine.classList.remove("rotate");
      //   } else {
      //     heroContentLine.classList.add("rotate");
      //   }
      // })
      heroContentStart.addEventListener("mousemove", function (e) {
        const heroContentWidth2 = heroContentWidth / 2.3;
        const heroContentWidth3 = heroContentWidth / 3;
        console.log(heroContentWidth3)

        myach.style.bottom = (e.offsetY - (myachHeight / 2)) + "px";
        myach.style.left = (e.offsetX - (myachWidth / 2)) + "px";

        heroContentPlayer1.style.left = "auto";
        heroContentPlayer1.style.transform = "translateX(0)";

        let delitel;

        if ((document.body.clientWidth >= 320)) {
          delitel = 2.2;
          heroContentPlayer1.style.right = (e.offsetX / delitel) + "px";
        }
        if ((document.body.clientWidth >= 420)) {
          delitel = 3;
          heroContentPlayer1.style.right = (e.offsetX / delitel) + "px";
        }
        if ((document.body.clientWidth >= 601)) {
          delitel = 4;
          heroContentPlayer1.style.right = (e.offsetX / delitel) + "px";
        }
        if ((document.body.clientWidth >= 769)) {
          delitel = 5;
          heroContentPlayer1.style.right = (e.offsetX / delitel) + "px";
        }
        if ((document.body.clientWidth >= 992)) {
          delitel = 4;
          heroContentPlayer1.style.right = (e.offsetX / delitel) + "px";
        }
        if (document.body.clientWidth >= 1220) {
          delitel = 5;
          heroContentPlayer1.style.right = (e.offsetX / delitel) + "px";
        }

        if (e.offsetX > 0 && e.offsetX <= heroContentWidth3) {
          heroContentLine.classList.remove("rotate"); 
          heroContentLine.classList.remove("hidden"); 
        }   
        if (e.offsetX >= heroContentWidth3 && e.offsetX <= (heroContentWidth3 * 2)) {
          heroContentLine.classList.add("hidden");
          heroContentLine.classList.remove("rotate");  
        } 
        if (e.offsetX >= (heroContentWidth3 * 2) && e.offsetX <= (heroContentWidth3 * 3)) {
          heroContentLine.classList.add("rotate");
          heroContentLine.classList.remove("hidden"); 
        }
      })
      heroContentStart.addEventListener("touchmove", function (e) {
        const elTouches = e.touches[0];
        const heroContentWidth3 = heroContentWidth / 3;
        myach.style.left = elTouches.clientX + "px";
        myach.style.bottom = (elTouches.clientY - (myachHeight / 2)) + "px";

        heroContentPlayer1.style.left = "auto";
        heroContentPlayer1.style.transform = "translateX(0)";

         let delitel;

         if ((document.body.clientWidth >= 320)) {
           delitel = 2; 
           heroContentPlayer1.style.right = (elTouches.clientX / delitel) + "px";
         }
         if ((document.body.clientWidth >= 420)) {
           delitel = 3; 
           heroContentPlayer1.style.right = (elTouches.clientX / delitel) + "px";
         }
         if ((document.body.clientWidth >= 601)) {
           delitel = 4; 
           heroContentPlayer1.style.right = (elTouches.clientX / delitel) + "px";
         }
         if ((document.body.clientWidth >= 769)) {
           delitel = 5; 
           heroContentPlayer1.style.right = (elTouches.clientX / delitel) + "px";
         }
         if ((document.body.clientWidth >= 992)) {
           delitel = 4; 
           heroContentPlayer1.style.right = (elTouches.clientX / delitel) + "px";
         }
         if (document.body.clientWidth >= 1220) {
           delitel = 5; 
           heroContentPlayer1.style.right = (elTouches.clientX / delitel) + "px";
         }

         if (elTouches.clientX > 0 && elTouches.clientX <= heroContentWidth3) {
          heroContentLine.classList.remove("rotate"); 
          heroContentLine.classList.remove("hidden"); 
        }   
        if (elTouches.clientX >= heroContentWidth3 && elTouches.clientX <= (heroContentWidth3 * 2)) {
          heroContentLine.classList.add("hidden");
          heroContentLine.classList.remove("rotate");  
        } 
        if (elTouches.clientX >= (heroContentWidth3 * 2) && elTouches.clientX <= (heroContentWidth3 * 3)) {
          heroContentLine.classList.add("rotate");
          heroContentLine.classList.remove("hidden"); 
        }
      })

      heroContentStart.addEventListener("click", function (e) {
 
        let delitel;

        if(heroContentLine.classList.contains("rotate")) {
          heroContentPlayer.style.transform = "rotate(100deg) translate(20%, 0)"; 
          if ((document.body.clientWidth >= 320)) {
            delitel = 2;
            gatesBall.style.right = (e.offsetX / delitel) + "px";
            heroContentPlayer.style.left = (e.offsetX / delitel) + "px";
          }
          if ((document.body.clientWidth >= 420)) {
            delitel = 3;
            gatesBall.style.right = (e.offsetX / delitel) + "px";
            heroContentPlayer.style.left = (e.offsetX / delitel) + "px";
          }
          if ((document.body.clientWidth >= 601)) {
            delitel = 4;
            gatesBall.style.right = (e.offsetX / delitel) + "px";
            heroContentPlayer.style.left = (e.offsetX / delitel) + "px";
          }
          if ((document.body.clientWidth >= 769)) {
            delitel = 5;
            gatesBall.style.right = (e.offsetX / delitel) + "px";
            heroContentPlayer.style.left = (e.offsetX / delitel) + "px";
          }
          if ((document.body.clientWidth >= 992)) {
            delitel = 4;
            gatesBall.style.right = (e.offsetX / delitel) + "px";
            heroContentPlayer.style.left = (e.offsetX / delitel) + "px";
          }
          if (document.body.clientWidth >= 1220) {
            delitel = 4;
            gatesBall.style.right = (e.offsetX / delitel) + "px";
            heroContentPlayer.style.left = (e.offsetX / delitel) + "px";
          }
        } else {
          heroContentPlayer.style.transform = "rotate(-100deg) translate(-20%, 0)"; 
          if ((document.body.clientWidth >= 320)) {
            delitel = 2;
            gatesBall.style.right = (e.offsetX / delitel) + "px";
            heroContentPlayer.style.left = (e.offsetX / delitel) + "px";
          }
          if ((document.body.clientWidth >= 420)) {
            delitel = 3;
            gatesBall.style.right = (e.offsetX / delitel) + "px";
            heroContentPlayer.style.left = (e.offsetX / delitel) + "px";
          }
          if ((document.body.clientWidth >= 601)) {
            delitel = 4;
            gatesBall.style.right = (e.offsetX / delitel) + "px";
            heroContentPlayer.style.left = (e.offsetX / delitel) + "px";
          }
          if ((document.body.clientWidth >= 769)) {
            delitel = 5;
            gatesBall.style.right = (e.offsetX / delitel) + "px";
            heroContentPlayer.style.left = (e.offsetX / delitel) + "px";
          }
          if ((document.body.clientWidth >= 992)) {
            delitel = 4;
            gatesBall.style.right = (e.offsetX / delitel) + "px";
            heroContentPlayer.style.left = (e.offsetX / delitel) + "px";
          }
          if (document.body.clientWidth >= 1220) {
            delitel = 4;
            gatesBall.style.right = (e.offsetX / delitel) + "px";
            heroContentPlayer.style.left = (e.offsetX / delitel) + "px";
          }
        }
 
        // let delitel;
 
 
        popup.classList.add("active");
        myach.classList.add("hidden");
        gatesBall.classList.add("active");
        heroContent.classList.add("finish");
        heroContent.classList.remove("starting");
        heroContentStart.classList.remove("start");
      })
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

// Адаптив текстового блока 

const heroContentTopPartTop = document.querySelector(".hero-content__top-part_top");

const teamOne = document.querySelector(".hero-content__team_1");

const teamTwo = document.querySelector(".hero-content__team_2");

if (heroContentTopPartTop) {

  if (document.body.clientWidth < 601) {
    heroContentTopPartTop.append(teamOne);
    heroContentTopPartTop.append(teamTwo);
  }
}

// Взамодействие с мячом

// Адаптив ворот на мобилке

const heroContentWrapperGates = document.querySelector(".hero-content__wrapper-gates");
if (document.body.clientWidth < 601) {
  if (document.body.clientHeight <= 644) {
    heroContentWrapperGates.style.top = 36 + "%";
  }
  if (document.body.clientHeight >= 644) {
    heroContentWrapperGates.style.top = 40 + "%";
  }
  if (document.body.clientHeight >= 751) {
    heroContentWrapperGates.style.top = 42 + "%";
  }
}

document.addEventListener("DOMContentLoaded", function () {
  popup.style.display = "flex";
})