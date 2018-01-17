<?php 

	include('includes/header.php');

	if(isset($_GET['page'])) {
		include('pages/' . $_GET['page'] . '.php');
	}

	if(!isset($_GET['page'])) {
		include('pages/home.php');
	}

	include('includes/footer.php');

?>