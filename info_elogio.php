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

	<div id="showuser" class="row ">

       
 <?php

 echo "<br /> <br /> <br /> ";
 $y = $connect->query("SELECT `cod_elogio`, `titulo`, `apelido` FROM `elogio`, `usuario` WHERE elogio.elo_cod_usuario = usuario.cod_usuario ;");
 while ($linhaelo = $y->fetch(PDO::FETCH_ASSOC)) {
     echo "
        <div class='col-sm-5 mb-5'>
            
            <div class='card'>
                <li class='list-group-item'>Assunto: {$linhaelo['titulo']} </li>
                <li class='list-group-item'>Autor: {$linhaelo['apelido']}</li>
                <li class='list-group-item'</li> 
            </div>

        </div>

        ";
 }

    
/*    while($line = $elogio->fetch(PDO::FETCH_ASSOC)){
            echo "Elogio: {$line['titulo']} - Criador: {$line['apelido']}";
                $codelo = $line['cod_elogio'];
                $tituloelo = $linhaelo['titulo'];
                $elousercod = $linhaelo['elo_cod_usuario'];  
                print_r($codelo."\n".$elousercod."\n".$tituloelo);
                echo "<br /><br />";
            }
            echo "<br /><br /><br />";


         
?>             <?php      
             
 */
/*
  $elogio = $connect->query("SELECT marido.nome AS Marido, esposa.nome AS Esposa FROM marido INNER JOIN esposa ON marido.PK = esposa.FK");
    //Nessa query sera buscado tudo na tabela usuario que tenham um ID igual a um elo_cod_usuario da tabela elogio
    $elogio->execute(); // Executa a busca
//     \/ Retorna o resultado como array associativo \/
    while ($resultado = $elogio->fetchAll(PDO::FETCH_ASSOC)){ // Inicia o loop para pegar todos os dados
    echo " {$resultado['elo_cod_usuario']} ";
    echo " {$resultado['titulo']} ";
    echo " {$resultado['apelido']} ";
    }


        // echo "<li class="."list-group-item".">Assunto:  {$linhaelo['titulo']}</li>";           
        // {$linha['cod_elogio']} - {$linha['texto_elogio']} -  - {$linha['elo_cod_usuario']}<br />"; */ 
?>			
        </div>
    </div>

</div>

</body>
</html>

