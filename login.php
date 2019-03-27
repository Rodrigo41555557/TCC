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
<form method="post" action="index.php">
	<div class="form-group">
        <div class="col-md-6 offset-md-3">
	        <h3 class="text-center"> Login </h3>
	    </div>
    </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label >Nome do Usuário</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome do Usuário" required="" >    
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Senha </label>  
                <input type="password" name="senha" class="form-control" placeholder="Senha" required="" >
            </div>
        </div>
		<br>
		<div class="form-group">
            <div class="col-md-6 offset-md-3">
                <input type="submit" value="Logar" class="btn btn-dark" name="">
            </div>
        </div>

		<div class="form-group">
            <div class="col-md-6 offset-md-3">
                <a href="login/recuperar_senha.html">Esqueceu a senha?</a>
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <a href="cadastro.php">Criar um Cadastro</a>
            </div>
        </div>
		
</form>

</body>
</html>