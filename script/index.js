/**********************/
/*** header desktop***/
/**********************/
const buttonDropdownAbout = document.querySelector(".show-modal-about");
const dropdownAbout = document.querySelector(".dropdown-about");
const buttonDropdownInsights = document.querySelector(".show-modal-insights");
const dropdownInsights = document.querySelector(".dropdown-insights");
const buttonNodropdownService = document.querySelector(".nodrop-service");
const buttonNodropdownEvents = document.querySelector(".nodrop-events");
const buttonNodropdownCareers = document.querySelector(".nodrop-careers");
const overlayAbout = document.querySelector(".overlay-about");
const overlayInsights = document.querySelector(".overlay-insights");
const logo = document.querySelector(".logo");
const contact = document.querySelector(".contact");
const navBackgroundAbout = document.querySelector(".nav");
const navBackgroundInsights = document.querySelector(".nav");

// Dropdown about

const addDropdownAbout = () => {
  buttonDropdownAbout.classList.remove("drophidden");
  dropdownAbout.classList.remove("drophidden");
  overlayAbout.classList.remove("drophidden");
  navBackgroundAbout.classList.add("navbackgroundabout");
};

const removeDropdownAbout = () => {
  buttonDropdownAbout.classList.add("drophidden");
  dropdownAbout.classList.add("drophidden");
  overlayAbout.classList.add("drophidden");
  navBackgroundAbout.classList.remove("navbackgroundabout");
};

try {
  buttonDropdownAbout.addEventListener("mouseenter", () => {
    addDropdownAbout();
  });

  overlayAbout.addEventListener("mouseenter", () => {
    removeDropdownAbout();
  });

  buttonDropdownInsights.addEventListener("mouseenter", () => {
    removeDropdownAbout();
  });

  buttonNodropdownService.addEventListener("mouseenter", () => {
    removeDropdownAbout();
  });

  buttonNodropdownEvents.addEventListener("mouseenter", () => {
    removeDropdownAbout();
  });

  buttonNodropdownCareers.addEventListener("mouseenter", () => {
    removeDropdownAbout();
  });

  logo.addEventListener("mouseenter", () => {
    removeDropdownAbout();
  });

  contact.addEventListener("mouseenter", () => {
    removeDropdownAbout();
  });
} catch (error) { }

// Dropdown Insights

const addDropdownInsights = () => {
  buttonDropdownInsights.classList.remove("drophidden");
  dropdownInsights.classList.remove("drophidden");
  overlayInsights.classList.remove("drophidden");
  navBackgroundInsights.classList.add("navbackgroundinsights");
};

const removeDropdownInsights = () => {
  buttonDropdownInsights.classList.add("drophidden");
  dropdownInsights.classList.add("drophidden");
  overlayInsights.classList.add("drophidden");
  navBackgroundInsights.classList.remove("navbackgroundinsights");
};

try {
  buttonDropdownInsights.addEventListener("mouseenter", () => {
    addDropdownInsights();
  });

  overlayInsights.addEventListener("mouseenter", () => {
    removeDropdownInsights();
  });

  buttonDropdownAbout.addEventListener("mouseenter", () => {
    removeDropdownInsights();
  });

  buttonNodropdownService.addEventListener("mouseenter", () => {
    removeDropdownInsights();
  });

  buttonNodropdownEvents.addEventListener("mouseenter", () => {
    removeDropdownInsights();
  });

  buttonNodropdownCareers.addEventListener("mouseenter", () => {
    removeDropdownInsights();
  });

  logo.addEventListener("mouseenter", () => {
    removeDropdownInsights();
  });

  contact.addEventListener("mouseenter", () => {
    removeDropdownInsights();
  });
} catch (error) { }

try {
  window.addEventListener("scroll", () => {
    const scrollpos = window.scrollY;

    if (scrollpos > 200) {
      removeDropdownInsights();
      removeDropdownAbout();
    }
  });
} catch (error) { }

/**********************/
/**** mobile navbar ***/
/**********************/

