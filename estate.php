<?php include_once('header.php') ?>

<main>
  <div class="banner" style="background-image: url('img/header__bg_estate.png');">
    <div class="title estate__title">
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
            <a class="search__cards_item" href="object.php">
              <div class="search__cards_img">
                <img src="img/list_cards/1.png" alt="" />
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </a>
            <a class="search__cards_item" href="object.php">
              <div class="search__cards_img">
                <img src="img/list_cards/2.png" alt="" />
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </a>
            <a class="search__cards_item" href="object.php">
              <div class="search__cards_img">
                <img src="img/list_cards/3.png" alt="" />
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </a>
            <a class="search__cards_item" href="object.php">
              <div class="search__cards_img">
                <img src="img/list_cards/4.png" alt="" />
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </a>
            <a class="search__cards_item" href="object.php">
              <div class="search__cards_img">
                <img src="img/list_cards/5.png" alt="" />
              </div>
              <div class="search__cards_text">
                <div class="search__cards_title">Palm Homes</div>
                <div class="search__cards_price">от 240 000$</div>
              </div>
            </a>
            <a class="search__cards_item" href="object.php">
              <div class="search__cards_img">
                <img src="img/list_cards/6.png" alt="" />
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

<script>
var footer = document.getElementsByTagName("footer")[0];
footer.classList.add("footer__light");
footer.classList.add("inside");
footer.classList.remove("footer__dark");
var header = document.getElementsByTagName("header")[0];
header.classList.add("header__estate");
</script>