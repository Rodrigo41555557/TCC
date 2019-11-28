<?php
error_reporting(0);
require 'config.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sistema de ouvidoria do lorem ipsum</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body class="bg-light">

<?php require_once 'menu.php'; ?>	
<br><br><br>

<div id="conteudo" class="contanier">
	<form method="post" action="dados_update_user.php">
			
		<div class="form-group">
        	<div class="col-md-6 offset-md-3">
	        	<h3 class="text-center"> Alterar Usuário </h3>
	    	</div>
    	</div>

        <?php
                if(isset($errMsg)){
                    echo '<div class="form-group">
                                <div class="col-md-6 offset-md-3">
                                    <h3 class="text-center text-danger">' .$errMsg. '</h3>
                                </div>
                          </div>';
                }
        ?>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label > Apelido </label>
                <input type="text" name="apelido" class="form-control" placeholder="<?= $_SESSION['apelido'] ?>">
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Nome Completo </label>  
                <input type="text" name="nome_completo" class="form-control" placeholder="<?= $_SESSION['name'] ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Número de Telefone </label>  
                <input type="tel" name="telefone" class="form-control" placeholder="<?= $_SESSION['telefone'] ?>">
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Senha </label>  
                <input type="password" name="senha" class="form-control" placeholder="Senha" required="" >
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Confirmar senha </label>  
                <input type="password" name="confsenha" class="form-control" placeholder="Confirmar senha" required="" >
            </div>
        </div>


    <br>
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <input type="submit" value="Salvar Alterações" class="btn btn-dark" name="save">
            </div>
        </div>

	</form>
</div>
<?php include 'rodape.php'; ?>
</body>
</html>
