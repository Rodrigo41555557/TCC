 <?php
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
	<div class="container">
		<form method="post" action="sobremim.php">
			<div class="form-group">
        		<div class="col-md-6 offset-md-3">
	        		<h3 class="text-center"> Você tem certeza que deseja excluír sua conta? </h3>
	    		</div>
    		</div>
    		<div class="form-group">
        		<div class="col-md-6 offset-md-3 form-check">
        			<input type="checkbox" id="confirma" required="" class="form-check-input"> 
        			<label class="form-check-label" for="confirma">Entendo que o que estou fazendo não poderá ser revertido e levará à exclusão de todos os meus posts</label>
        		</div>

        		<br>
        		
        		<div class="col-md-3 offset-md-3">	
	        		<input type="submit" name="sim" class="btn btn-primary" value="Sim">
	        	</div>
	        			
    		</div>
    	</form>
    	<form method="post" action="sobremim.php" class="col-md-3 offset-md-3">
    		<div class="col-md-3 ">
    			<input type="submit" name="nao" class="btn btn-primary" value="Voltar ao Menu do Usuário">
	    	</div>
    	</form>
	</div>
</body>
</html>
