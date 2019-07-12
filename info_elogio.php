<?php 
    require 'config.php';

    if ($db->getAttribute(PDO::ATTR_DRIVER_NAME) == 'mysql') {
    	$stmt = $db->prepare('select * from elogio', array(PDO::MYSQL_ATTR_USE_BUFFERED_QUERY => true));
	} else {
    	die("my application only works with mysql; I should use \$stmt->fetchAll() instead");
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ouvindo Você!</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body class="bg-light">

<?php require_once 'menu.php'; ?>

	<div class="container bg-light">
		
	</div>

</body>
</html>