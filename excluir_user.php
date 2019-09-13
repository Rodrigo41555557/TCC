 <?php
require 'config.php';
	if($errMsg == ''){
			try {
				$sql = "DELETE FROM `usuario` WHERE `usuario`.`cod_usuario` = $_SESSION['id']";
				header('Location: elogio.php?action=enviou');
					;
				}
				catch(PDOException $e) {
					echo $e->getMessage();
				}
			}
	
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sistema de ouvidoria do lorem ipsum</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body class="bg-light">

<?php require_once 'menu.php'; ?>	
<br><br><br>

</body>
</html>