<?php
require 'config.php';

    if (isset($_GET['action']) && $_GET['action'] == 'deletado') {
        if ($_GET['i'] == 'elogios') {
            $errMsg = "
    			    <div class='form-group'>
						<div class='col-md-6 offset-md-3'>
							<h5 class='text-danger text-center'> Elogio Excluido com Sucesso </h5>
						</div>
					</div>";
        } elseif ($_GET['i'] == 'sugestoes') {
            $errMsg = "
    			    <div class='form-group'>
						<div class='col-md-6 offset-md-3'>
							<h5 class='text-danger text-center'> Sugestão Excluída com Sucesso </h5>
						</div>
					</div>";
        } elseif ($_GET['i'] == 'reclamacoes') {
            $errMsg = "
    			    <div class='form-group'>
						<div class='col-md-6 offset-md-3'>
							<h5 class='text-danger text-center'> Reclamação Excluída com Sucesso </h5>
						</div>
					</div>";
        } elseif ($_GET['i'] == 'denuncias') {
            $errMsg = "
    			    <div class='form-group'>
						<div class='col-md-6 offset-md-3'>
							<h5 class='text-danger text-center'> Denúncia Excluida com Sucesso </h5>
						</div>
					</div>";
        }
    }

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

if ($_GET['i'] == 'elogios') {
    echo "<h1 class='text-center text-dark'>Elogios Cadastrados no Site</h1><br />";
    
    if ($errMsg) {
        echo $errMsg;
    }

    echo   "<br><div class='row d-flex mb-5'>";
    $y = $connect->query("SELECT `cod_elogio`, `titulo`, `apelido`, `elo_cod_usuario` FROM `elogio`, `usuario` WHERE elogio.elo_cod_usuario = usuario.cod_usuario ;");
    while ($linhaelo = $y->fetch(PDO::FETCH_ASSOC)) {
        echo "
            <div class='col-sm-5 mb-5 mx-auto'>                
                <div class='card'>
                    <li class='list-group-item'>Assunto: {$linhaelo['titulo']} </li>
                    <li class='list-group-item'>Autor: {$linhaelo['apelido']}</li>
                    <li class='list-group-item'>
                    <form method='post' action='mostratexto.php?elogio={$linhaelo['cod_elogio']}'>
                    <a href='' class='float-left md-5 '> 
                        <input type='submit' class='float-left md-5 btn btn-link' name='Teste' value='Ler'>
                    </a>    
                    </form>    ";
                //mostratexto.php
if ($linhaelo['elo_cod_usuario'] == $_SESSION['id']) {
        echo "<a href='exclua.php?elogio={$linhaelo['cod_elogio']}' class='float-right md-5 btn'>Excluir</a>";
            
}   

        echo "      </li>     
                </div>
            </div>
            ";
    } 
}elseif ($_GET['i'] == 'sugestoes') {
    echo "<h1 class='text-center text-dark'>Sugestões Cadastradas no Site</h1> <br>";
    
    if($errMsg) {
        echo $errMsg;
    }
    
    echo "<br><div class='row d-flex mb-5'>";
    $y = $connect->query("SELECT `cod_sugestao`, `titulo`, `apelido`, `sug_cod_usuario` FROM `sugestao`, `usuario` WHERE sugestao.sug_cod_usuario = usuario.cod_usuario ;");
    while ($linhasug = $y->fetch(PDO::FETCH_ASSOC)) {
        echo "
            <div class='col-sm-5 mb-5 '>
                <div class='card'>
                    <li class='list-group-item'>Assunto: {$linhasug['titulo']} </li>
                    <li class='list-group-item'>Autor: {$linhasug['apelido']}</li>
                    <li class='list-group-item'>
                    <form method='post' action='mostratexto.php?sugestao={$linhasug['cod_sugestao']}'>
                    <a href='' class='float-left md-5 '> 
                        <input type='submit' class='float-left md-5 btn btn-link' name='Teste' value='Ler'>
                    </a>    
                    </form>    ";
                //mostratexto.php
if ($linhasug['sug_cod_usuario'] == $_SESSION['id']) {
        echo "<a href='exclua.php?sugestao={$linhasug['cod_sugestao']}' class='float-right md-5 btn'>Excluir</a>";
            
}        

        echo "      </li>     
                </div>
            </div>
            ";
    }
}elseif ($_GET['i'] == 'reclamacoes') {
    echo "
        <h1 class='text-center text-dark'>Reclamações Cadastradas no Site</h1> <br>";

    if ($errMsg) {
        echo $errMsg;
    }

    echo "<br><div class='row d-flex mb-5'>";
    $y = $connect->query("SELECT `cod_reclamacao`, `titulo`, `apelido`, `rec_cod_usuario` FROM `reclamacao`, `usuario` WHERE reclamacao.rec_cod_usuario = usuario.cod_usuario ;");
    while ($linharec = $y->fetch(PDO::FETCH_ASSOC)) {
        echo "
            <div class='col-sm-5 mb-5 '>                
                <div class='card'>
                    <li class='list-group-item'>Assunto: {$linharec['titulo']} </li>
                    <li class='list-group-item'>Autor: {$linharec['apelido']}</li>
                    <li class='list-group-item'> 
                    <form method='post' action='mostratexto.php?reclamacao={$linharec['cod_reclamacao']}'>
                    <a href='' class='float-left md-5 '> 
                        <input type='submit' class='float-left md-5 btn btn-link' name='Teste' value='Ler'>
                    </a>    
                    </form>   ";
                //mostratexto.php
if ($linharec['rec_cod_usuario'] == $_SESSION['id']) {
        echo "<a href='exclua.php?reclamacao={$linharec['cod_reclamacao']}' class='float-right md-5 btn'>Excluir</a>";

}
echo "               </li> 
                </div>
            </div>
            ";
    }
}elseif ($_GET['i'] == 'denuncias') {
    echo "
        <h1 class='text-center text-dark'>Denúncias Cadastradas no Site</h1> <br>";

    if ($errMsg) {
        echo $errMsg;
    }

    echo "<br><div class='row d-flex mb-5'>";
    $y = $connect->query("SELECT `cod_denuncia`, `titulo`, `apelido`, `den_cod_usuario` FROM `denuncia`, `usuario` WHERE denuncia.den_cod_usuario = usuario.cod_usuario ;");
    while ($linhaden = $y->fetch(PDO::FETCH_ASSOC)) {
        echo "
            <div class='col-sm-5 mb-5 '>
                <div class='card'>
                    <li class='list-group-item'>Assunto: {$linhaden['titulo']} </li>
                    <li class='list-group-item'>Autor: Anônimo</li>
                    <li class='list-group-item'>
                    <form method='post' action='mostratexto.php?denuncia={$linhaden['cod_denuncia']}'>
                    <a href='' class='float-left md-5 '> 
                        <input type='submit' class='float-left md-5 btn btn-link' name='Teste' value='Ler'>
                    </a>    
                    </form>   ";
                //mostratexto.php
if ($linhaden['den_cod_usuario'] == $_SESSION['id']) {
        echo "<a href='exclua.php?denuncia={$linhaden['cod_denuncia']}' class='float-right md-5 btn'>Excluir</a>";

}
echo "              </li>
                </div>
            </div>
            ";
    }
}
 

?>			
        </div>

    <form class="mx_auto" action="informacao.php" >
        <div class="mx_auto">
            <input type="submit" value="Voltar" class="submit btn btn-primary">
        </div>
    </form>
<br><br>
    </div>
</div>
<?php include 'rodape.php'; ?>     
</body>
</html>