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
    <link rel="stylesheet" href="css/estilo.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body class="bg-light">

<?php include 'menu.php'; ?>	

<br><br><br>
<div class="container">       
            
        <div id="opcoes" class="row">          
            
        <div class="col-sm-1 mb-1">
                   <article class="bg-dark"></article>
            </div>

            <div class="col-sm-2 mb-3">
                <div  class="card">
                    <a href="elogio.php"><img class="card-img elemento" src="img/elogio.jpg" height="150px"></a>
                </div>
                <div class="titulo">
                    Elogios
                </div>
            </div>

            <div class="col-sm-2 mb-1">
                   <article class="bg-dark"></article>
            </div>

			<div class="col-sm-2 mb-4">
                <div  class="card">
                    <a href="sugestao.php"><img class="card-img elemento" src="img/sugestao.jpg" height="150px" ></a>
                </div>
                <div class="titulo">
                    Sugestões
                </div>
            </div>

            <div class="col-sm-2 mb-1">
                   <article class="bg-dark"></article>
            </div>

            <div class="col-sm-2 mb-4">
                <div  class="card">
                    <a href="reclamacao.php"><img class="card-img elemento " src="img/reclamacao.jpg" height="150px" ></a>
                </div>
                <div class="titulo">
                    Reclamações
                </div>
            </div>

        </div>
        <br>
        <div id="opcoes" class="row">

			<div class="col-sm-3 mb-5">
                   <article class="bg-dark"></article>
            </div>

            <div class="col-sm-2 mb-4">
                <div  class="card">
                    <a href="denuncia.php"><img class="card-img elemento" src="img/denuncia.jpg" height="150px" ></a>
                </div>
                <div class="titulo">
                    Denúncias
                </div>
            </div>

            

            <div class="col-sm-2 mb-5">
                   <article class="bg-dark"></article>
            </div>

            <div class="col-sm-2 mb-4">
                <div  class="card">
                    <a href="informacao.php"><img class="card-img elemento" src="img/informacao.jpg" height="150px" ></a>
                </div>
                <div class="titulo">
                    Informações
                </div>
            </div>            
        
            <div class="col-sm-2 mb-5">
                   <article class="bg-dark"></article>
            </div>
        </div>
<br><br><br>
</div>
<?php include 'rodape.php'; ?>     
</body>
</html>
