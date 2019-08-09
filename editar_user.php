
<?php
require 'config.php';

if(isset($_POST['save'])) {
    $errMsg = '';

    // Pegar o usuario registrado
    $nome_completo = $_SESSION['nome_completo'];
    $apelido = $_SESSION['apelido'];
    $senha = $_SESSION['senha'];
    $telefone = $_SESSION['telefone'];

    // Pegar os dados alterados
    $nome_completoalt = $_POST['nome_completo'];
    $apelidoalt = $_POST['apelido'];
    $senhaalt = $_POST['senha'];
    $telefonealt = $_POST['telefone'];


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
            $sql = "UPDATE `usuario` SET `nome_completo` = '$nome_completoalt', `apelido` = '$apelidoalt', `senha` = '$senhaalt', `telefone` = '$telefonealt' WHERE `cod_usuario` = '.$_SESSION['id'].'";
			$dpo->prepare($sql);
			$stmt->execute([$nome_completoalt, $apelidoalt, $senhaalt, $telefonealt
			]);
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
	        	<h3 class="text-center"> Alterar Usuário </h3>
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
                <input type="text" name="nome_completoalt" value="nome" class="form-control" placeholder="Nome Completo" required="" >
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Número de Telefone </label>  
                <input type="tel" name="telefonealt" class="form-control" placeholder="Telefone" required="" >
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Senha </label>  
                <input type="password" name="senhaalt" class="form-control" placeholder="Senha" required="" >
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Confirmar senha </label>  
                <input type="password" name="senha" class="form-control" placeholder="Confirmar senha" required="" >
            </div>
        </div>


        ?>
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
