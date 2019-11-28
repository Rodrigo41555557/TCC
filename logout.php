<?php
error_reporting(0);
	session_start();
	if (isset($_SESSION['login'])) {
		session_destroy();
		header('location:index.php');
		exit;
	}
?>