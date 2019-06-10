<?php
	require 'config.php';

	$stmt = $connect->prepare('SELECT cod_usuario, nome_completo, apelido, senha FROM usuario');
	$data = $stmt->fetch(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Ouvindo Você!</title>
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