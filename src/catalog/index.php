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
  <link rel="stylesheet" href="/assets/styles/nouislider.min.css">
	<link rel="stylesheet" href="/assets/styles/main-min.css">
  
</head>
<body>

<div class="godere-container">
  <!-- Godere -->
	<div class="godere">
    <!-- Header -->
    <? include '../components/header/header.php' ?>
    <!-- Header end -->

		<!-- Breadcrumbs -->
		<? include '../components/breadcrumbs/breadcrumbs.php' ?>
		<!-- Breadcrumbs end -->

		<h2>Каталог товаров</h2>	

		<!-- Catalog -->
		<div class="godere-catalog">
        <div class='godere-filters'>
          <div class='godere-filters__title'>Цена</div>
          <div class="godere-filters__price">
            <input type="number" min="0" max="10000" step="1" id="priceMin">
            <input type="number" min="0" max="10000" step="1" id="priceMax">
          </div>
          <div class="godere-filters__slider" id='priceSlider'></div>
          <div class='godere-filters__title'>Бренд</div>
          <div class="godere-filters__brand">
            <input type="text">
            <div class="godere-filters__checkbox">
              <input type="checkbox" id="brand1" />
              <label for="brand1">Anytime</label>
            </div>
            <div class="godere-filters__checkbox">
              <input type="checkbox" id="brand2" />
              <label for="brand2">Fun Factory</label>
            </div>
          </div>
          
          <div class='godere-filters__title'>Зарядное устройство</div>
          <div class="godere-filters__checkbox">
              <input type="checkbox" id="charge" />
              <label for="charge">Зарядное устройство</label>
            </div>
        </div>
          <div class="godere-catalog__content">
            <div class="godere-catalog__select">
              <select name="" id="">
                <option>Дешевые сверху</option>
                <option>Дорогие сверху</option>
              </select>
            </div>

			<div class="godere-catalog__list">
				<? include '../components/item/item.php' ?>
				<? include '../components/item/item.php' ?>
				<? include '../components/item/item.php' ?>
			</div>
			<div class="godere-catalog__list">
				<? include '../components/item/item.php' ?>
				<? include '../components/item/item.php' ?>
				<? include '../components/item/item.php' ?>
			</div>

          <? include '../components/list/list.php' ?>
          <? include '../components/list/list.php' ?>
        </div>
    </div>
		<!-- Catalog end -->
	</div>
  <!-- Godere -->

	<!-- Footer -->
	<? include '../components/footer/footer.php' ?>
	<!-- Footer end -->
</div>

<? include '../components/preview/preview.php' ?>

<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/assets/js/main-min.js"></script>

<script>

</script>
<!-- JavaScript end -->
</body>

</html>