<?php
if($errMsg == ''){

		$id = $_SESSION['id'];
		if (isset($_POST['sim'])) {
			try {
				 $sql = "DELETE FROM usuario WHERE id = ".$_SESSION['id'];        
				 $q = $connect->prepare($sql);

				 $response = $q->execute(array($id));  
				 session_destroy();
				 header('Location: login.php?action=deletado');    
			}
	}
?>	
