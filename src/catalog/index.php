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

<!-- Header -->
<? include '../components/header/header.php' ?>
<!-- Header end -->

<div class="container godere-container">
	<div class="godere">

		<!-- Breadcrumbs -->
		<? include '../components/breadcrumbs/breadcrumbs.php' ?>
		<!-- Breadcrumbs end -->

		<h2>Каталог товаров</h2>	

		<!-- Catalog -->
		<div class="godere-catalog">
          <? include '../components/filters/filters.php' ?>
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
	<!-- Footer -->
	<? include '../components/footer/footer.php' ?>
	<!-- Footer end -->
</div>

<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/assets/js/main-min.js"></script>
<!-- JavaScript end -->
</body>

</html>