try {
  const buttonHamburger = document.querySelector(".button-hamburger");
  const buttonAddSeconndOverlay = document.querySelectorAll(
    ".button-second-overlay"
  );
  const buttonBack = document.querySelectorAll(".button-back");

  const buttonAboutUs = document.querySelector(".button-aboutus");
  const buttonInsights = document.querySelector(".button-insights");

  const overlayMobile = document.querySelector(".mobile-overlay");
  const overlayMobileMain = document.querySelector(".mobile-overlay__main");
  const overlayMobileSecond = document.querySelector(".mobile-overlay__second");
  const overlayClose = document.querySelector(".overlay-mobile-close");

  const overlayMobileSecondAboutUs = document.querySelector(
    ".overlay-aboutus-mobile"
  );
  const overlayMobileSecondInsights = document.querySelector(
    ".overlay-insights-mobile"
  );

  const openMobileNavbar = () => {
    buttonHamburger.classList.toggle("open");
    overlayMobile.classList.toggle("open");
    overlayMobileMain.classList.toggle("open");
    document.querySelector("html").classList.toggle("overflow-hidden");
  };

  const openSecondOverlay = () => {
    overlayMobileMain.classList.add("remove");
    overlayMobileSecond.classList.add("open");
  };

  const removeSecondOverlay = () => {
    overlayMobileMain.classList.remove("remove");
    overlayMobileSecond.classList.remove("open");

    overlayMobileSecondAboutUs.classList.add("hidden");
    overlayMobileSecondInsights.classList.add("hidden");
  };

  buttonHamburger.addEventListener("click", () => {
    openMobileNavbar();
    overlayClose.classList.toggle("hidden");
  });

  for (let i = 0; i < buttonAddSeconndOverlay.length; i++) {
    buttonAddSeconndOverlay[i].addEventListener("click", () => {
      openSecondOverlay();
    });
  }

  for (let i = 0; i < buttonBack.length; i++) {
    buttonBack[i].addEventListener("click", () => {
      removeSecondOverlay();
    });
  }

  buttonAboutUs.addEventListener("click", () => {
    overlayMobileSecondAboutUs.classList.remove("hidden");
  });

  buttonInsights.addEventListener("click", () => {
    overlayMobileSecondInsights.classList.remove("hidden");
  });

  const closeAll = () => {
    overlayClose.classList.add("hidden");

    buttonHamburger.classList.remove("open");
    overlayMobile.classList.remove("open");
    overlayMobileMain.classList.remove("open");
    document.querySelector("html").classList.remove("overflow-hidden");

    overlayMobileSecondAboutUs.classList.add("hidden");
    overlayMobileSecondInsights.classList.add("hidden");

    overlayMobileMain.classList.remove("remove");
    overlayMobileSecond.classList.remove("open");

    overlayMobile.classList.remove("open");
  };

  overlayClose.addEventListener("click", () => {
    closeAll();
  });

  window.addEventListener("resize", () => {
    const mqLarge = window.matchMedia("(min-width: 768px)");
    if (mqLarge.matches) {
      closeAll();
    }
  });
} catch (error) { }
/**********************/
/*** Home background change ***/
/**********************/

const body = document.querySelector(".body");

const switchToCreme = document.getElementById("switch-to-creme");

try {
  const creme = switchToCreme.offsetTop;
  window.addEventListener("scroll", () => {
    if (window.scrollY >= creme) {
      body.classList.add("bg-creme");
    } else {
      body.classList.remove("bg-creme");
    }
  });
} catch (error) { }

const switchToDiepgrijs = document.getElementById("switch-to-diepgrijs");

try {
  const diepgrijs = switchToDiepgrijs.offsetTop;
  window.addEventListener("scroll", () => {
    if (window.scrollY >= diepgrijs - 150) {
      body.classList.remove("bg-creme");
    }
  });
} catch (error) { }
/**********************/
/*** Hide Menu on Scroll ***/
/**********************/
try {
  let prevScrollpos = window.pageYOffset;
  window.addEventListener("scroll", () => {
    let currentScrollPos = window.pageYOffset;
    const scrollpos = window.scrollY;

    if (prevScrollpos > currentScrollPos) {
      document.getElementById("header-desktop").style.top = "0";
      document.getElementById("button-hamburger-menu").style.top = "0px";
    } else if (scrollpos > 200) {
      document.getElementById("header-desktop").style.top = "-200px";
      document.getElementById("button-hamburger-menu").style.top = "-200px";
    }
    prevScrollpos = currentScrollPos;
  });
} catch (error) { }

