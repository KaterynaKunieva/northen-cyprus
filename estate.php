<?php include_once('header.php') ?>

<main>
  <div class="banner" style="background-image: url('img/header__bg_estate.png');">
    <div class="title estate__title" style="opacity: 0;">
      <h1>апартаменты Северного Кипра</h1>
    </div>
  </div>
  <div class="estate">
    <div class="estate__main">
      <div class="text__bg text__bg_estate">estate</div>
      <div class="estate__filter">
        <div class="estate__form">
          <!-- Доверстати форму -->
          <form action=""></form>
        </div>
        <div class="estate__cards">
          <div class="search__cards">
            <a class="search__cards_item animation_5" href="object.php">
              <div class="search__cards_img">
                <img src="img/list_cards/1.jpg" alt="" />
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </a>
            <a class="search__cards_item animation_5" href="object.php">
              <div class="search__cards_img">
                <img src="img/list_cards/2.jpg" alt="" />
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </a>
            <a class="search__cards_item animation_5" href="object.php">
              <div class="search__cards_img">
                <img src="img/list_cards/3.jpg" alt="" />
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </a>
            <a class="search__cards_item animation_5" href="object.php">
              <div class="search__cards_img">
                <img src="img/list_cards/4.jpg" alt="" />
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </a>
            <a class="search__cards_item animation_5" href="object.php">
              <div class="search__cards_img">
                <img src="img/list_cards/5.jpg" alt="" />
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </a>
            <a class="search__cards_item animation_5" href="object.php">
              <div class="search__cards_img">
                <img src="img/list_cards/6.jpg" alt="" />
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </a>
            <a class="search__cards_item animation_5" href="object.php">
              <div class="search__cards_img">
                <img src="img/list_cards/7.jpg" alt="" />
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </a>
            <a class="search__cards_item animation_5" href="object.php">
              <div class="search__cards_img">
                <img src="img/list_cards/8.jpg" alt="" />
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </a>
            <a class="search__cards_item animation_5" href="object.php">
              <div class="search__cards_img">
                <img src="img/list_cards/9.jpg" alt="" />
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </a>
            <a class="search__cards_item animation_5" href="object.php">
              <div class="search__cards_img">
                <img src="img/list_cards/10.jpg" alt="" />
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </a>
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
    <!-- owl-carousel owl-theme -->
    <div class="recomendation__items">
      <div class="recomendation__img">
        <img src="img/recomendations/1.jpg">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/2.jpg">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/3.jpg">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/4.jpg">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/1.jpg">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/2.jpg">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/3.jpg">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/4.jpg">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/1.jpg">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/2.jpg">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/3.jpg">
      </div>
      <div class="recomendation__img">
        <img src="img/recomendations/4.jpg">
      </div>
    </div>
  </div>

</main>


<?php include_once('footer.php') ?>

<script>
var footer = document.getElementsByTagName("footer")[0];
footer.classList.add("footer__light");
footer.classList.add("inside");
footer.classList.remove("footer__dark");
var header = document.getElementsByTagName("header")[0];
header.classList.add("header__estate");
</script>