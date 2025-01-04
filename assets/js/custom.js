var programSwiper = new Swiper(".program-swiper", {
  effect: "coverflow",
  loop: true,
  centeredSlides: true,
  slidesPerView: "auto",
  spaceBetween: 100,
  navigation: {
    nextEl: ".program-swiper .swiper-button-next",
    prevEl: ".program-swiper .swiper-button-prev",
  },
  coverflowEffect: {
    rotate: 0,
    depth: 150,
    modifier: 1.5,
    slideShadows: false,
  },
  breakpoints: {
    1325: {
      spaceBetween: 0,
    },
  },
});

var membersSwiper = new Swiper(".members-swiper", {
  direction: "horizontal",
  loop: true,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  autoHeight: true,
  slidesPerView: 1,
  breakpoints: {
    991: {
      direction: "vertical",
      autoHeight: false
    },
  },
});

var missionSwiper = new Swiper(".mission-swiper", {
  loop: true,
  spaceBetween: 30,
  slidesPerView: 2.5,
  centeredSlides: true,
  pagination: {
    el: ".swiper-pagination",
    type: "custom",
  },
  breakpoints: {
    1399: {
      spaceBetween: 130,
    },
    1199: {
      spaceBetween: 100,
    },
  },
  navigation: {
    nextEl: ".mission-swiper .swiper-button-next",
    prevEl: ".mission-swiper .swiper-button-prev",
  },
});

var homeProgramSwiper = new Swiper(".home-program-swiper", {
  loop: true,
  slidesPerView: 1.95,
  spaceBetween: 20,
  centeredSlides: true,
  roundLengths: true,
  navigation: {
    nextEl: ".home-program-swiper .swiper-button-next",
    prevEl: ".home-program-swiper .swiper-button-prev",
  },
  breakpoints: {
    1400: {
      spaceBetween: 55,
      slidesPerView: 3.95,
    },
    1200: {
      spaceBetween: 30,
      slidesPerView: 3.95,
    },
    1199: {
      spaceBetween: 30,
      slidesPerView: 2.95,
    },
  },
});

var clientSwiper = new Swiper(".client-swiper", {
  loop: true,
  slidesPerView: 1,
  centeredSlides: true,
  autoHeight: true,
  pagination: {
    el: ".swiper-pagination",
    type: "custom",
    renderCustom: function (swiper, current, total) {
      return current + " / " + total;
    },
  },
  navigation: {
    nextEl: ".client-swiper .swiper-button-next",
    prevEl: ".client-swiper .swiper-button-prev",
  },
});

var coachingSwiper = new Swiper(".event-coaching-swiper", {
  loop: true,
  slidesPerView: 1,
  centeredSlides: true,
  navigation: {
    nextEl: ".event-coaching-swiper .swiper-button-next",
    prevEl: ".event-coaching-swiper .swiper-button-prev",
  },
});

document.addEventListener("DOMContentLoaded", function () {
  const tabs = document.querySelectorAll("#tabs li");
  const tabContainer1 = document.querySelectorAll("#tabcontainer .tabs");
  const tabContainer2 = document.querySelectorAll("#tabcontainer-2 .tabs");

  // Hide all tabs and show the first tab
  function initializeTabs(tabContainers) {
    tabContainers.forEach((tab, index) => {
      tab.style.display = index === 0 ? "block" : "none";
    });
  }

  initializeTabs(tabContainer1);
  initializeTabs(tabContainer2);

  tabs[0].classList.add("active");

  tabs.forEach((tab, index) => {
    tab.addEventListener("click", function () {
      // Hide all tabs and show the clicked one
      tabContainer1.forEach((tab, i) => {
        tab.style.display = i === index ? "block" : "none";
      });

      tabContainer2.forEach((tab, i) => {
        tab.style.display = i === index ? "block" : "none";
      });

      // Remove active class from all tabs and add to the clicked one
      tabs.forEach((tab) => tab.classList.remove("active"));
      this.classList.add("active");
    });
  });
});


//jQuery(function ($) {
//  $("#tabcontainer .tabs").hide().eq(0).show();
//  $("#tabcontainer-2 .tabs").hide().eq(0).show();
//  $("#tabs li").eq(0).addClass("active");

//  $("#tabs li").click(function () {
//    let num = $("#tabs li").index(this);

//    $("#tabcontainer .tabs").hide().eq(num).show();
//    $("#tabcontainer-2 .tabs").hide().eq(num).show();

//    $("#tabs li").removeClass("active");
//    $(this).addClass("active");
//  });
//});


function initMegaMenuObserver() {
  if (window.innerWidth > 1199) {
    const targetNode = document.getElementById("megaMenu");
    if (!targetNode) return; // Ensure targetNode exists

    const observer = new MutationObserver((mutationsList) => {
      for (const mutation of mutationsList) {
        if (
          mutation.type === "attributes" &&
          mutation.attributeName === "class"
        ) {
          const header = document.querySelector("header");
          if (!header) return; // Ensure header exists

          if (targetNode.classList.contains("show")) {
            header.classList.add("show-mega-menu");
          } else {
            header.classList.remove("show-mega-menu");
          }
        }
      }
    });

    const config = { attributes: true };
    observer.observe(targetNode, config);
  }
}

window.addEventListener("resize", initMegaMenuObserver);
initMegaMenuObserver();

const hoverableLists = document.querySelectorAll(".hoverable-list");
hoverableLists.forEach((list) => {
  const imgContainerId = list.getAttribute("data-img-container");
  const imgElement = document.getElementById(imgContainerId);
  list.addEventListener("mouseover", (event) => {
    if (event.target.tagName === "LI") {
      const newImgSrc = event.target.getAttribute("data-img-target");
      if (imgElement) {
        imgElement.src = newImgSrc;
      }
      list
        .querySelectorAll("li")
        .forEach((li) => li.classList.remove("active"));
      event.target.classList.add("active");
    }
  });
});

document.querySelectorAll(".list-itens").forEach((item) => {
  item.addEventListener("mouseover", function () {
    const newImage = this.getAttribute("data-image");
    document.getElementById("megaMenuImage").src = newImage;
  });

  item.addEventListener("mouseout", function () {
    document.getElementById("megaMenuImage").src = "https://bia.devsroom.com/wp-content/themes/biawarrior/assets/img/menu/obstacle.png";
  });
});

document.addEventListener("DOMContentLoaded", function () {
  document.getElementById("toggle-menu").addEventListener("click", function () {
    document.querySelector("header").classList.toggle("mobile-menu");
  });
});






