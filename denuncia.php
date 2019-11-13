<?php 
    require 'config.php';
if (!isset($_SESSION['id'])){
    header('Location: login.php');
}
    if(isset($_POST['denuncia'])) {
        $errMsg = '';

        // Get data from FROM
        $texto_denuncia = $_POST['texto_denuncia'];
        $titulo = $_POST['titulo'];
        $userdenuncia = $_SESSION['id'];
        //provisorio
        $nome = $_POST['cod_usuario'];
    
			if($texto_denuncia == '')
				$errMsg = 'Escreva sua denuncia';
			if($titulo == '')
				$errMsg = 'Escreva o título do sua denuncia';
			if($errMsg == ''){
				try {
					$stmt = $connect->prepare('INSERT INTO denuncia (texto_denuncia, titulo, den_cod_usuario) VALUES (:texto_denuncia, :titulo, :den_cod_usuario)');
					$stmt->execute(array(
						':texto_denuncia' => $texto_denuncia,
                        ':titulo' => $titulo,
                        ':den_cod_usuario' => $userdenuncia
					));
					header('Location: denuncia.php?action=enviou');
					exit;
				}
				catch(PDOException $e) {
					echo $e->getMessage();
				}
			}
    }

if(isset($_GET['action']) && $_GET['action'] == 'enviou') {
    $errMsg = "<div class='form-group'>
                              <div class='col-md-6 offset-md-3'>
									<h5 class='text-danger text-center'> Denúncia Enviada com Sucesso
							  </h5>
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

<?php require_once 'menu.php'; ?>	

<div class="container bg-light"> 

	<form action=""  method="POST" name="formulario" > 
        
	<br>

	<div class="form-group">
        <div class="col-md-6 offset-md-3">
	        <h3 class="text-center"> Mande sua Denuncia </h3>
	    </div>
    </div>
        <?php
        if($errMsg) {
            echo $errMsg;
        }
        ?>
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Assunto/Título </label>  
                <input type="text" name="titulo" class="form-control" placeholder="Assunto/Título" required="" >
            </div>
             
        </div>  

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Escreva sua Denuncia </label>  
                <div>
                <textarea type="textarea" class="form-control" name="texto_denuncia" rows="10" cols="70" placeholder="Escreva sua Denúncia" required=""></textarea>
                </input>
            </div>
        </div> 
        <br>
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <input type="submit" value="Enviar" class="btn btn-primary" name="denuncia">
            </div>

        </div>

    </form> 
	<br><br><br><br>
</div>
</div>
<?php include 'rodape.php'; ?>	
</body>
</html>