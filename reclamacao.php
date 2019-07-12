<?php 
    require 'config.php';

    if(isset($_POST['reclamacao'])) {
        $errMsg = '';

        // Get data from FROM
        $texto_reclamacao = $_POST['texto_reclamacao'];
        $titulo = $_POST['titulo'];
        //provisorio
        $nome = $_POST['cod_usuario'];
    
            if($texto_reclamacao == '')
                $errMsg = 'Escreva sua reclamacao';
            if($titulo == '')
                $errMsg = 'Escreva o título do sua reclamacao';
            if($errMsg == ''){
                try {
                    $stmt = $connect->prepare('INSERT INTO reclamacao (texto_reclamacao, titulo) VALUES (:texto_reclamacao, :titulo)');
                    $stmt->execute(array(
                        ':texto_reclamacao' => $texto_reclamacao,
                        ':titulo' => $titulo
                    ));
                    header('Location: reclamacao.php?action=enviou');
                    exit;
                }
                catch(PDOException $e) {
                    echo $e->getMessage();
                }
            }
    }

    if(isset($_GET['action']) && $_GET['action'] == 'entrou') {
        $errMsg = 'Reclamação enviada com sucesso';
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
            <h3 class="text-center"> Mande sua Reclamação </h3>
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
                <label> Escreva sua Reclamação </label>  
                <div>
                <input type="text" class="form-control" name="texto_reclamacao" rows="5" placeholder="Escreva sua Reclamação" required="" >
            </input>
            </div>
        </div> 
        <br>
        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <input type="submit" value="Enviar" class="btn btn-primary" name="reclamacao">
            </div>
        </div>

    </form> 
    
</div>
    
</body>
</html>