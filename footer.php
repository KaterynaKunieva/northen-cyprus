<footer class="footer footer__dark">
  <div class="footer__nav">
    <div class="footer__nav-item">
      <div class="footer__nav-title">The Family Estate</div>
      <div class="footer__nav-list">
        <ul>
          <li><a href="#">Про Северный Кипр</a></li>
          <li><a href="#">О компании</a></li>
          <li><a href="#">Контакты</a></li>
        </ul>
      </div>
    </div>
    <div class="footer__nav-item">
      <div class="footer__nav-title">Недвижимость</div>
      <div class="footer__nav-list">
        <ul>
          <li><a href="#">Апартаменты</a></li>
          <li><a href="#">Виллы</a></li>
          <li><a href="#">Бунгало</a></li>
          <li><a href="#">Земельные участки</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="footer__bigger">
    <div class="footer__bigger-title">Всегда на связи</div>
    <div class="footer__bigger-list">
      <ul>
        <li>
          <a href="#"><img src="img/social/1.png" alt="instagram" /></a>
          <!-- <a href=""><i class="fab fa-instagram rounded_icon"></i></a> -->
        </li>
        <li>
          <a href="#"><img src="img/social/2.png" alt="facebook" /></a>
          <!-- <a href=""><i class="fab fa-facebook-f rounded_icon"></i></a> -->
        </li>
        <li>
          <a href="#"><img src="img/social/3.png" alt="youtube" /></a>
          <!-- <a href=""><i class="fab fa-youtube"></i></a> -->
        </li>
        <li>
          <a href="#"><img src="img/social/4.png" alt="telegram" /></a>
          <!-- <a href=""><i class="fa-brands fa-telegram"></i></a> -->
        </li>
      </ul>
    </div>
    <a class="footer__phone" href="tel:+35724020177">+357-24-020177 </a>
    <input class="btn footer__btn-phone" type="button" value="Позвоните мне" data-remodal-target="modal" />
  </div>
</footer>


<!-- Modal window -->
<div id="modal_form" class="remodal" data-remodal-id="modal" data-remodal-options="hashTracking: false">
  <button type="button" class="remodal-close" data-remodal-action="close"></button>
  <div class="modal_content">
    <a class="modal_logo" href="index.php"><img src="img/logo.png" alt="logo" /></a>
    <div class="center_wrap">
      <div class="form_title">Оставьте заявку прямо сейчас и мы подберем лучшие варианты недвижимости с учетом всех
        ваших пожеланий!</div>
    </div>
    <form method="post">
      <span class="wpcf7-form-control-wrap your-name">
        <input type="text" name="Name" required placeholder="Ваше имя">
      </span>
      <span class="wpcf7-form-control-wrap tel-266">
        <input type="text" id="phone" name="Phone" value="" required="" placeholder="Ваш мобильный">
      </span>
      <div class="btn_style_wrap">
        <input type="submit" class="btn_style" value="Жду звонок">
      </div>
    </form>
  </div>
</div>

<script src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/waypoints.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>
<script type="text/javascript" src="js/remodal.min.js"></script>
<script type="text/javascript" src="js/intlTelInput.min.js"></script>
<script src="js/common.js?11"></script>

</body>

</html>