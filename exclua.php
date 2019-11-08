<?php
	require 'config.php';
	$id = $_SESSION['id']; 

	if($errMsg == '') { 
		try {

	  		$stmt = $connect->prepare('DELETE FROM elogio WHERE cod_elogio = '.$_GET['elogio'].';');
	  		$stmt->bindParam(':id', $id); 
			$stmt->execute();
	  		header('Location: info_elogio.php?action=deletado');  
		} catch(PDOException $e) {
			$errMsg = $e->getMessage();
		}
	}
	echo $errMsg;

?>
