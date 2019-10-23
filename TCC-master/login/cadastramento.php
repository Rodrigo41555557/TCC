<?php

if ($_POST['Senha'] != $_POST['ConfirmarSenha']) {
	echo '<meta http-equiv="refresh" content="2;url=cadastro.php">';
	echo "<br><h1>a senha digitada não é a mesma da confirmada</h1>";
}else{



	$apelido = (string) $_POST['Apelido'];
	$nome  = (string) $_POST['NomeCompleto'];
	$email = (string) $_POST['E-mail'];
	$senha = (string) $_POST['Senha'];

	$linha = 
	[
        "Apelido"   => $_POST['Apelido'],
        "Nome"  => $_POST['NomeCompleto'],
        "Email"  => $_POST['E-mail'],
        "Senha" => $_POST['Senha'],
        "ID" => uniqid()
    ];

    $json = json_encode($linha, JSON_PRETTY_PRINT);
       
    file_put_contents('contas.json', $json);
	//abre o arquivo para escrever ao seu final

	//escrever a linha no arquivo

	echo '<meta http-equiv="refresh" content="10;url=cadastro.php">';


}
?>