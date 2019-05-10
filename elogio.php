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
                $stmt = $connect->prepare('INSERT INTO user (texto_elogio, titulo, cod_usuario) VALUES (:texto_elogio, :titulo, :cod_usuario)');
                $stmt->execute(array(
                    ':texto_elogio' => $texto_elogio,
                    ':titulo' => $titulo,
                    ':cod_usuario' => $nome
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
                <label >Nome</label>
                <input type="text" name="cod_usuario" class="form-control" placeholder="Nome" required="" >    
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
                <label> Escreva seu Elogio </label>  
                <div>
                <textarea class="form-control" name="texto_elogio" rows="5"></textarea>
            </div>
        </div> 

        <br>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <input type="submit" value="Enviar Elogio" class="btn btn-primary" name="elogio">
            </div>
        </div>

    </form> 
	
	</div>
</body>
</html>