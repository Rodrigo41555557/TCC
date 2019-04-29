<?php
require 'config.php';

if(isset($_POST['register'])) {
    $errMsg = '';

    // Get data from FROM
    $fullname = $_POST['fullname'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $telefone = $_POST['telefone'];

    if($fullname == '')
        $errMsg = 'Digite seu Nome Completo';
    if($username == '')
        $errMsg = 'Digite seu apelido';
    if($password == '')
        $errMsg = 'Digite sua senha';
    if($telefone == '')
        $errMsg = 'Digite seu telefone';
    if($errMsg == ''){
        try {
            $stmt = $connect->prepare('INSERT INTO user (fullname, username, password, telefone) VALUES (:fullname, :username, :password, :telefone)');
            $stmt->execute(array(
                ':fullname' => $fullname,
                ':username' => $username,
                ':password' => $password,
                ':telefone' => $telefone
            ));
            header('Location: login.php?action=entrou');
            exit;
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
    }
}

if(isset($_GET['action']) && $_GET['action'] == 'entrou') {
    $errMsg = 'Usuário registrado com sucesso! agora você pode <a href="login.php">logar</a>';
}
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
	<form method="post" action="">
		
		<div class="form-group">
        	<div class="col-md-6 offset-md-3">
	        	<h3 class="text-center"> Cadastre-se </h3>
	    	</div>
    	</div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label > Apelido </label>
                <input type="text" name="username" class="form-control" placeholder="Apelido" required="" >
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Nome Completo </label>  
                <input type="text" name="fullname" class="form-control" placeholder="Nome Completo" required="" >
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Número de Telefone </label>  
                <input type="tel" name="telefone" class="form-control" placeholder="Telefone" required="" >
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Senha </label>  
                <input type="password" name="password" class="form-control" placeholder="Senha" required="" >
            </div>
        </div>
        <?php

        /*
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Confirmar senha </label>  
                <input type="password" name="senha" class="form-control" placeholder="Confirmar senha" required="" >
            </div>
        </div>
        */

        ?>
    <br>
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <input type="submit" value="Criar Conta" class="btn btn-dark" name="register">
            </div>
        </div>

	</form>
</div>

</body>
</html>