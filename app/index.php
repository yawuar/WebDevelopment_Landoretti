<?php 

	$page = basename($_SERVER['PHP_SELF']); 

	include('includes/header.php');

	include('pages/' . $page);

	include('includes/footer.php');

?>