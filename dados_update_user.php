<?php
require 'config.php';

	if(empty($_SESSION['id'])){
        header('Location: login.php');
	}else{

    	if(isset($_POST['save'])) {
    		$errMsg = '';   
    	}

    	// Pegando info do FORM de alterar usuário
    	$apelido = $_POST['apelido'];
        $nome = $_POST['nome_completo'];
        $senha = $_POST['senha'];
        $confSenha = $_POST['confsenha'];
        $telefone = $_POST['telefone'];

        if($senha != $confSenha){
            $errMsg = "Senha Incorreta";
           	echo $errMsg;
           	echo '<meta http-equiv="refresh" content="3;url=editar_user.php">';
           	die();
        }elseif (!is_numeric($telefone)) {
        	echo "escreva um numero de telefone válido";
        	echo '<meta http-equiv="refresh" content="3;url=editar_user.php">';
        	die();
        }

        var_dump(is_numeric($telefone));
        echo "nickname: ".$apelido."\n";
?><br><?php   
 		echo "nome: ".$nome."\n";        
?><br><?php        
        echo "senha: ".$senha."\n";
?><br><?php        
        echo "senha confirmada: ".$confSenha."\n";
?><br><?php
        echo "tel: ".$telefone."\n";
?><br><?php

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
        		$_POST['alterado'] = 'Usuário alterado com sucesso';
              	header('Location: sobremim.php?action=alterado');
			} catch (PDOException $e) {
                $errMsg = $e->getMessage();
			}
		}
		echo $errMsg;
    	
    }
 		//ver os dados saindo do form e printando na tela 
 		
 		

?>