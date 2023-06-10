$(function () {
  $(".menu ul li a").click(function () {
    $(".menu ul li a").each(function (menu_item) {
      $(this).removeClass("selectedMenu");
    });
    $(this).addClass("selectedMenu");
  });
});
