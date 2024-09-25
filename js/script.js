(function ($) {
  "use strict";
  // init Isotope
  var initIsotope = function () {
    $(".grid").each(function () {
      // $('.grid').imagesLoaded( function() {
      // images have loaded
      var $buttonGroup = $(".button-group");
      var $checked = $buttonGroup.find(".is-checked");
      var filterValue = $checked.attr("data-filter");
      var $grid = $(".grid").isotope({
        itemSelector: ".portfolio-item",
        // layoutMode: 'fitRows',
        filter: filterValue,
      });
      // bind filter button click
      $(".button-group").on("click", "a", function (e) {
        e.preventDefault();
        filterValue = $(this).attr("data-filter");
        $grid.isotope({ filter: filterValue });
      });
      // change is-checked class on buttons
      $(".button-group").each(function (i, buttonGroup) {
        $buttonGroup.on("click", "a", function () {
          $buttonGroup.find(".is-checked").removeClass("is-checked");
          $(this).addClass("is-checked");
        });
      });
      // });
    });
  };
  // var initScrollNav = function() {
  //   var scroll = $(window).scrollTop();
  //   console
  //   if (scroll >= 200) {
  //     $('#header.fixed-top').addClass("bg-white");
  //   }else{
  //     $('#header.fixed-top').removeClass("bg-white");
  //   }
  // }
  // init Chocolat light box
  var initChocolat = function () {
    Chocolat(document.querySelectorAll(".image-link"), {
      imageSize: "contain",
      loop: true,
    });
  };
  // ------------------------------------------------------------------------------ //
  // Overlay Menu Navigation
  // ------------------------------------------------------------------------------ //
  var overlayMenu = function () {
    if (!$(".nav-overlay").length) {
      return false;
    }
    var body = undefined;
    var menu = undefined;
    var menuItems = undefined;
    var init = function init() {
      body = document.querySelector("body");
      menu = document.querySelector(".menu-btn");
      menuItems = document.querySelectorAll(".nav__list-item");
      applyListeners();
    };
    var applyListeners = function applyListeners() {
      menu.addEventListener("click", function () {
        return toggleClass(body, "nav-active");
      });
    };
    var toggleClass = function toggleClass(element, stringClass) {
      if (element.classList.contains(stringClass))
        element.classList.remove(stringClass);
      else element.classList.add(stringClass);
    };
    init();
  };
  $(document).ready(function () {
    overlayMenu();
    initChocolat();
    AOS.init({
      duration: 1000,
      once: true,
    });
    $("#btn-menu").click(function (e) {
      e.preventDefault();
      $(".sidebar-menu").toggleClass("open");
    });
  }); // End of a document
  $(window).load(function () {
    initIsotope();
  });
})(jQuery);
document.addEventListener("DOMContentLoaded", function () {
  // Function to close all divs
  function closeAllDivs() {
    const divs = document.querySelectorAll(".expandable-div");
    divs.forEach((div) => {
      div.classList.remove("expanded");
    });
  }
  // Function to toggle a specific div
  function toggleDiv(divId) {
    const div = document.getElementById(divId);
    if (div.classList.contains("expanded")) {
      div.classList.remove("expanded");
    } else {
      closeAllDivs(); // Close other divs
      div.classList.add("expanded");
    }
  }
  // Event listeners for buttons
  document.getElementById("button1").addEventListener("click", function () {
    toggleDiv("expand-1");
  });
  document.getElementById("button2").addEventListener("click", function () {
    toggleDiv("expand-2");
  });
  document.getElementById("button3").addEventListener("click", function () {
    toggleDiv("expand-3");
  });
  document.getElementById("button4").addEventListener("click", function () {
    toggleDiv("expand-4");
  });
});
