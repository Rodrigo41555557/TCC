<?php
	ob_start();
	session_start();

	// Definições da base de dados
	define('dbhost', 'localhost');
	define('dbuser', 'aluno');
	define('dbpass', 'aluno');
	define('dbname', 'bd_ouvidoria_3info2');

	// Conectando a base de dados (MySQL)
	try {
		$connect = new PDO("mysql:host=".dbhost."; dbname=".dbname, dbuser, dbpass);
		$connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	catch(PDOException $e) {
		echo $e->getMessage();
	}

	if((isset ($_SESSION['login']) == true) and (isset ($_SESSION['senha']) == true))
	{
  		$logado = $_SESSION['login'];
  	}
?>
