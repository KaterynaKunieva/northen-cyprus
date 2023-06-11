<?php include_once('header.php') ?>

<main>
  <div class="contacts">
    <div class="text__bg text__bg_contacts">contacts</div>
    <div class="contacts__title">КОНТАКТЫ</div>
    <div class="contacts__content">
      <div class="contacts__coordinates">
        <div class="contacts_item">
          <div class="contact_type">телефон</div>
          <div class="contact_value">+357-24-020177</div>
        </div>
        <div class="contacts_item">
          <div class="contact_type">ОФИС КОМПАНИИ</div>
          <div class="contact_value">NORTH CYPRUS
            <span>Kirenia, Göktürk Sk 13</span>
          </div>
        </div>
        <div class="contacts_item">
          <div class="contact_type">почта</div>
          <div class="contact_value">Thefamilyestateagency@gmail.com</div>
        </div>
      </div>

      <div class="contacts__social">
        <div class="contact_type">присоединяйтесь в соцсетях</div>
        <div class="socials__items">
          <div class="social__item">
            <img src="#" alt="instagram">
            <div class="contact_value">@thefamily.estate</div>
          </div>
          <div class="social__item">
            <img src="#" alt="facebook">
            <div class="contact_value">@The Family Estate</div>
          </div>
          <div class="social__item">
            <img src="#" alt="youtube">
            <div class="contact_value">The Family Estate</div>
          </div>
        </div>
      </div>

      <div class="contacts__map">
        <img src="img/contacts_map.png" alt="map">
      </div>
    </div>
    <div class="contacts__map"></div>

  </div>

</main>


<?php include_once('footer.php') ?>

<script>
var footer = document.getElementsByTagName("footer")[0];
footer.classList.add("footer__contacts_page");
var header = document.getElementsByTagName("header")[0];
header.classList.add("header__contacts");
</script>