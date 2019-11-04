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

	<div id="showuser" class="row">

        <div class="col-sm-4 mb-5">

 <?php   
            
    $elogio = $connect->query("SELECT `elogio`.`elo_cod_usuario`, `usuario`.`apelido`, `usuario`.`cod_usuario` FROM `usuario` INNER JOIN `usuario` ON `elogio`.`elo_cod_usuario`=`elogio`.`elo_cod_usuario`");
    //Nessa query sera buscado tudo na tabela usuario que tenham um ID igual a um elo_cod_usuario da tabela elogio
            
    $buscar->execute($elogio); // Executa a busca
//     \/ Retorna o resultado como array associativo \/
    while ($linha = $buscar->fetchAll(PDO::FETCH_ASSOC)){ // Inicia o loop para pegar todos os dados
    echo " {$resultado['elo_cod_usuario']} ";
    echo " {$resultado['titulo']} ";
    echo " {$resultado['apelido']} ";        
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
*/

         
?>            <li class="list-group-item">Quem Escreveu: <?= $line['apelido']; ?> </li> 
              <li class="list-group-item">Assunto: <?= $line['titulo']; ?> </li> <?php      
             
     
/*      $x = $connect->query("SELECT x, y FROM z;");
        while ($linha = $x->fetch(PDO::FETCH_ASSOC)) {
            echo "x: {$linha['x']} - y: {$linha['y']}<br />";
        }                      
        // echo "<li class="."list-group-item".">Assunto:  {$linhaelo['titulo']}</li>";           
        // {$linha['cod_elogio']} - {$linha['texto_elogio']} -  - {$linha['elo_cod_usuario']}<br />"; */ 
?>
        			
        </div>
    </div>

</div>

</body>
</html>

