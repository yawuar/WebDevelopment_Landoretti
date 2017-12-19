<?php 

	// generate array with all list items
	$arrUserMenu = array(
		'watchlist' => 'watchlist.php',
		'profile' => 'profile.php',
		'logout' => 'logout.php'
	);

	$arrNav = array(
		'home' => 'index.php',
		'art' => 'index.php?page=art',
		'isearch' => 'index.php?page=isearch',
		'myauctions' => 'index.php?page=myauctions',
		'mybids' => 'index.php?page=mybids',
		'contact' => 'index.php?page=contact'
	);

	$arrLanguage = array(
		'nl' => '#',
		'fr' => '#',
		'en' => '#'
	);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Landoretti</title>
	
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="/images/favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="/images/favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="/images/favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="/images/favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="/images/favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="/images/favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="/images/favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="/images/favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="/images/favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="/images/favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/images/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/images/favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/images/favicons/favicon-16x16.png">
	<link rel="manifest" href="/images/favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="/images/favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- Css files -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/screen.css">
</head>
<body>

	<nav class="navbar navbar-default">

		<div class="container">
			
			<!-- Logo -->
			<div class="navbar-header">
				
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navigation">
					
					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

					<span class="icon-bar"></span>

				</button>

				<a href="/" class="navbar-brand logo">Landoretti</a>

			</div>

			<!-- Menu Items -->
			<div class="information">
				
				<div class="collapse navbar-collapse navigation">
					
					<ul class="nav navbar-nav">

						<?php foreach($arrUserMenu as $value => $key) { ?>

							<li><a href="<?= $key ?>"><?= $value ?></a></li>

						<?php } ?>

					</ul>

					<form action="#" method="GET" class="navbar-right input-field">
						
						<input type="text" name="search" placeholder="Search">

						<input type="submit" value="search">

					</form>

				</div>

			</div>

		</div>

		<div class="main-navigation">
			
			<div class="container">

				<div class="collapse navbar-collapse navigation">

					<ul class="nav navbar-nav">

						<?php foreach($arrNav as $value => $key) { ?>

							<li><a href="<?= $key ?>"><?= $value ?></a></li>

						<?php } ?>

					</ul>

					<ul class="nav navbar-nav navbar-right language">

						<?php foreach($arrLanguage as $value => $key) { ?>

							<li><a href="<?= $key ?>"><?= $value ?></a></li>

						<?php } ?>

					</ul>

				</div>

			</div>			

		</div>

	</nav><!-- nav ending -->