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

<?php require_once 'menu.php'; ?>

<div class="container bg-light"> 

	<div class="form-group">
        <div class="col-md-6 offset-md-3">
	        <h3 class="text-center"> Informe-se </h3>
	    </div>
    </div>

<div class="container">            
            
        <div id="info" class="row">        
            
            <div id="info_elogio" class="col-sm-3 mb-4">
                <div  class="card">
                    <a href="elogio.php"><img class="card-img" src="img/elogio.jpg" height="150px"></a>
                </div>
            </div>

            <div id="info_sugestao" class="col-sm-3 mb-4">
                <div  class="card">
                    <a href="sugestao.php"><img class="card-img" src="img/sugestao.png" height="150px" ></a>
                </div>
            </div>
            
            <div id="info_reclamacao" class="col-sm-3 mb-4">
                <div  class="card">
                    <a href="reclamacao.php"><img class="card-img" src="img/reclamacao.jpg" height="150px" ></a>
                </div>
            </div>

            <div id="info_denuncia" class="col-sm-3 mb-4">
                <div  class="card">
                    <a href="denuncia.php"><img class="card-img" src="img/denuncia.jpg" height="150px" ></a>
                </div>
            </div>

        </div>


            
</div>
</div>

    <div id="info" class="row"> 

        <footer id="registros" class="footer bg-primary">   

            <div id="resenha" class="col-sm-3 mb-5">
                <div  class="card">
                    <a href="informacao.php"><img class="card-img" src="img/x.jpg" height="150px" ></a>
                </div>
            </div>


            <div id="resenha" class="col-sm-3 mb-5">
                <div  class="card">
                    <a href="informacao.php"><img class="card-img" src="img/informacao.jpg" height="150px" ></a>
                </div>
            </div>

        

        </footer>

    </div>
</body>
</html>
