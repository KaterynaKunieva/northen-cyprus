<?php include_once('header.php') ?>
<main>
	<div class="object">
		<div class="object__header"></div>
		<div class="text__bg text__bg_object"> estate </div>
		<div class="object__name">Palm Homes Specifications</div>
		<div class="object__code">Код обьекта: <span>764785434667</span></div>
		<div class="gallery_thubn">
			<div class="item">
				<img src="img/slider/1.png" alt="1">
			</div>
			<div class="item">
				<img src="img/slider/2.png" alt="3">
			</div>
			<div class="item">
				<img src="img/slider/3.png" alt="4">
			</div>
			<div class="item">
				<img src="img/slider/4.png" alt="5">
			</div>
			<div class="item">
				<img src="img/slider/5.png" alt="2">
			</div>
			<div class="item">
				<img src="img/slider/6.png" alt="6">
			</div>
			<div class="item">
				<img src="img/slider/7.png" alt="7">
			</div>
			<div class="item">
				<img src="img/slider/8.png" alt="8">
			</div>
			<div class="item">
				<img src="img/slider/9.png" alt="9">
			</div>
			<div class="item">
				<img src="img/slider/10.png" alt="10">
			</div>
			<div class="item">
				<img src="img/slider/11.png" alt="11">
			</div>
		</div>
		<div class="gallery_items">
			<div class="item">
				<img src="img/slider/1.png" alt="1">
			</div>
			<div class="item">
				<img src="img/slider/2.png" alt="3">
			</div>
			<div class="item">
				<img src="img/slider/3.png" alt="4">
			</div>
			<div class="item">
				<img src="img/slider/4.png" alt="5">
			</div>
			<div class="item">
				<img src="img/slider/5.png" alt="2">
			</div>
			<div class="item">
				<img src="img/slider/6.png" alt="6">
			</div>
			<div class="item">
				<img src="img/slider/7.png" alt="7">
			</div>
			<div class="item">
				<img src="img/slider/8.png" alt="8">
			</div>
			<div class="item">
				<img src="img/slider/9.png" alt="9">
			</div>
			<div class="item">
				<img src="img/slider/10.png" alt="10">
			</div>
			<div class="item">
				<img src="img/slider/11.png" alt="11">
			</div>
		</div>
		<div class="object__info">
			<div class="object__price">Цена стартует от: <span>240 000USD</span></div>
			<div class="btn object__btn">
				<input class="btn" type="submit" value="Узнать про обьект ">
			</div>
			<div class="object__characteristics">
				<div class="characteristic__item">
					<div class="characteristics__name">Район: </div>
					<div class="characteristics__value">North Cyprus</div>
				</div>
				<div class="characteristic__item">
					<div class="characteristics__name">Застройщик: </div>
					<div class="characteristics__value">IDYLL</div>
				</div>
				<div class="characteristic__item">
					<div class="characteristics__name">Срок сдачи: </div>
					<div class="characteristics__value">2026</div>
				</div>
				<div class="characteristic__item">
					<div class="characteristics__name">Общая площадь: </div>
					<div class="characteristics__value">220м2</div>
				</div>
				<div class="characteristic__item">
					<div class="characteristics__name">Площадь участка: </div>
					<div class="characteristics__value">45м2</div>
				</div>
				<div class="characteristic__item">
					<div class="characteristics__name">Количество комнат: </div>
					<div class="characteristics__value">5 комн</div>
				</div>
			</div>
			<div class="object__desc">
				<div class="desc__title">Описание обьекта:</div> 
				<div class="desc__text">
					<span>Продажа</span>2-этажного дома <br>
					Все лестницы в доме выполнены из цельного дерева. Все перила лестницы будут из закаленного стекла. Все ручки для дверей и шкафов изготовлены под торговой маркой. Мебель и осветительная арматура . Светодиодные ыстраемые прожекторы Бренд. Бытовая техника. Кондиционер или аналогичный бренд (инвертор) для каждой комнаты. Идеальная стандартная встроенная техника.
				</div>
			</div>
		</div>
	</div>
</main>
<?php include_once('footer.php') ?>
<script src="js/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="js/slick.min.js"></script>	 
<link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/> 
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script> 
	$(document).ready(function () {
		$(".recomendation__items").slick();

		var gallery_thubn = $(".gallery_thubn");
		var gallery_items = $(".gallery_items");
		gallery_thubn.slick({
			slidesToShow: 1, 
			slidesToScroll: 1,
			
			infinite: true,
			slide: ".item",
			fade: true,
			adaptiveHeight: true,
			pauseOnFocus: true,
			
			centerMode: false,
			variableWidth: false,
			autoplay: false,
			autoplaySpeed: 5000,
			draggable: true,
			arrows: false,
			dots: false,
			asNavFor: ".gallery_items",
		});

		gallery_items.slick({
			slidesToShow: 11,
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
			
			asNavFor: ".gallery_thubn",
		});
	});
</script>