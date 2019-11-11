<?php
require 'config.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ouvindo Você!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body class="bg-light">

<?php include 'menu.php'; ?>	

<br><br><br>

<div class="container">
    <?php

        $y = $connect->query("SELECT `cod_elogio`, `titulo`, `texto_elogio` FROM `elogio` WHERE elogio.cod_elogio = ".$_GET['elogio'].";");
        $linhaelo = $y->fetch(PDO::FETCH_ASSOC);
        echo "<h1 class='text-center text-dark'>{$linhaelo['titulo']}</h1><br />";
        echo "<br /><br />";
        echo "<p>{$linhaelo['texto_elogio']}</p>";
        echo "<br /><br />";
   ?>

</div>
<?php include 'rodape.php'; ?>     
</body>
</html>