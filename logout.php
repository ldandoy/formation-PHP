<?php
	session_name('Private');
	session_start();

	$_SESSION = array();

	unset($_SESSION);

	session_destroy();

	header("Location: login.php");
?>