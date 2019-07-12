<?php 
    require 'config.php';

    if(isset($_POST['sugestao'])) {
        $errMsg = '';

        // Get data from FROM
        $texto_sugestao = $_POST['texto_sugestao'];
        $titulo = $_POST['titulo'];
        //provisorio
        $nome = $_POST['cod_usuario'];
    
			if($texto_sugestao == '')
				$errMsg = 'Escreva sua sugestao';
			if($titulo == '')
				$errMsg = 'Escreva o título do sua sugestao';
			if($errMsg == ''){
				try {
					$stmt = $connect->prepare('INSERT INTO sugestao (texto_sugestao, titulo) VALUES (:texto_sugestao, :titulo)');
					$stmt->execute(array(
						':texto_sugestao' => $texto_sugestao,
						':titulo' => $titulo
					));
					header('Location: sugestao.php?action=enviou');
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
	        <h3 class="text-center"> Mande sua Sugestão </h3>
	    </div>
    </div>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label >Nome</label>
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
                <label> Escreva sua sugestão </label>  
                <div>
                <input type="text" class="form-control" name="texto_sugestao" rows="5" placeholder="Escreva sua Sugestão" required=""></input>
            </div>
        </div> 
        <br>
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <input type="submit" value="Enviar" class="btn btn-primary" name="sugestao">
            </div>
        </div>

    </form> 
	
</div>
	
</body>
</html>