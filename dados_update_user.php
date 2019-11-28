<?php
error_reporting(0);
require 'config.php';

	if(empty($_SESSION['id'])){
        header('Location: login.php');
	}else{

    	if(isset($_POST['save'])) {
    		
    	}

    	// Pegando info do FORM de alterar usuário
    	$apelido = $_POST['apelido'];
        $nome = $_POST['nome_completo'];
        $senha = $_POST['senha'];
        $confSenha = $_POST['confsenha'];
        $telefone = $_POST['telefone'];

		if (!isset($_POST['apelido'])) {
			$apelido = $_SESSION['apelido'];
		}elseif (!isset($_POST['nome_completo'])){
			$nome = $_SESSION['name'];			
		}elseif (!isset($_POST['senha'])){
			$senha = $_SESSION['senha'];
		}elseif (!isset($_POST['confsenha'])){
			$confsenha = $_SESSION['confSenha'];
		}elseif (!isset($_POST['telefone'])){
			$telefone = $_SESSION['telefone'];
		}

        if($senha != $confSenha){
            $errMsg = "Senha Incorreta";
           	echo $errMsg;
           	header('Location: editar_user.php?action=senhaincorreta'); 
           	die();
        }elseif (!is_numeric($telefone) && isset($telefone)) {
        	$errMsg = "<div class='form-group'>
                              <div class='col-md-6 offset-md-3'>
									<h5 class='text-danger text-center'> Escreva um Numero de Telefone Válido
							  </h5>
						</div>";
        	echo '<meta http-equiv="refresh" content="3;url=editar_user.php">';
        	die();
        }

        //altera em tempo real

        $_SESSION['apelido'] = $apelido;
        $_SESSION['name'] = $nome;
        $_SESSION['senha'] = $senha;
        $_SESSION['confSenha'] = $confSenha;
		$_SESSION['telefone'] = $telefone;
		print_r($nome);



		if($errMsg == '') {
			try {
				$sql = "UPDATE usuario SET nome_completo = :nome_completo, senha = :senha, telefone = :telefone, apelido = :apelido WHERE `usuario`.`cod_usuario` = ".$_SESSION['id'].";";
				$stmt = $connect->prepare($sql);
				$stmt->execute(array(
                ':nome_completo' => $nome,
                ':senha' => $senha,
                ':telefone' => $telefone,
                ':apelido' => $apelido
              	));

              	header('Location: sobremim.php?action=alterado');
			} catch (PDOException $e) {
                $errMsg = $e->getMessage();
			}
		}
		echo $errMsg;
    	
    }
 		//ver os dados saindo do form e printando na tela 
 		
 		

?>