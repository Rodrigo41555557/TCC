<?php
error_reporting(0);
	require 'config.php';
	// session_start();
    $errMsg = '';
	if(isset($_POST['login'])) {
		

		// Get data from FORM
		$apelido = $_POST['apelido'];
		$senha = $_POST['senha'];
        $entrou = $_POST['action'];
        $novo = $_POST['newuser'];
		if($apelido == '') {
            $errMsg = 'Escreva o apelido';
        }elseif($senha == '') {
            $errMsg = 'Escreva a senha';
        }

		if($errMsg == '') {
			try {
				$stmt = $connect->prepare('SELECT cod_usuario, nome_completo, apelido, senha, telefone FROM usuario WHERE apelido = :apelido');
				$stmt->execute(array(
					':apelido' => $apelido
                ));
				$data = $stmt->fetch(PDO::FETCH_ASSOC);

				if($data == false){
					$errMsg = "
                          <div class='form-group'>
                              <div class='col-md-6 offset-md-3'>
									<h5 class='text-danger text-center'> Usuário '$apelido' não existe!
							  </h5>
						  </div>";
				}
				else {
                    if ($senha == $data['senha']) {
                        $_SESSION['id'] = $data['cod_usuario'];
                        $_SESSION['login'] = $_POST['login'];
                        $_SESSION['name'] = $data['nome_completo'];
                        $_SESSION['apelido'] = $data['apelido'];
                        $_SESSION['senha'] = $data['senha'];
                        $_SESSION['telefone'] = $data['telefone'];

                        header('Location: index.php');
                        exit;
                    }else
                        $errMsg = "
                    <div class='form-group'>
						<div class='col-md-6 offset-md-3'>
							<h5 class='text-danger text-center'> Senha Incorreta </h5>
						</div>
					</div>";
                }

			}

			catch(PDOException $e) {
				$errMsg = $e->getMessage();
			}
		}
	}

if(isset($_GET['action']) && $_GET['action'] == "entrou"){
    $errMsg = "
                        <div class='col-md-6 offset-md-3'>
                            <h5 class='text-success text-center'> Usuario ".$novo." Cadastrado com Sucesso </h5>
                        </div>
                    </div>";
}
if(isset($_GET['action']) && $_GET['action'] == "deletado"){
    $errMsg = "
                        <div class='col-md-6 offset-md-3'>
                            <h5 class='text-danger text-center'> Usuario ".$novo." Excluído com Sucesso </h5>
                        </div>
                    </div>";
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

<?php require 'menu.php'; ?>	
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
	        <h5 class="text-left"> Não tem uma conta? </h5>
	    </div>
    </div>
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <a href="cadastro.php">Crie uma</a>
            </div>
        </div>
		
</form>
<br><br>
<?php include 'rodape.php'; ?>
</body>
</html>
