<?php 

	// generate array with all list items
	$arrUserMenu = array(
		'watchlist' => 'watchlist.php',
		'profile' => 'profile.php',
		'logout' => 'logout.php'
	);

	$arrNav = array(
		'home' => 'home.php',
		'art' => 'art.php',
		'isearch' => 'isearch.php',
		'myauctions' => 'myauctions.php',
		'mybids' => 'mybids.php',
		'contact' => 'contact.php'
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

					<form action="#" method="GET" class="navbar-right">
						
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