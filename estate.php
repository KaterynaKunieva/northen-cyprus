<?php include_once('header.php') ?>

<main>
  <div class="estate">
    <div class="estate__header"> 
      
    </div>
    <div class="estate__main">
      <div class="title estate__title">апартаменты Северного Кипра </div>
      <div class="text__bg text__bg_estate">estate</div>
      <div class="estate__filter">
        <div class="estate__form">
          <!-- Доверстати форму -->
          <form action=""></form>
        </div>
        <div class="estate__cards">
          <div class="search__cards">
            <div class="search__cards_item">
              <div class="search__cards_img">
                <a href=""><img src="img/list_cards/1.png" alt="" /></a>
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </div>
            <div class="search__cards_item">
              <div class="search__cards_img">
                <a href=""><img src="img/list_cards/2.png" alt="" /></a>
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </div>
            <div class="search__cards_item">
              <div class="search__cards_img">
                <a href=""><img src="img/list_cards/3.png" alt="" /></a>
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </div>
            <div class="search__cards_item">
              <div class="search__cards_img">
                <a href=""><img src="img/list_cards/4.png" alt="" /></a>
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </div>
            <div class="search__cards_item">
              <div class="search__cards_img">
                <a href=""><img src="img/list_cards/5.png" alt="" /></a>
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </div>
            <div class="search__cards_item">
              <div class="search__cards_img">
                <a href=""><img src="img/list_cards/6.png" alt="" /></a>
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </div>
          </div>
        </div>
        <div class="estate__pagination">
          <?php
            $amount_of_pages = 50;  
            for($page = 1; $page <= $amount_of_pages; $page++){ 
              if($page == 5){ 
                echo "<div class='pagination__item'><a href=''>...</a></div>";
                $page = $amount_of_pages - 5;
              } 
              echo "<div class='pagination__item'><a href=''>".$page."</a></div>";
              
            }
          ?>
        </div>
      </div>
    </div>
  </div>
  <div class="estate__recomendations">
    <div class="recomendations__header">
      <div class="recomendations__title">Рекомендуем к просмотру</div>
      <div class="recomendations__line"></div>
    </div>
    <div class="recomendation__items owl-carousel owl-theme">
      <div class="recomendation__img">
        <img src="img/recomendations/1.png">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/2.png">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/3.png">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/4.png">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/1.png">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/2.png">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/3.png">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/4.png">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/1.png">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/2.png">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/3.png">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/4.png">
      </div>
    </div>
  </div>

</main>


<?php include_once('footer.php') ?>
<script src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script> 
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> 
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css"/>
<script src="/node_modules/jquery/dist/jquery.js"></script>
<script src="/node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
<script src="js/common.min.js"></script> 
<script>
  var footer = document.getElementsByTagName("footer")[0];
  footer.classList.add("footer__light"); 
  footer.classList.remove("footer__dark");
  var header = document.getElementsByTagName("header")[0];
  header.classList.add("header__estate");
</script>
<script>
  $(document).ready(function () {
    $(".owl-carousel").owlCarousel({
      loop: true,
    });
    $(".owl-item").removeAttr("style");
    if ($(window).width() < 1438) {
      $(".owl-item").width("241px");
      $(".owl-item").height("241px");
      $(".owl-item").css("margin", "0 2px");
      $(".owl-stage-outer").width("750px");
      $(".owl-stage-outer").height("250px");
    } else {
      $(".owl-item").width("331px");
      $(".owl-stage-outer").width("1325px");
    }
  });
</script>