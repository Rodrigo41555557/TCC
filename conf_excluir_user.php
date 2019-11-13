<?php
require 'config.php';

if(empty($_SESSION['id'])){
	header('Location: login.php');
}else{

	if(isset($_POST['save'])) {
    		
	}

	$id = $_SESSION['id']; 
	if($errMsg == '') {   
		try {

	  		$stmt = $connect->prepare('DELETE FROM usuario WHERE cod_usuario = :id');
	  		$stmt->bindParam(':id', $id); 
			$stmt->execute();
			session_destroy();
	  		header('Location: login.php?action=deletado');  
		} catch(PDOException $e) {
			$errMsg = $e->getMessage();
		}
	}
	echo $errMsg;
}
?>	
