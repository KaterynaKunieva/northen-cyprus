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

  // LL = new LazyLoad({
  //   elements_selector: ".lazy_bg",
  // });
  // new LazyLoad();

  var win_width = $(window).width();
  var offset_top = $(window).height();
  var scrollTop = $(window).scrollTop();

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

  function change_menu_class() {
    if ($(window).width() < 891) {
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

  var gallery_thubn = $(".gallery_thubn");
  var gallery_items = $(".gallery_items");
  gallery_thubn.slick({
    slidesToShow: 11,
    slidesToScroll: 1,
    fade: false,
    adaptiveHeight: false,
    infinite: true,
    pauseOnFocus: true,
    draggable: false,
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
