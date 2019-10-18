<?php
if($errMsg == ''){

	$id = $_SESSION['id'];
		
	$sql = "DELETE FROM `usuario` WHERE `usuario`.`cod_usuario` = $id";        
	$q = $connect->prepare($sql) or die(mysql_error());

				 $response = $q->execute(array($id));  
				 session_destroy();
				 header('Location: login.php?action=deletado');    

	}
?>	
