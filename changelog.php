<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>qEssentials</title>

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
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.html"><img src="assets/images/logo.png" alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="index.html">Strona główna</a></li>
					<li><a href="update.html">Aktualizacje</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Więcej <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="api.html">Dokumentacja API</a></li>
							<li><a href="authors.html">Autorzy projektu</a></li>
							<li><a href="cmdperm.html">Komendy i uprawnienia</a></li>
							<li><a href="changelog.html">Lista zmian (changelog)</a></li>
						</ul>
					</li>
					<li><a href="contact.html">Kontakt</a></li>
					<li class="active"><a class="btn" href="signin.html">Zaloguj / zarejestruj</a></li>
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

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
	

	<footer id="footer" class="top-space">

	

		<div class="footer2">
			<div class="container">
				<div class="row">
				

					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="text-right">
								Copyright &copy; 2014, qEssentials Project. Designed by <a href="http://gettemplate.com/" rel="designer">gettemplate</a> 
							</p>
						</div>
					</div>

				</div> <!-- /row of widgets -->
			</div>
		</div>
	</footer>	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>