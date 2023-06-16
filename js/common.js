//Animate CSS + WayPoints javaScript Plugin
//Example: $(".element").animated("zoomInUp");
//Author URL: http://webdesign-master.ru
(function ($) {
  $.fn.animated = function (inEffect) {
    $(this).each(function () {
      var ths = $(this);
      ths
        .css("opacity", "0")
        .addClass("animated")
        .waypoint(
          function (dir) {
            if (dir === "down") {
              ths.addClass(inEffect).css("opacity", "1");
            }
          },
          {
            offset: "90%",
          }
        );
    });
  };
})(jQuery);

$(document).ready(function () {
  $(".loader_inner").fadeOut();
  $(".loader").delay(10).fadeOut("slow");

  $(".main_head").addClass("start_animation");

  var statNumbers = document.querySelectorAll(".about__stat-number");

  function isElementInViewport(element) {
    var rect = element.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function countTo(element) {
    var targetCount = parseInt(element.getAttribute("data-count"));
    var currentCount = 0;
    var increment = Math.ceil(targetCount / 100); // Adjust the increment value as needed

    var interval = setInterval(function () {
      if (currentCount >= targetCount) {
        clearInterval(interval);
      } else {
        currentCount += increment;
        element.textContent = currentCount;
      }
    }, 10); // Adjust the interval duration as needed
  }

  function handleScroll() {
    statNumbers.forEach(function (numberElement) {
      if (
        isElementInViewport(numberElement) &&
        !numberElement.classList.contains("animated")
      ) {
        countTo(numberElement);
        numberElement.classList.add("animated");
      } else if (
        !isElementInViewport(numberElement) &&
        numberElement.classList.contains("animated")
      ) {
        numberElement.classList.remove("animated");
      }
    });
  }

  window.addEventListener("scroll", handleScroll);

  // LL = new LazyLoad({
  //   elements_selector: ".lazy_bg",
  // });
  // new LazyLoad();

  var win_width = $(window).width();
  var offset_top = $(window).height();
  var scrollTop = $(window).scrollTop();
  var header = document.querySelector("header");
  var headerClasses = Array.from(header.classList);
  var a = document.querySelectorAll("header ul li a");

  fixingMenu = function () {
    var scrollTop = $(window).scrollTop();
    if (scrollTop > 100) {
      header.removeAttribute("class");
      header.setAttribute(
        "style",
        "background-color: #1e6465; background-image: initial; position: fixed; border-radius: 35px 35px 35px 35px; padding-bottom: 15px !important; max-height: 120px"
      );
      a.forEach(function (link) {
        link.addEventListener("mouseenter", mouseEnterHandler);
        link.addEventListener("mouseleave", mouseLeaveHandler);
      });
    } else {
      header.removeAttribute("style");
      if (headerClasses && headerClasses.length > 0) {
        headerClasses.forEach(function (className) {
          header.classList.add(className);
        });
      }
      a.forEach(function (link) {
        link.removeEventListener("mouseenter", mouseEnterHandler);
        link.removeEventListener("mouseleave", mouseLeaveHandler);
      });
    }
  };

  window.addEventListener("scroll", () => {
    $(".mobile_menu").removeClass("active");
    $(".sandwich").removeClass("active");
  });
  window.addEventListener("scroll", fixingMenu);

  function mouseEnterHandler() {
    this.style.color = "#a1827c";
  }

  function mouseLeaveHandler() {
    this.style.color = "";
  }

  $("body").toggleClass("down", win_width > 768 && scrollTop > offset_top);

  $(window).resize(function () {
    offset_top = $(window).height();
    win_width = $(window).width();
    $("body").toggleClass("down", win_width > 768 && scrollTop > offset_top);
  });
  $(window).scroll(function () {
    scrollTop = $(window).scrollTop();
    $("body").toggleClass("down", win_width > 768 && scrollTop > offset_top);
  });

  var w = $(window).width();
  change_menu_class();
  $(window).resize(function () {
    if ($(window).width() == w) return;
    w = $(window).width();
    change_menu_class();
  });

  if ($(window).width() < 1438) {
    $(document).ready(function () {
      $(".search__cards_item").each(function (index) {
        if (index > 3 && !$(this).closest(".estate").length) {
          $(this).css("display", "none");
        }
      });
    });
  }

  function change_menu_class() {
    if ($(window).width() < 928) {
      $(".menu").removeClass("head__menu");
      $(".menu").addClass("mobile_menu");
    } else {
      $(".menu").removeClass("mobile_menu");
      $(".menu").addClass("head__menu");
    }
  }

  $(".toggle__mnu").click(function () {
    $(".sandwich").toggleClass("active");
    $("header").toggleClass("menu_active");
    $(".mobile_menu").toggleClass("active");
    if ($(".mobile_menu").hasClass("active")) {
      $("header").css("border-radius", "0px");
    } else {
      $("header").css("border-radius", "35px");
    }
  });

  $(".recomendation__items").slick({
    slidesToScroll: 2,
    arrows: false,
    adaptiveHeight: true,
    variableWidth: true,
    infinite: true,
    draggable: true,
    swipeToSlide: true,
    // autoplay: true,
    // autoplaySpeed: 2000,
  });

  slides = $(window).width() < 1100 ? 7 : 11;

  var gallery_thubn = $(".gallery_thubn");
  var gallery_items = $(".gallery_items");
  gallery_thubn.slick({
    slidesToShow: slides,
    slidesToScroll: 1,
    fade: false,
    adaptiveHeight: false,
    infinite: true,
    pauseOnFocus: true,
    draggable: true,
    centerMode: false,
    variableWidth: false,
    autoplay: false,
    autoplaySpeed: 5000,
    focusOnSelect: true,
    arrows: false,
    dots: false,
    swipeToSlide: true,
    asNavFor: ".gallery_items",
  });
  gallery_items.slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    infinite: true,
    slide: ".item",
    fade: false,
    adaptiveHeight: true,
    pauseOnFocus: true,
    centerMode: false,
    variableWidth: false,
    autoplay: false,
    autoplaySpeed: 5000,
    draggable: true,
    arrows: false,
    dots: false,
    asNavFor: ".gallery_thubn",
  });
  $(".animation_1").animated("fadeIn");
  $(".animation_2").animated("fadeInLeft");
  $(".animation_3").animated("fadeInRight");
  $(".animation_4").animated("zoomIn");
  $(".animation_5").animated("fadeInUp");
  $(".animation_6").animated("tada");
  $(".animation_7").animated("flash");
  $(".animation_8").animated("zoomInDown");
});
