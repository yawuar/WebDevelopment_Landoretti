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
		'nl' => 'nl.php',
		'fr' => 'fr.php',
		'en' => 'en.php'
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

	<header>

		<div class="container">
			
			<h1 class="logo">landoretti</h1>

		</div>

		<div class="top-bar"></div>

		<div class="user-bar">

			<div class="container">
				
				<div class="information">
				
					<ul>

						<?php foreach($arrUserMenu as $value => $key) { ?>

							<li><a href="<?= $key ?>"><?= $value ?></a></li>

						<?php } ?>

					</ul>

				</div>

				<div class="searchbar">	
					
					<form action="#" method="GET">
						
						<input type="text" name="search" placeholder="Search">

						<input type="submit" value="search">

					</form>

				</div>

			</div>

		</div>

		<div class="nav-bar">

			<div class="container">
				
				<div class="main-navigation">
				
					<ul>

						<?php foreach($arrNav as $value => $key) { ?>

							<li><a href="<?= $key ?>"><?= $value ?></a></li>

						<?php } ?>

					</ul>

				</div>

				<div class="language-navigation">
					
					<ul>

						<?php foreach($arrLanguage as $value => $key) { ?>

							<li><a href="<?= $key ?>"><?= $value ?></a></li>

						<?php } ?>

					</ul>

				</div>

			</div>

		</div>

	</header> <!-- nav ending -->