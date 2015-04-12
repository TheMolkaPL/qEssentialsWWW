<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Strona główna - qEssentials</title>

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

<body class="home">
	<?php
	include('./assets/navbar.php');
	?>

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead">qEssentials Project</h1>
				<b><p class="tagline">Jesteśmy dwuosobową grupą tworzącą jeden z najbardziej rozwijających się projektów na polskiej scenie bukkita! 
				Czy szukałeś systemu narzędzi, komend i funkcji? Dobrze trafiłeś! qEssentials jest właśnie dla Ciebie! </p></b>
				<p><a class="btn btn-default btn-lg" role="button" href="cmdperm.html">UPRAWNIENIA/KOMENDY</a> <a class="btn btn-action btn-lg" role="button" href="/qEssentials/download/lastUpdate/qEssentials.jar">POBIERZ NAJNOWSZY UPDATE</a></p>
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Po co powstała ta strona?</h2>
		<p class="text-muted">
			Cięzko jest tworzyć coś wielkiego, bez dobrej dokumentacji, zbiorze aktualizacji i list zmian.<br> 
			Stworzyliśmy więc stronę, na której jest wszystko co potrzebne do używania pluginu <b>qEssentials</b>!
		</p>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	<div class="jumbotron top-space">
		<div class="container">
			
			<h3 class="text-center thin">Powody, dla których warto użyć qEssentials</h3>
			
			<div class="row">
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-cogs fa-5"></i>Optymalność</h4></div>
					<div class="h-body text-center">
						<p>Plugin jest bardzo dobrze zoptymalizowany*, wytrzyma natłok graczy, i jest odporny na 'głupotę użytkownika' czyli robieniu czegoś co jest niezgodne z zasadami optymalizacji.</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-flash fa-5"></i>Potencjał i zaangażowanie</h4></div>
					<div class="h-body text-center">
						<p>Nasza grupa zajmująca się projektem, jest bardzo zaangażowana i cały czas ma nowe pomysły, by ulepszać projekt. To gwarantuje wytrzymałość i stabilność projektu!</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-heart fa-5"></i>Przyjazne użytkownikowi</h4></div>
					<div class="h-body text-center">
						<p>Cały system został stworzony w taki sposób, aby nawet mało znający się na tym użytkownik/admin mógł sobie z nim poradzić. To nas wyróżnia w ogromie takich pluginów!</p>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 highlight">
					<div class="h-caption"><h4><i class="fa fa-smile-o fa-5"></i>Dostępność, i łatwy kontakt</h4></div>
					<div class="h-body text-center">
						<p>Znalazłeś błąd, lub masz propozycje? Nie musisz stać w kolejce, i czekać na odpowiedź. Nasza ekipa jest bardzo otwarta na kontakt z użytkownikami, i każdemu pomoże, lub zatwierdzi jakiś fajny pomysł! Kontakt z nami jest naprawdę bardzo prosty i przyjemny!</p>
					</div>
				</div>
				<center><small>* - Aktualna wersja jest w stanie <b>DEV</b> czyli <b>Development State</b>, nie możemy zagwarantować tego w obecnym statusie prac!</small></center>
			</div> <!-- /row  -->
		
		</div>
	</div>
	<!-- /Highlights -->

	<!-- container -->
	<div class="container">

		<h2 class="text-center top-space">Najczęściej zadawane pytania (FAQ)</h2>
		<br>

		<div class="row">
			<div class="col-sm-6">
				<h3>Czy używanie pluginu w obecnym statusie prac (DEV) jest bezpieczne?</h3>
				<p>Tak, zdecydowanie nie ma większych problemów ze stabilnością i problemami. Nie możemy jednak zagwarantować że plugin będzie działał poprawnie w ekstremalnych warunkach w obecnym statusie prac.</p>
			</div>
			<div class="col-sm-6">
				<h3>Gdzie mogę pobrać, lub obserwować projekt? Np. source-code?</h3>
				<p>
					Plugin możesz pobrać z zakładki <a href="update.html">aktualizacje</a>, a source-code jest dostepny na <a href="http://github.com/xVacuum/qEssentials">github.com</a></p>
			</div>
		</div> <!-- /row -->

		<div class="row">
			<div class="col-sm-6">
				<h3>Czy mogę edytować kod na potrzebe własnych zmian?</h3>
				<p>
					Tak, możesz. Pamiętaj tylko aby stosować się do zasad open-src, czyli musi być dobrze widoczna adnotacja do strony projektu, i nazwa głównych autorów i testerów pluginu.
				</p>
			</div>
			<div class="col-sm-6">
				<h3>Kiedy będzie możliwość zmiany tekstu? Np. system locale? I kiedy będzie MySQL?</h3>
				<p>System lokalnych wiadomości będzie już niedługo, wystarczy czekać. Co do MySQL, jest on już praktycznie skończony, w aktualizacji 0.5-DEV już prawdopodobnie będzie ukończony!</p>
			</div>
		</div> <!-- /row -->

</div>	<!-- /container -->
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>

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