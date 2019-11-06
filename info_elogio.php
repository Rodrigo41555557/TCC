<?php
require 'config.php';

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

		<h1 class="text-center text-dark">Elogios Cadastrados no Site</h1>

	<div class="row d-flex justfy-content-center">
       
 <?php

 echo "<br /> <br /> <br /> ";
 $y = $connect->query("SELECT `cod_elogio`, `titulo`, `apelido` FROM `elogio`, `usuario` WHERE elogio.elo_cod_usuario = usuario.cod_usuario ;");
 while ($linhaelo = $y->fetch(PDO::FETCH_ASSOC)) {
     echo "
        <div class='col-sm-5 mb-5 '>
            
            <div class='card'>
                <li class='list-group-item'>Assunto: {$linhaelo['titulo']} </li>
                <li class='list-group-item'>Autor: {$linhaelo['apelido']}</li>
                <li class='list-group-item'></li> 
            </div>

        </div>

        ";
 }

?>			
        </div>
    </div>
</div>

</body>
</html>

