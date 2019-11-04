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
            
            $user = $connect->query("SELECT cod_usuario, apelido FROM `usuario`");
            

            $elogio = $connect->query("SELECT cod_elogio, titulo, elo_cod_usuario FROM `elogio`");
            
            while($linhaelo = $elogio->fetch(PDO::FETCH_ASSOC)){
                $codelo = $linhaelo['cod_elogio'];
                $tituloelo = $linhaelo['titulo'];
                $elousercod = $linhaelo['elo_cod_usuario'];  
                print_r($codelo."\n".$elousercod."\n".$tituloelo);
                echo "<br /><br />";
            }
            echo "<br /><br /><br />";

            while($linhauser = $user->fetch(PDO::FETCH_ASSOC)){
                $coduser = $linhauser['cod_usuario'];
                
                $nameuser = $linhauser['apelido'];      
                print_r($coduser."\n".$nameuser);
                
                echo "<br /><br />";
            }          
            
         
?>            <li class="list-group-item">Quem Escreveu: <?= $linhauser['apelido']; ?> </li> 
              <li class="list-group-item">Assunto: <?= $linhauser['titulo']; ?> </li> <?php      
             
     
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

