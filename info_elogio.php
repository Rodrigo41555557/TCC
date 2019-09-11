<?php
require 'config.php';

	$sql = "SELECT texto_elogio, titulo FROM `elogio`";
	$stmt = $connect->prepare($sql);  
	$stmt->execute(array(
        $_POST['texto_elogio'] = `texto_elogio`,
        $_POST['titulo'] = `titulo`
    ));
	

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

<?php include 'menu.php'; ?>	

<br><br><br>

<div class="container">

		<h1 class="text-center text-dark">Em construção</h1>

	<div id="showuser" class="row">

		
        <div class="col-sm-4 mb-5">
        	<li class="list-group-item">Quem Escreveu: jao</li>

            <li class="list-group-item">Assunto:  <?= $_POST['titulo'] ?></li>
            <li class="list-group-item"><?= $_POST['texto_elogio'] ?></li>

			
        </div>

    </div>

</div>

</body>
</html>

