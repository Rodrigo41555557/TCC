<?php
if($errMsg == ''){

	$id = $_SESSION['id'];				 

	function deletar($iden)
	{
		$sql = "DELETE FROM `usuario` WHERE `usuario`.`cod_usuario` = $iden";  
		$q = $connect->prepare($sql);
		$response = $q->execute(array($iden)); 
	}
	deletar($id);
	session_destroy();
	header('Location: login.php?action=deletado');   
}
?>	
