var gallery_thubn = $(".gallery_thubn");
gallery_thubn.slick({
  slidesToShow: 11, 
  slidesToScroll: 1,
  fade: false,
  adaptiveHeight: false,
  infinite: true,
  pauseOnFocus: true,
  draggable: true,
  centerMode: false, // true
  variableWidth: false,
  autoplay: false,
  autoplaySpeed: 5000,
  focusOnSelect: true,
  arrows: false,
  dots: false,
  asNavFor: ".gallery_items",
  responsive: [
    {
      breakpoint: 992,
      settings: {
        slidesToShow: 5,
      },
    },
    {
      breakpoint: 768,
      settings: {
        slidesToShow: 4,
      },
    },
  ],
});

var gallery_items = $(".gallery_items");
gallery_items.slick({
  slide: ".item",
  slidesToShow: 1,
  slidesToScroll: 1,
  fade: true,
  adaptiveHeight: true,
  infinite: true,
  pauseOnFocus: true,
  draggable: true,
  centerMode: false,
  variableWidth: false,
  autoplay: false,
  autoplaySpeed: 5000,
  arrows: true,
  dots: false,
  asNavFor: ".gallery_thubn",
});

// !(function (a) {
//   a.fn.animated = function (n) {
//     a(this).each(function () {
//       var e = a(this);
//       e.css("opacity", "0")
//         .addClass("animated")
//         .waypoint(
//           function (a) {
//             "down" === a && e.addClass(n).css("opacity", "1");
//           },
//           { offset: "90%" }
//         );
//     });
//   };
// })(jQuery),
//   $(document).ready(function () {
//     $(".loader_inner").fadeOut(),
//       $(".loader").delay(10).fadeOut("slow"),
//       $(".main_head").addClass("start_animation"),
//       (LL = new LazyLoad({ elements_selector: ".lazy_bg" })),
//       new LazyLoad();
//     var a = $(window).width(),
//       e = $(window).height(),
//       n = $(window).scrollTop(),
//       i =
//         ($("body").toggleClass("down", 768 < a && e < n),
//         $(window).resize(function () {
//           (e = $(window).height()),
//             (a = $(window).width()),
//             $("body").toggleClass("down", 768 < a && e < n);
//         }),
//         $(window).scroll(function () {
//           (n = $(window).scrollTop()),
//             $("body").toggleClass("down", 768 < a && e < n);
//         }),
//         $(window).width());
//     function o() {
//       $(window).width() < 768
//         ? ($(".menu").removeClass("head_menu"),
//           $(".menu").addClass("mobile_menu"))
//         : ($(".menu").removeClass("mobile_menu"),
//           $(".menu").addClass("head_menu"));
//     }
//     o(),
//       $(window).resize(function () {
//         $(window).width() != i && ((i = $(window).width()), o());
//       }),
//       $(".toggle__menu").click(function () {
//         console.log("Opened");
//       });
//     $(".gallery_thubn").slick({
//       slidesToShow: 6,
//       slidesToScroll: 1,
//       fade: !1,
//       adaptiveHeight: !1,
//       infinite: !0,
//       pauseOnFocus: !0,
//       draggable: !0,
//       centerMode: !1,
//       variableWidth: !1,
//       autoplay: !1,
//       autoplaySpeed: 5e3,
//       focusOnSelect: !0,
//       arrows: !1,
//       dots: !1,
//       asNavFor: ".gallery_items",
//       responsive: [
//         { breakpoint: 992, settings: { slidesToShow: 5 } },
//         { breakpoint: 768, settings: { slidesToShow: 4 } },
//       ],
//     });
//     var t = $(".gallery_items");
//     t.on("init reInit beforeChange", function (a, e, n, i) {
//       i = (i || 0) + 1;
//       $(".gallery_items_count").html(
//         '<span class="slideCountItem">' +
//           i +
//           ' </span><span class="divider"> / </span><span class="slideCountAll"> ' +
//           e.slideCount +
//           "</span>"
//       );
//     }),
//       t.slick({
//         slide: ".item",
//         slidesToShow: 1,
//         slidesToScroll: 1,
//         fade: !0,
//         adaptiveHeight: !0,
//         infinite: !0,
//         pauseOnFocus: !0,
//         draggable: !0,
//         centerMode: !1,
//         variableWidth: !1,
//         autoplay: !1,
//         autoplaySpeed: 5e3,
//         arrows: !0,
//         dots: !1,
//         asNavFor: ".gallery_thubn",
//       }),
//       $(".animation_1").animated("fadeIn"),
//       $(".animation_2").animated("fadeInLeft"),
//       $(".animation_3").animated("fadeInRight"),
//       $(".animation_4").animated("zoomIn"),
//       $(".animation_5").animated("fadeInUp"),
//       $(".animation_6").animated("tada"),
//       $(".animation_7").animated("flash"),
//       $(".animation_8").animated("zoomInDown");
//   });
