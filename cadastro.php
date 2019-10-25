<?php
require 'config.php';

if(isset($_POST['register'])) {
    $errMsg = '';

    // Get data from FROM
    $nome_completo = $_POST['nome_completo'];
    $apelido = $_POST['apelido'];
    $senha = $_POST['senha'];
    $telefone = $_POST['telefone'];

    if($nome_completo == '')
        $errMsg = 'Digite seu Nome Completo';
    if($apelido == '')
        $errMsg = 'Digite seu apelido';
    if($senha == '')
        $errMsg = 'Digite sua senha';
    if($telefone == '')
        $errMsg = 'Digite seu telefone';
    if($errMsg == ''){
        try {
            $stmt = $connect->prepare('INSERT INTO usuario (nome_completo, apelido, senha, telefone) VALUES (:nome_completo, :apelido, :senha, :telefone)');
            $stmt->execute(array(
                ':nome_completo' => $nome_completo,
                ':apelido' => $apelido,
                ':senha' => $senha,
                ':telefone' => $telefone
            ));
            $_POST['criado'] = 'Usuario criado com sucesso';
            header('Location: login.php?action=entrou');
            exit;
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
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
                <input type="text" name="apelido" class="form-control" placeholder="Apelido" required="" >
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Nome Completo </label>  
                <input type="text" name="nome_completo" class="form-control" placeholder="Nome Completo" required="" >
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
                <input type="password" name="senha" class="form-control" placeholder="Senha" required="" >
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

<?php include 'rodape.php'; ?>
</body>
</html>