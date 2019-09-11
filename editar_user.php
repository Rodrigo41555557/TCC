
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

<div id="conteudo" class="contanier">
	<form method="post" action="">
		
<?php

if(empty($_SESSION['id'])){
        header('Location: login.php');

    if(isset($_POST['save'])) {
        $errMsg = '';

        // Getting data from FROM
        $nome = $_POST['name'];
        echo '<div class="col-md-6 offset-md-3">
                            <h5 class="text-danger text-center">'.$nome.'</h5>
                       </div>.';
        $senha = $_POST['senha'];
        $confSenha = $_POST['confsenha'];
        $telefone = $_POST['telefone'];

        if($senha != $confSenha)
            $errMsg = '<div class="col-md-6 offset-md-3">
                            <h5 class="text-danger text-center"> Senha Incorreta </h5>
                       </div>.';
        

        if($errMsg == '') {
            try {
              $sql = "UPDATE usuario SET nome_completo = :nome_completo, senha = :senha, telefone = :telefone WHERE `usuario`.`cod_usuario` = ".$_SESSION['id'];
              $stmt = $connect->prepare($sql);                                  
              $stmt->execute(array(
                ':nome_completo' => $nome,
                ':senha' => $senha,
                ':telefone' => $telefone,
                ':apelido' => $_SESSION['apelido']
              ));
                header('Location: editar_user.php?action=alterado');
                exit;

            }
            catch(PDOException $e) {
                $errMsg = $e->getMessage();
            }
        }
    }

    if(isset($_GET['action']) && $_GET['action'] == 'alterado')
        $errMsg = 'Usuário alterado com sucesso!';
    
}
?>		
		
		<div class="form-group">
        	<div class="col-md-6 offset-md-3">
	        	<h3 class="text-center"> Alterar Usuário </h3>
	    	</div>
    	</div>

        <?php
                if(isset($errMsg)){
                    echo '<div class="form-group">
                                <div class="col-md-6 offset-md-3">
                                    <h3 class="text-center">' .$errMsg. '</h3>
                                </div>
                          </div>';
                }
        ?>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label > Apelido </label>
                <input type="text" name="apelido" class="form-control" placeholder="<?= $_SESSION['apelido'] ?>" required="" >
            </div>
        </div>


        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Nome Completo </label>  
                <input type="text" name="nome_completo" class="form-control" placeholder="<?= $_SESSION['name'] ?>" required="" >
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Número de Telefone </label>  
                <input type="tel" name="telefone" class="form-control" placeholder="<?= $_SESSION['telefone'] ?>" required="" >
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