/**********************/
/*** swiper hero home ***/
/**********************/
try {
  var swiperHero = new Swiper(".swiperhero", {
    spaceBetween: 10,
    lazy: false,
    freeMode: true,
    // centeredSlides: true,
    loop: true,
    speed: 5000,
    autoplay: {
      delay: 0,
      disableOnInteraction: false,
    },
    slidesPerView: 3,
    breakpoints: {
      640: {
        slidesPerView: 5,
        spaceBetween: 10,
      },
      768: {
        slidesPerView: 5,
      },
      1024: {
        slidesPerView: 6,
      },
    },
  });
} catch (error) { }
/**********************/
/*** swiper partner ***/
/**********************/
try {
  var swiper = new Swiper(".mySwiper", {
    effect: "fade",
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    },
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
  });
} catch (error) { }
/**********************/
/*** swiper block ***/
/**********************/

try {
  var swiper = new Swiper(".mySwiperBlock", {
    slidesPerView: 1,
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next-block",
      prevEl: ".swiper-button-prev-block",
    },
    pagination: {
      el: ".swiper-pagination",
    },
  });
} catch (error) { }
/**********************/
/*** swiper 3d***/
/**********************/
try {
  var swiper = new Swiper(".mySwiper-3D", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 1,
    spaceBetween: 0,
    coverflowEffect: {
      rotate: 0,
      stretch: 0,
      depth: 920,
      modifier: 1,
      slideShadows: true,
    },
    loop: true,
    navigation: {
      nextEl: ".swiper-button-next-3D",
      prevEl: ".swiper-button-prev-3D",
    },
    noSwiping: false,
    breakpoints: {
      992: {
        slidesPerView: 2,
        spaceBetween: -400,
      },
    },
  });
} catch (error) { }
/**********************/
/*** swiper scroll***/
/**********************/
try {
  var swiper = new Swiper(".mySwiperScroll", {
    slideToClickedSlide: true,
    grabCursor: true,
    spaceBetween: 20,
    pagination: {
      el: ".swiper-pagination-bar",
      type: "progressbar",
    },
    slidesPerView: "auto",
  });
} catch (error) { }
/**********************/
/**** tabs slider ***/
/**********************/
try {
  var swiperClient = new Swiper(".tabs-swiper", {
    loop: false,
    spaceBetween: 10,
    slidesPerView: 4,
    freeMode: false,
    watchSlidesProgress: true,

    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
  });

  document.querySelector(".tabs-swiper").addEventListener("mouseenter", () => {
    swiper2.autoplay.stop();
  });

  var swiper2 = new Swiper(".tabs-swiper-second", {
    loop: false,
    effect: "fade",
    spaceBetween: 10,
    slidesPerView: 1,

    thumbs: {
      swiper: swiperClient,
    },
    autoplay: {
      delay: 3000,
      disableOnInteraction: false,
      pauseOnMouseEnter: true,
    },
  });
} catch (error) { }
/**********************/
/**** slider gallery ***/
/**********************/
try {
  var swiper = new Swiper(".mySwiperGallery", {
    loop: false,
    slidesPerView: "auto",
    spaceBetween: 30,
    breakpoints: {
      // when window width is >= 320px
      300: {
        slidesPerView: 1.5,
      },
      // when window width is >= 480px
      600: {
        slidesPerView: 2.2,
      },
      // when window width is >= 640px
      900: {
        slidesPerView: 2.2,
      },
      1200: {
        slidesPerView: 2.2,
      },
    },
    pagination: {
      el: ".swiper-pagination-bar-gallery",
      type: "progressbar",
    },
  });
} catch (error) { }
/**********************/
/****scroll down on click ***/
/**********************/
try {
  const buttonDown = document.querySelectorAll(".button-wrap-down");
  let pageHeight = window.innerHeight;
  for (let i = 0; i < buttonDown.length; i++) {
    buttonDown[i].addEventListener("click", () => {
      window.scrollBy(0, pageHeight);
    });
  }
} catch (error) { }

