<!doctype html>
<html lang="RU">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="robots" content="index, follow" />
	<meta name="Project name" content="#ffffff">
	<meta name="description" content="">
	<meta name="keywords" content="">
	<!-- Fav -->
	<!-- Fav end -->
	<title>Godere - главная</title>
	<link rel="stylesheet" href="/assets/styles/main-min.css">
</head>
<body>


<? $HEADER_INVERT = true ?>
<? $HEADER_ABSOLUTE = true ?>

<div class="godere-container">
	<!-- Godere -->
	<div class="godere">
		<? include 'components/header/header.php' ?>

		<!-- Top -->
		<div class="godere-top">
			<img src="/src/assets/img/main.png" alt="">
			<div class="godere-top__txt">
				<div class="godere-top__title">TIGER - BLACK LINE</div>
				<div class="godere-top__description">ТИГР подкрадывается тихо, но стремительно. 
				И на этот раз в притягивающем темно-черном цвете. TIGER - BLACK LINE соблазняет 
				на первый взгляд и манит своими интенсивными низкочастотными вибрациями, 
				откройте для себя ночи, полные желания и страсти.
				</div>
			</div>
		</div>
		<!-- Top end-->

		<!-- Tabs -->
		<h2>Каталог товаров</h2>

		<div class='godere-tabs'>
			<div class="godere-tabs__item godere-tabs__item_active">Все категории</div>
			<div class="godere-tabs__item">Вибраторы</div>
			<div class="godere-tabs__item">Пульсаторы</div>
			<div class="godere-tabs__item">Дилдо</div>
		</div>
		<!-- End Tabs -->

		<div class="godere-list">
			<? include 'components/item/item.php' ?>
			<? include 'components/item/item.php' ?>
			<? include 'components/item/item.php' ?>
			<? include 'components/item/item.php' ?>
		</div> 

		<h2>Хиты продаж</h2>

		<div class="godere-list">
			<? include 'components/item/item.php' ?>
			<? include 'components/item/item.php' ?>
			<? include 'components/item/item.php' ?>
			<img class="godere-banner" src="/src/assets/img/banner.png" alt="">
		</div> 

		<h2>Наши партнеры</h2>
		<!-- Partners -->
		<div class='godere-partners'>
			<a href='#' class="godere-partners__item">
				<img class="godere-partners__img" src="/src/assets/img/partner1.png" alt="Logo">  
			</a>
			<a href='#' class="godere-partners__item">
				<img class="godere-partners__img" src="/src/assets/img/partner2.png" alt="Logo">  
			</a>
			<a href='#' class="godere-partners__item">
				<img class="godere-partners__img" src="/src/assets/img/partner3.png" alt="Logo">  
			</a>
		</div>
		<!-- End Partners -->
	</div>
	<!-- End Godere -->

	<? include 'components/footer/footer.php' ?>

</div>

<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/assets/js/main-min.js"></script>
<!-- JavaScript end -->
</body>

</html>