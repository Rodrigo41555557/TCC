<?php
error_reporting(0);
    require 'config.php';
    $errMsg = '';
if(isset($_GET['action']) && $_GET['action'] == "alterado"){
    $errMsg = "
                       
                            <h5 class='text-success text-center'> Usuario Alterado com Sucesso</h5>
 
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

<?php include 'menu.php'; ?>	

<br><br><br>

<?php if($errMsg) { ?>
<div class="container">
    <div id="showuser" class="row">
        <br>
        <?php    echo $errMsg; ?>
        
 
        <br>
    </div>
<?php } ?>
<br><br>
<div class="container">
    <div id="showuser" class="row">

        <div class="col-sm-4 mb-5">
            <li class="list-group-item">Nome do Usuário: <?= $_SESSION['apelido'] ?></li>

            <li class="list-group-item">
				<a class="nav-link text-secondary" href="editar_user.php" >Editar Informações do Usuário</a>
			</li>
			
			<li class="list-group-item">
				<a class="nav-link text-danger" href="excluir_user.php" onclick="">Excluir Usuário</a>
			</li>

        </div>

        <div class="col-sm-8 mb-5">
            
            <ul class="list-group list-group-flush">
                
                <li class="list-group-item">Nome Completo: <?= $_SESSION['name'] ?></li>
                <li class="list-group-item">Telefone: <?= $_SESSION['telefone'] ?></li>
                
                
                </ul>


        </div>

    </div>   


</div>
<br><br>
<?php include 'rodape.php'; ?>
</body>
</html>
