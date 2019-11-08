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
     
 <?php

if (1 == 1) {
    echo "<h1 class='text-center text-dark'>Elogios Cadastrados no Site</h1><br />";

if ($_GET['action'] == 'deletado') {
    echo "<h5 class='text-danger text-center'>Elogio Apagado com Sucesso</h5>";
}
    echo   "<div class='row d-flex mb-5'>";
    $y = $connect->query("SELECT `cod_elogio`, `titulo`, `apelido`, `elo_cod_usuario` FROM `elogio`, `usuario` WHERE elogio.elo_cod_usuario = usuario.cod_usuario ;");
    while ($linhaelo = $y->fetch(PDO::FETCH_ASSOC)) {
        echo "
            <div class='col-sm-5 mb-5 mx-auto'>                
                <div class='card'>
                    <li class='list-group-item'>Assunto: {$linhaelo['titulo']} </li>
                    <li class='list-group-item'>Autor: {$linhaelo['apelido']}</li>
                    <li class='list-group-item'>
                    <form method='post' action='mostratexto.php'
                    <a href='' class='float-left md-5 '> 
                        <input type='submit' class='float-left md-5 btn btn-link' name='Teste' value='Ler'>
                    </a>    
                    </form>    ";
                //mostratexto.php
if ($linhaelo['elo_cod_usuario'] == $_SESSION['id']) {
        echo "          <a href='exclua.php?elogio={$linhaelo['cod_elogio']}' class='float-right md-5 btn'>Excluir</a>";
            
}            // ?elogio={$linhaelo['cod_elogio']}'        

        echo "      </li>     
                </div>
            </div>
            ";
    } 
}elseif (condition) {
    echo "
        <h1 class='text-center text-dark'>Sugestões Cadastradas no Site</h1>
        <div class='row d-flex justfy-content-center mb-5'>

        ";
    $y = $connect->query("SELECT `cod_sugestao`, `titulo`, `apelido` FROM `sugestao`, `usuario` WHERE sugestao.sug_cod_usuario = usuario.cod_usuario ;");
    while ($linhasug = $y->fetch(PDO::FETCH_ASSOC)) {
        echo "
            <div class='col-sm-5 mb-5 '>
                <div class='card'>
                    <li class='list-group-item'>Assunto: {$linhasug['titulo']} </li>
                    <li class='list-group-item'>Autor: {$linhasug['apelido']}</li>
                    <li class='list-group-item'></li> 
                </div>
            </div>
            ";
    }
}elseif (condition) {
    echo "
        <h1 class='text-center text-dark'>Reclamações Cadastradas no Site</h1>
        <div class='row d-flex justfy-content-center mb-5'>

        ";
    $y = $connect->query("SELECT `cod_reclamacao`, `titulo`, `apelido` FROM `reclamacao`, `usuario` WHERE reclamacao.rec_cod_usuario = usuario.cod_usuario ;");
    while ($linhasug = $y->fetch(PDO::FETCH_ASSOC)) {
        echo "
            <div class='col-sm-5 mb-5 '>                
                <div class='card'>
                    <li class='list-group-item'>Assunto: {$linhasug['titulo']} </li>
                    <li class='list-group-item'>Autor: {$linhasug['apelido']}</li>
                    <li class='list-group-item'></li> 
                </div>
            </div>
            ";
    }
}elseif (condition) {
    echo "
        <h1 class='text-center text-dark'>Denúncias Cadastradas no Site</h1>
        <div class='row d-flex justfy-content-center mb-5'>

        ";
    $y = $connect->query("SELECT `cod_denuncia`, `titulo`, `apelido` FROM `denuncia`, `usuario` WHERE denuncia.den_cod_usuario = usuario.cod_usuario ;");
    while ($linhasug = $y->fetch(PDO::FETCH_ASSOC)) {
        echo "
            <div class='col-sm-5 mb-5 '>
                <div class='card'>
                    <li class='list-group-item'>Assunto: {$linhasug['titulo']} </li>
                    <li class='list-group-item'>Autor: Anônimo</li>
                    <li class='list-group-item'></li> 
                </div>
            </div>
            ";
    }
}
 

?>			
        </div>
    </div>
</div>

</body>
</html>

