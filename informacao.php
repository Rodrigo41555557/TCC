<?php
error_reporting(0);
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

<?php require_once 'menu.php'; ?>

<br><br><br>

<div class="container bg-light"> 

	<div class="form-group row d-flex justify-content-center">
        <div class="col-md-2">
	        <h3 class="text-center"> Informe-se </h3>
	    </div>
    </div>

        <div id="info" class="row">

        <div class="form-group row d-flex mx-auto">

            <div id="info_elogio" class="col-sm-3 mb-1">
                <div  class="card">
                    <a href="info.php?i=elogios"><img class="card-img elemento" src="img/elogio.jpg" height="150px"></a>
                </div>
                <div class="titulo">
                    Elogios <br> Cadastrados
                </div>
            </div>

            <div id="info_sugestao" class="col-sm-3 mb-1">
                <div  class="card">
                    <a href="info.php?i=sugestoes"><img class="card-img elemento" src="img/sugestao.jpg" height="150px" ></a>
                </div>
                <div class="titulo">
                    Sugestões <br> Cadastradas
                </div>
            </div>

            <div id="info_reclamacao" class="col-sm-3 mb-1">
                <div  class="card">
                    <a href="info.php?i=reclamacoes"><img class="card-img elemento" src="img/reclamacao.jpg" height="150px" ></a>
                </div>
                <div class="titulo">
                    Reclamações <br> Cadastradas
                </div>
            </div>

            <div id="info_denuncia" class="col-sm-3 mb-1">
                <div  class="card">
                    <a href="info.php?i=denuncias"><img class="card-img elemento" src="img/denuncia.jpg" height="150px" ></a>
                </div>
                <div class="titulo">
                    Denúncias <br> Cadastradas
                </div>
            </div>



        </div>


            
</div>
    <br><br>
    <form class="mx_auto" action="index.php" >
        <div class="mx_auto">
            <input type="submit" value="Voltar" class="submit btn btn-primary">
        </div>
    </form>
    <br><br>
</div>

<?php include 'rodape.php'; ?>
</body>
</html>
