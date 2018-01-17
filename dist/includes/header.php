<?php 

	// generate array with all list items
	$arrUserMenu = array(
		'watchlist' => 'index.php?page=mywatchlist',
		'profile' => 'index.php?page=profile',
		'logout' => 'index.php?page=logout'
	);

	$arrNotLoggedInMenu = array(
		'register' => 'index.php?page=register',
		'login' => 'index.php?page=login',
	);

	$arrNav = array(
		'home' => 'index.php?page=home',
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

	//$isLoggedIn = false;

	var_dump($_SERVER['HTTP_REFERER']);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
	<meta http-equiv="Cache-control" content="public">
	<meta name="description" content="Landoretti">
	<meta name="keywords" content="Landoretti, HTML, CSS">
  	<meta name="author" content="Yawuar Serna Delgado">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Landoretti</title>
	
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="57x57" href="favicons/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="favicons/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="favicons/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="favicons/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="favicons/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="favicons/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="favicons/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="favicons/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="favicons/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="favicons/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="favicons/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicons/favicon-16x16.png">
	<link rel="manifest" href="favicons/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="favicons/ms-icon-144x144.png">
	<meta name="theme-color" content="#ffffff">

	<!-- Css files -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/nice-select.css">
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
					
					<ul class="nav navbar-nav login">

						<?php if($isLoggedIn) { ?>
							<?php foreach($arrUserMenu as $value => $key) { ?>

								<li><a href="<?= $key ?>"><?= $value ?></a></li>

							<?php } ?>
						<?php } ?>
							
						<?php foreach($arrNotLoggedInMenu as $value => $key) { ?>

							<li><a class="<?= $value ?>-btn" href="<?= $key ?>"><?= $value ?></a></li>

						<?php } ?>

					</ul>

					<ul class="nav navbar-nav loggedIn">

						<?php foreach($arrUserMenu as $value => $key) { ?>

							<li><a href="<?= $key ?>"><?= $value ?></a></li>

						<?php } ?>

					</ul>

					<ul class="nav navbar-nav loginForm">

						<li><a href="index.php?page=register">register</a></li>
						<form class="login-form" action="">
							<div class="user">
								<input type="text" class="form-control <?php echo ($errors['user']) ? 'error' : '' ?>" name="user" id="user" placeholder="User">
							</div>
							<div class="password">
								<input type="password" class="form-control <?php echo ($errors['password']) ? 'error' : '' ?>" name="password" id="password" placeholder="Password">
							</div>
							<div class="submit">
								<input type="submit" value=">">
							</div>
						</form>

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