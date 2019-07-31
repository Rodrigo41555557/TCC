<?php 
    require 'config.php';

    if(isset($_POST['elogio'])) {
        $errMsg = '';

        // Get data from FROM
        $texto_elogio = $_POST['texto_elogio'];
        $titulo = $_POST['titulo'];
        //provisorio
        $nome = $_POST['cod_usuario'];
    
			if($texto_elogio == '')
				$errMsg = 'Escreva seu elogio';
			if($titulo == '')
				$errMsg = 'Escreva o título do seu elogio';
			if($errMsg == ''){
				try {
					$stmt = $connect->prepare('INSERT INTO elogio (texto_elogio, titulo) VALUES (:texto_elogio, :titulo)');
					$stmt->execute(array(
						':texto_elogio' => $texto_elogio,
						':titulo' => $titulo
					));
					header('Location: elogio.php?action=enviou');
					exit;
				}
				catch(PDOException $e) {
					echo $e->getMessage();
				}
			}
    }

    if(isset($_GET['action']) && $_GET['action'] == 'entrou') {
        $errMsg = 'Elogio enviado com sucesso';
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Ouvindo Você!</title>
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
	        <h3 class="text-center"> Mande seu Elogio </h3>
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
                <label> Escreva seu Elogio </label>  
                <div>
                <input type="text" class="form-control" name="texto_elogio" rows="5" placeholder="Escreva seu Elogio" required=""></input>
            </div>
        </div> 

        <br>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <input type="submit" value="Enviar " class="btn btn-primary" name="elogio">
            </div>
        </div>

    </form> 
	
	</div>
</body>
</html>
