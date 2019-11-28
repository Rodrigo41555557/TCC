<?php
error_reporting(0);
	require 'config.php';
	$id = $_SESSION['id']; 

if (isset($_GET['elogio'])) {
	if ($errMsg == '') {
		try {
			$stmt = $connect->prepare('DELETE FROM elogio WHERE cod_elogio = ' . $_GET['elogio'] . ';');
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			header('Location: info.php?i=elogios&action=deletado');
		} catch (PDOException $e) {
			$errMsg = $e->getMessage();
		}
	}
	echo $errMsg;
}elseif (isset($_GET['sugestao'])) {
	if ($errMsg == '') {
		try {
			$stmt = $connect->prepare('DELETE FROM sugestao WHERE cod_sugestao = ' . $_GET['sugestao'] . ';');
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			header('Location: info.php?i=sugestoes&action=deletado');
		} catch (PDOException $e) {
			$errMsg = $e->getMessage();
		}
	}
	echo $errMsg;
}elseif (isset($_GET['reclamacao'])) {
	if ($errMsg == '') {
		try {
			$stmt = $connect->prepare('DELETE FROM reclamacao WHERE cod_reclamacao = ' . $_GET['reclamacao'] . ';');
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			header('Location: info.php?i=reclamacoes&action=deletado');
		} catch (PDOException $e) {
			$errMsg = $e->getMessage();
		}
	}
	echo $errMsg;
}elseif (isset($_GET['denuncia'])) {
	if ($errMsg == '') {
		try {
			$stmt = $connect->prepare('DELETE FROM denuncia WHERE cod_denuncia = ' . $_GET['denuncia'] . ';');
			$stmt->bindParam(':id', $id);
			$stmt->execute();
			header('Location: info.php?i=denuncias&action=deletado');
		} catch (PDOException $e) {
			$errMsg = $e->getMessage();
		}
	}
	echo $errMsg;
}
?>
