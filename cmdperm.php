<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Lista komend oraz uprawnień - qEssentials</title>

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
			<li class="active">Komendy</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-sm-8 maincontent">
				<header class="page-header">
					<h1 class="page-title">Komendy oraz ich uprawnienia</h1>
				</header>

				<table class="table table-bordered">
					<tr>
						<th>Komenda</th>
						<th>Opis</th>
						<th>Uprawnienie</th>
					</tr>

					<?php
					require_once('./assets/classes/Command.php');
					$commands = array(
							new Command("adminchat", "Chat dla administracji"),
							new Command("back", "Powrót od poprzedniej lokacji"),
							new Command("broadcast", "Wykonaj wiadomość-ogłoszenie na serwerze"),
							new Command("changelore", "Zmień opis"),
							new Command("changename", "TODO"),
							new Command("chat", "TODO"),
							new Command("clear", "TOOD"),
							new Command("enchant", "TODO"),
							new Command("fly", "TOOD"),
							new Command("gm", "TODO"),
							new Command("gc", "TODO"),
							new Command("head", "TOOD"),
							new Command("heal", "TOOD"),
							new Command("help", "TOOD"),
							new Command("helpop", "TODO", "qessentials.helpop.see"),
							new Command("home", "TOOD"),
							new Command("info", "TOOD"),
							new Command("invsee", "TODO"),
							new Command("msg", "TODO"),
							new Command("motdset", "TODO"),
							new Command("nick", "TODO"),
							new Command("list", "TODO"),
							new Command("qreload", "TODO"),
							new Command("r", "TODO"),
							new Command("sethome", "TODO"),
							new Command("setspawn", "TODO"),
							new Command("spawn", "TODO"),
							new Command("tp", "TODO"),
							new Command("time", "TODO"),
							new Command("tppos", "TODO"),
							new Command("weather", "TODO"),
							new Command("whois", "TODO"),
							new Command("world", "TODO"),
					);

					foreach ($commands as $command) {
						echo('<tr><td><h5>/' . $command->getCommand() . '</h5></td>');
						echo('<td><h5><i>' . $command->getDescription() . '</i></h5></td>');
						echo('<td><h5>' . $command->getPermission() . '</h5></td></tr>');
					}
					?>
				</table>

				<header class="page-header">
					<h1 class="page-title">Dodatkowe uprawnienia</h1>
				</header>

				<h5>qessentials.sign.color</h5>
				<h5>qessentials.chat.color</h5>
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