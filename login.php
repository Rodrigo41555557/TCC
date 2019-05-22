<?php
	require 'config.php';

	if(isset($_POST['login'])) {
		$errMsg = '';

		// Get data from FORM
		$apelido = $_POST['apelido'];
		$senha = $_POST['senha'];

		if($apelido == '')
			$errMsg = 'Enter apelido';
		if($senha == '')
			$errMsg = 'Enter senha';

		if($errMsg == '') {
			try {
				$stmt = $connect->prepare('SELECT cod_usuario, nome_completo, apelido, senha FROM usuario WHERE apelido = :apelido');
				$stmt->execute(array(
					':apelido' => $apelido
					));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);

				if($data == false){
					$errMsg = '<div class="col-md-6 offset-md-3">
									<h5 class="text-danger text-center"> Usuário '.$apelido.' não existe! 
							  </h5>
							  </div>';
				}
				else {
					if($senha == $data['senha']) {
						$_SESSION['login'] = $_POST['login'];
						$_SESSION['name'] = $data['nome_completo'];
						$_SESSION['apelido'] = $data['apelido'];
						$_SESSION['senha'] = $data['senha'];
						header('Location: index.php');
						exit;
					}
					else
						$errMsg = '
						<div class="col-md-6 offset-md-3">
							<h5 class="text-danger text-center"> Senha Incorreta </h5>
						</div>';
				}
			}
			catch(PDOException $e) {
				$errMsg = $e->getMessage();
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
<form method="post" action="">
	<div class="form-group">
        <div class="col-md-6 offset-md-3">
	        <h3 class="text-center"> Login </h3>
	    </div>
    </div>
    <?php 
    	if($errMsg) {
    		echo $errMsg;
    	}
    ?>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label >Nome do Usuário</label>
                <input type="text" name="apelido" class="form-control" placeholder="Nome do Usuário" required="" autocomplete="off" >    
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
                <input type="submit" name='login' value="Login" class='submit btn btn-dark'/><br />
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
