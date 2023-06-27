<?php include_once('header.php') ?>

<main>
  <div class="contacts__banner">

  </div>
  <div class="contacts">
    <div class="text__bg text__bg_contacts">contacts</div>
    <h1 class="title contacts__title" style="opacity: 0;">КОНТАКТЫ</h1>
    <div class="contacts__content">
      <div class="contacts__coordinates">
        <div class="contacts_item">
          <div class="contact_type">телефон</div>
          <a href="tel:+35724020177" class="contact_value">+357-24-020177</a>
        </div>
        <div class="contacts_item">
          <div class="contact_type">ОФИС КОМПАНИИ</div>
          <div class="contact_value">NORTH CYPRUS
            <span>Kirenia, Göktürk Sk 13</span>
          </div>
        </div>
        <div class="contacts_item">
          <div class="contact_type">почта</div>
          <a href="mailto:Thefamilyestateagency@gmail.com" class="contact_value">Thefamilyestateagency@gmail.com</a>
        </div>
      </div>

      <div class="contacts__social">
        <div class="contact_type">присоединяйтесь в соцсетях</div>
        <div class="socials__items">
          <div class="social__item">
            <!-- <img src="#" alt="instagram"> -->
            <!-- <a href=""><i class="fab fa-instagram rounded_icon"></i></a> -->
            <a href=""><img src="img/social/1.png" alt=""></a>
            <div class="contact_value">@thefamily.estate</div>
          </div>
          <div class="social__item">
            <!-- <img src="#" alt="facebook"> -->
            <!-- <a href=""><i class="fab fa-facebook-f rounded_icon"></i></a> -->
            <a href=""><img src="img/social/2.png" alt=""></a>
            <div class="contact_value">@The Family Estate</div>
          </div>
          <div class="social__item">
            <!-- <img src="#" alt="youtube"> -->
            <!-- <a href=""><i class="fab fa-youtube"></i></a> -->
            <a href=""><img src="img/social/3.png" alt=""></a>
            <div class="contact_value">The Family Estate</div>
          </div>
        </div>
      </div>

      <div class="contacts__map">
        <img src="img/contacts_map.png" alt="map">
      </div>
    </div>
  </div>
</main>


<?php include_once('footer.php') ?>

<script>
var footer = document.getElementsByTagName("footer")[0];
footer.classList.remove("footer__dark");
footer.classList.add("footer__light");
footer.classList.add("footer__contacts");
footer.classList.add("inside");
if ($(window).width() < 1350) {
  footer.classList.remove("footer__light");
  footer.classList.add("footer__dark");
}
if ($(window).width() < 620) {
  footer.setAttribute("style", "margin-top: -75px !important");
} else {
  footer.setAttribute("style", "margin-top: -60px");
}

var header = document.getElementsByTagName("header")[0];
header.classList.add("header__contacts");
</script>