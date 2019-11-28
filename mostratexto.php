<?php
error_reporting(0);
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
    if (isset($_GET['elogio'])) {
    
        $y = $connect->query("SELECT `cod_elogio`, `titulo`, `texto_elogio`, `apelido`, `elo_cod_usuario` FROM `elogio`, `usuario` WHERE elogio.cod_elogio = ".$_GET['elogio']." AND elogio.elo_cod_usuario = usuario.cod_usuario;");
        $linhaelo = $y->fetch(PDO::FETCH_ASSOC);
        echo "<h1 class='text-center text-dark'>{$linhaelo['titulo']}</h1><br />";
        echo "<h4 class='text-center text-dark'>Escrito por: {$linhaelo['apelido']}</h4><br />";
        echo "<br /><br />";
        echo "<p>{$linhaelo['texto_elogio']}</p>
<br><br>
              <form method='get' class='mx_auto' action='dir.php'>
                  <div class='mx_auto'>
                      <input type='submit' value='Voltar' name='elogio' class='submit btn btn-primary'>
                  </div>
              </form>";

        echo "<br /><br />";

    }elseif (isset($_GET['sugestao'])) {
        
        $y = $connect->query("SELECT `cod_sugestao`, `titulo`, `texto_sugestao`, `apelido`, `sug_cod_usuario` FROM `sugestao`, `usuario` WHERE sugestao.cod_sugestao = ".$_GET['sugestao']." AND sugestao.sug_cod_usuario = usuario.cod_usuario;");
        $linhasug = $y->fetch(PDO::FETCH_ASSOC);
        echo "<h1 class='text-center text-dark'>{$linhasug['titulo']}</h1><br />";
        echo "<h4 class='text-center text-dark'>Escrito por: {$linhasug['apelido']}</h4><br />";
        echo "<br /><br />";
        echo "<p class='text-center mx-auto'>{$linhasug['texto_sugestao']}</p>
<br><br>
              <form method='get' class='mx_auto' action='dir.php'>
                  <div class='mx_auto'>
                      <input type='submit' value='Voltar' name='sugestao' class='submit btn btn-primary'>
                  </div>
              </form>";
        if (isset($_POST['Voltar'])){
            header('Location: info.php?i=sugestoes');
        }
        echo "<br /><br />";

    }elseif (isset($_GET['reclamacao'])) {

        $y = $connect->query("SELECT `cod_reclamacao`, `titulo`, `texto_reclamacao`, `apelido`, `rec_cod_usuario` FROM `reclamacao`, `usuario` WHERE reclamacao.cod_reclamacao = ".$_GET['reclamacao']." AND reclamacao.rec_cod_usuario = usuario.cod_usuario;");
        $linharec = $y->fetch(PDO::FETCH_ASSOC);
        echo "<h1 class='text-center text-dark'>{$linharec['titulo']}</h1><br />";
        echo "<h4 class='text-center text-dark'>Escrito por: {$linharec['apelido']}</h4><br />";
        echo "<br /><br />";
        echo "<p>{$linharec['texto_reclamacao']}</p>
<br><br>
              <form method='get' class='mx_auto' action='dir.php?c=reclamacao'>
                  <div class='mx_auto'>
                      <input type='submit' value='Voltar' name='reclamacao' class='submit btn btn-primary'>
                  </div>
              </form>";
        if (isset($_POST['Voltar'])){
            header('Location: info.php?i=reclamacoes');
        }
        echo "<br /><br />";

    }elseif (isset($_GET['denuncia'])) {

        $y = $connect->query("SELECT `cod_denuncia`, `titulo`, `texto_denuncia` FROM `denuncia` WHERE denuncia.cod_denuncia = ".$_GET['denuncia'].";");
        $linhaden = $y->fetch(PDO::FETCH_ASSOC);
        echo "<h1 class='text-center text-dark'>{$linhaden['titulo']}</h1><br />";
        echo "<br /><br />";
        echo "<p>{$linhaden['texto_denuncia']}</p>
<br><br>
              <form method='get' class='mx_auto' action='dir.php?c=denuncia'>
                  <div class='mx_auto'>
                      <input type='submit' value='Voltar' name='denuncia' class='submit btn btn-primary'>
                  </div>
              </form>";
        if (isset($_POST['Voltar'])){
            header('Location: info.php?i=denuncias');
        }
        echo "<br /><br />";
    }

   ?>

</div>
<?php include 'rodape.php'; ?>     
</body>
</html>