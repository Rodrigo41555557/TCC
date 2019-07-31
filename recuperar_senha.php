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
	        	<h3 class="text-center"> Recuperar a Senha </h3>
	    	</div>
    	</div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Email do usuário perdido </label>  
                <input type="email" name="email" class="form-control" placeholder="Email do usuário perdido" required="" >
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> ID do usuário </label>  
                <input type="text" name="senha" class="form-control" placeholder="ID do usuário" required="" >
            </div>
        </div>
        <?php

        ?>
    <br>
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <input type="submit" value="Solicitar Recuperação" class="btn btn-dark" name="register">
            </div>
        </div>

	</form>
</div>

</body>
</html>