/**********************/
/****vacature filter ***/
/**********************/
try {
  const elementNavbarfirstDiv = document.querySelector(".dropdown-careers");
  const elementNavbarSecondDiv = document.querySelector(".dropdown-careers-1");

  const navbarDropdownPackages = () => {
    elementNavbarfirstDiv?.classList.remove("activedropdown");
    elementNavbarSecondDiv?.classList.remove("activedropdown");
  };

  window.addEventListener("scroll", () => {
    const scrollpos = window.scrollY;

    if (scrollpos > 200) {
      navbarDropdownPackages();
    }
  });

  const ignoreClickOnMeElement = document.querySelector(".dropdown-careers");

  document.addEventListener("click", (event) => {
    const isClickInsideElement = ignoreClickOnMeElement?.contains(event.target);
    if (!isClickInsideElement) {
      elementNavbarfirstDiv?.classList.remove("activedropdown");
    }
  });

  const ignoreClickOnMeElementSecond = document.querySelector(
    ".dropdown-careers-1"
  );

  document.addEventListener("click", (eventSec) => {
    const isClickInsideElementSecond = ignoreClickOnMeElementSecond?.contains(
      eventSec.target
    );
    if (!isClickInsideElementSecond) {
      elementNavbarSecondDiv?.classList.remove("activedropdown");
    }
  });
  // ------------- end dropdown -------------
  function show(value) {
    document.querySelector(".text-box").value = value;
    const landValue = document.querySelector(".text-box-1").value;
    filterSearch(value, landValue);
  }

  let dropdown = document.querySelector(".dropdown-careers");
  dropdown.onclick = function () {
    dropdown.classList.toggle("activedropdown");
    elementNavbarSecondDiv.classList.remove("activedropdown");
  };

  function showSecond(value) {
    const skillValue = document.querySelector(".text-box").value;
    document.querySelector(".text-box-1").value = value;
    filterSearch(skillValue, value);
  }

  let dropdownSecond = document.querySelector(".dropdown-careers-1");
  dropdownSecond.onclick = function () {
    dropdownSecond.classList.toggle("activedropdown");
    elementNavbarfirstDiv.classList.remove("activedropdown");
  };

  const filterSearch = (skillValue, landValue) => {
    let value, name, profile, i, nameLocal;

    profiles = document.getElementsByClassName("rt-list__offer-item");

    for (profile of profiles) {
      name = profile.getElementsByClassName("skill")[0];
      nameLocal = profile.getElementsByClassName("rt-list__offer-location")[0];

      if (
        name.textContent.toUpperCase().includes(skillValue.toUpperCase()) > -1
      ) {
        profile.style.display = "flex";
      }
      if (
        name.textContent.toUpperCase().indexOf(skillValue.toUpperCase()) > -1 &&
        nameLocal.textContent.toUpperCase().indexOf(landValue.toUpperCase()) >
        -1
      ) {
        profile.style.display = "flex";
      } else if (
        name.textContent.toUpperCase().indexOf("/" + skillValue.toUpperCase()) >
        -1 &&
        nameLocal.textContent.toUpperCase().indexOf(landValue.toUpperCase()) >
        -1
      ) {
        profile.style.display = "flex";
      } else {
        profile.style.display = "none";
      }
    }
  };
} catch (error) { }
/**********************/
/**** accordion ***/
/**********************/
try {
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.height === panel.scrollHeight + "px") {
        panel.style.height = "0";
      } else {
        panel.style.height = panel.scrollHeight + "px";
        for (let j = 0; j < acc.length; j++) {
          if (this.classList != acc[j].classList) {
            acc[j].classList.remove("active");
            acc[j].nextElementSibling.style.height = "0";
          }
        }
      }
    });
  }
} catch (error) { }

/**********************/
/**** PDF and Form modalbox ***/
/**********************/
try {
  const ButtonPdf = document.querySelectorAll(".button-pdf");
  const ModalPdf = document.querySelector(".modal-form");
  const ClosePdf = document.querySelector(".close-pdf");

  for (let i = 0; i < ButtonPdf.length; i++) {
    ButtonPdf[i].addEventListener("click", () => {
      ModalPdf.classList.remove("hidden");
    });
  }

  const removeModal = () => {
    ModalPdf.classList.add("hidden");
  };

  ClosePdf.addEventListener("click", () => {
    removeModal();
  });
} catch (error) { }

