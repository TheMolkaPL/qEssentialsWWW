<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>qEssentials</title>

	<link rel="shortcut icon" href="http://xvacuum.za.pl/qEssentials/assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="http://xvacuum.za.pl/qEssentials/assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://xvacuum.za.pl/qEssentials/assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="http://xvacuum.za.pl/qEssentials/assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="http://xvacuum.za.pl/qEssentials/assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body>
	<?php
	include('./assets/navbar.php');
	?>

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.html">Strona główna</a></li>
			<li class="active">Dokumentacja API</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">API</h1>
				</header>
				<h2>QEssentialsAPI.getChatStatus();</h2>
				<h5>Zwraca wartość czatu. true - włączony, false - wyłączony</h5><br><br>
				
				<h2>QEssentialsAPI.setChatStatus(boolean mode);</h2>
				<h5>Zmienia wartość czatu. true - włączony, false - wyłączony</h5><br><br>
				
				<h2>QEssentialsAPI.getServerMotd();</h2>
				<h5>Zwraca wartość aktualnego motd.</h5><br><br>
				
				<h2>QEssentialsAPI.setHEX(String text);</h2>
				<h5>Ustawia wybrany tekst, aby w nim można było pisać zwykłymi kolorami do minecraft, a nie paragrafem.</h5><br><br>
				
				<h2>QEssentialsAPI.isInteger(String text);</h2>
				<h5>Zwraca wartość boolean, czy wybrany tekst jest liczbą, czy zawiera znaki. Przydaje się do sprawdzania listy pomocy w komendach.</h5><br><br>
				
				<h2>QEssentialsAPI.getRandomInt(int min, int max);</h2>
				<h5>Zwraca losową liczbe od minimalnej, do maksymalnej.</h5><br><br>
				
				<h2>QEssentialsAPI.getEnchantmentList();</h2>
				<h5>Zwraca listę enchantów słownych. Czyli można robić własne struktury enchantu (np. add("sharpnesslol", Enchantment.SHARPNESS);)</h5><br><br>
				
				<h2>QEssentialsAPI.getLastLocation(Player player);</h2>
				<h5>Zwraca ostatnie położenie gracza, przed jakmikolwiek teleportem!</h5><br><br>
				
				<h2>QEssentialsAPI.setLastLocation(Player player, Location location);</h2>
				<h5>Ustawia ostatnie miejsce gracza, przydaje się gdy robimy własne komendy teleportu, i chcemy aby /back również je obejmował.</h5><br><br>
				
				
				
			</article>
			<!-- /Article -->
			

		</div>
	</div>	<!-- /container -->
	



	

		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>