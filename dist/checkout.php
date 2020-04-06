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
<div class="container godere-container">
	<div class="godere">
		<!-- Header -->
		<? include 'components/header/header.php' ?>
		<!-- Header end -->

		<!-- Breadcrumbs -->
		<? include 'components/breadcrumbs/breadcrumbs.php' ?>
		<!-- Breadcrumbs end -->

		<h2>Корзина</h2>
		<!-- Checkout -->
		<div class="godere-checkout">
			
			<div class="godere-checkout__content">
				<div class="godere-checkout__item">
					<div class="godere-checkout__title">Контактная информация</div>
					<input type="text"><input type="text">
				</div>
				<div class="godere-checkout__item">
					<div class="godere-checkout__title">Время доставки</div>
					<select name="" id=""></select>
				</div>
				<div class="godere-checkout__item">
					<div class="godere-checkout__title">Адрес</div>
					<input type="text"><br>
					<input type="text"><input type="text"><br>
					<input type="text"><input type="text"><br>
					<textarea name="" id="" cols="30" rows="10"></textarea>
				</div>
				<div class="godere-checkout__item">
					<div class="godere-checkout__title">Способ оплаты</div>
					<input type="radio">Наличными курьеру
					<input type="radio">Картой
				</div>
			</div>
			<? include 'components/form/form.php' ?>
		</div>
		<!-- Checkout end -->
	<!-- Footer -->
	<? include 'components/footer/footer.php' ?>
	<!-- Footer end -->
</div>


<!-- JavaScript -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="/assets/js/main-min.js"></script>
<!-- JavaScript end -->
</body>

</html>