/**********************/
/**** Header - modalbox ***/
/**********************/
try {
  const buttonModal = document.querySelectorAll(".button-modal");
  const ModalHeader = document.querySelector(".modal-form-header");
  const CloseHeader = document.querySelector(".close-modal");

  for (let i = 0; i < buttonModal.length; i++) {
    buttonModal[i].addEventListener("click", () => {
      ModalHeader.classList.remove("hidden");
    });
  }

  const removeModal = () => {
    ModalHeader.classList.add("hidden");
  };

  CloseHeader.addEventListener("click", () => {
    removeModal();
  });
} catch (error) { }

try {
  const forEach = (array, callback, scope) => {
    for (let i = 0; i < array.length; i++) {
      callback.call(scope, i, array[i]);
    }
  };

  const buttonMember = document.querySelectorAll(".button-members");

  forEach(buttonMember, function (i, el) {
    el.addEventListener("click", function () {
      const buttonMemberActive = document.querySelectorAll(".button-members");
      const block = document.querySelectorAll(".container.team-block");
      // Als de button de class active heeft verwijder dan de class active en voeg een class toe
      if (this.classList.contains("active")) {
        this.classList.remove("active");
        this.innerHTML = "Show more team members";

        this.closest(".team-block").classList.add("list-b-none");
      } else {
        // Verwijder alle classes van de button
        for (let i = 0; i < buttonMemberActive.length; i++) {
          buttonMemberActive[i].classList.remove("active");
        }
        // Voeg class toe waar je op drukt
        this.classList.add("active");

        // Voeg toe alle classes an de blocks
        for (let i = 0; i < block.length; i++) {
          block[i].classList.add("list-b-none");
        }
        // verwijder class die dicht bij button zit
        this.closest(".team-block.list-b-none").classList.remove("list-b-none");
      }

      const buttonMemberActiveClass = document.querySelector(
        ".button-members.active"
      );
      // Bekijk welke tekst erin moet
      if (buttonMemberActiveClass) {
        for (let i = 0; i < buttonMemberActive.length; i++) {
          buttonMemberActive[i].innerHTML = "Show more team members";
        }
        buttonMemberActiveClass.innerHTML = "Show less team members";
      }
    });
  });
} catch (error) { }


// function updateTimer() {
//   future  = Date.parse("february 17, 2023 11:00:00");
//   now     = new Date();
//   diff    = future - now;

//   years = Math.floor( diff / (1000*60*60*24*365) );
//   days  = Math.floor( diff / (1000*60*60*24) );
//   hours = Math.floor( diff / (1000*60*60) );
//   mins  = Math.floor( diff / (1000*60) );
//   secs  = Math.floor( diff / 1000 );

//   y = years;
//   d = days  - years * 365;
//   h = hours - days  * 24;
//   m = mins  - hours * 60;
//   s = secs  - mins  * 60;

//   document.getElementById("timer")
//     .innerHTML =
//       // '<div>' + y + '<span>years</span></div>' +
//       '<div class="flex flex-col text-white font-quintbold count text-45">' + d + '<span class="text-16 font-quintnormal">days</span></div>' +
//       '<div class="flex flex-col text-white font-quintbold count text-45">' + h + '<span class="text-16 font-quintnormal">hours</span></div>' +
//       '<div class="flex flex-col text-white font-quintbold count text-45">' + m + '<span class="text-16 font-quintnormal">minutes</span></div>' ;
//       // '<div class="flex flex-col text-white font-quintbold count text-45">' + s + '<span class="text-16 font-quintnormal">seconds</span></div>' ;
// }
// setInterval('updateTimer()', 1000 );


/**********************/
/**** Header - modalbox Scale Up ***/
/**********************/
try {
  const buttonModalTransport = document.querySelectorAll(".button-modal-transport");
  const ModalHeaderTransport = document.querySelector(".modal-form-header-transport");
  const CloseHeaderTransport = document.querySelector(".close-modal-transport");

  for (let i = 0; i < buttonModalTransport.length; i++) {
    buttonModalTransport[i].addEventListener("click", () => {
      ModalHeaderTransport.classList.remove("hidden");
    });
  }

  const removeModal = () => {
    ModalHeaderTransport.classList.add("hidden");
  };

  CloseHeaderTransport.addEventListener("click", () => {
    removeModal();
  });
} catch (error) { }



