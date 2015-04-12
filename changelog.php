<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Lista zmian - qEssentials</title>

	<link rel="shortcut icon" href="assets/images/gt_favicon.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

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
			<li class="active">Lista zmian</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">Lista zmian (changelog)</h1>
				</header>
				<center>
				<h2>0.4-DEV</h2>
				<p>
* Komenda /back<br>
* Komenda /head<br>
* Poprawa wielu błędów<br>
* Już system usuwa gracza przy wyrzuceniu z serwera<br>
* Rozpoczęcie prac na kitami <br>
* API<br>
				</p>
				
				
				<br><br><br><br><br>
				
				<h2>0.3-DEV</h2>
				<p>
* Dodanie ClearItems<br>
* Wiadomość nieznanej komendy<br>
* Poprawiono parę bugów<br>
* Dodano komendę /world [swiat]<br>
* Dodano ustawianie w jakim świecie jest spawn<br>
* Uprawnienie qessentials.teleport.bypass które pozwala na natychmiastową teleportacje<br>
* Inne, mniejsze zmiany<br>
				</p>
				<br><br><br><br><br>
				
				<h2>0.2-DEV</h2>
				<p>
* Ogromne zmiany w kodzie<br>
* Komenda /fly (nie testowałem)<br>
* Komenda /invsee<br>
* Kolorowanie tabliczek (qessentials.sign.color)<br>
* AutoMessage (tymczasowy, bo słaby)<br>
* Poprawiono większość błędów<br>
* Zmiana komendy /qinfo (autorzy są wpisani w kod)<br>
* Przygotowania do ClearItems<br>
* Plugin nie wymaga już WorldGuard<br>
* Download już jest aktualny, tamten był bez motd i niektórych funkcji<br>
* Inne, mniejsze zmiany<br>
				</p>
				
				<br><br><br><br><br>
				
				<h2>0.1-DEV</h2>
				<h3 style="color: darkred">Brak danych... :/</h3>
				</center>
			</article>
			<!-- /Article -->
			

		</div>
	</div>	<!-- /container -->

	<?php
	include('./assets/footer.php');
	?>

	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>