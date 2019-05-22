<?php 
    require 'config.php';

    if(isset($_POST['denuncia'])) {
        $errMsg = '';

        // Get data from FROM
        $texto_denuncia = $_POST['texto_denuncia'];
        $titulo = $_POST['titulo'];
        //provisorio
        $nome = $_POST['cod_usuario'];
    
			if($texto_denuncia == '')
				$errMsg = 'Escreva seu denuncia';
			if($titulo == '')
				$errMsg = 'Escreva o título do seu denuncia';
			if($errMsg == ''){
				try {
					$stmt = $connect->prepare('INSERT INTO denuncia (texto_denuncia, titulo) VALUES (:texto_denuncia, :titulo)');
					$stmt->execute(array(
						':texto_denuncia' => $texto_denuncia,
						':titulo' => $titulo
					));
					header('Location: denuncia.php?action=enviou');
					exit;
				}
				catch(PDOException $e) {
					echo $e->getMessage();
				}
			}
    }

    if(isset($_GET['action']) && $_GET['action'] == 'entrou') {
        $errMsg = 'Sugestão enviada com sucesso';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Sistema de ouvidoria do lorem ipsum</title>
	<meta charset="UTF-8">
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

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label >Nome (Opcional)</label>
                <input type="text" name="nome" class="form-control" placeholder="Nome" required="" >    
            </div>
        </div>
        
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Assunto/Título </label>  
                <input type="text" name="titulo" class="form-control" placeholder="Assunto/Título" required="" >
            </div>
        </div>   

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Escreva sua denucia de forma anonima! </label>  
                <div>
                <input type="text" class="form-control" name="texto_denuncia" rows="5"></input>
            </div>
        </div>  

        <br>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <input type="submit" value="Enviar" class="btn btn-primary" name="">
            </div>
        </div>

    </form> 
	
</div>
</body>
</html>