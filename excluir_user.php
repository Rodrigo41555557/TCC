<?php
require 'config.php';
	
	//mysqli_execute("DELETE FROM `usuario` WHERE `usuario`.`cod_usuario` = $_SESSION['id']");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Sistema de ouvidoria do lorem ipsum</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body class="bg-light">

<?php require_once 'menu.php'; ?>	
<br><br><br>

<div id="conteudo" class="contanier">
	<form method="post" action="">

		<nav class="navbar navbar-expand-lg navbar-primary bg-bg-primary" >
		<a href="index.php"><img src="img/x.jpg" width="30" height="30" alt=""></a>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">						
			</ul>

				<form method="post" action="funcip.php" class="form-inline my-2 my-lg-0">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link text-light" href="index.php" >Início</a>
						</li>
						<li class="nav-item" >
			                <a class="nav-link text-light" href="login.php" >Entrar</a>
			            </li>
			            <li class="nav-item" >
			                <a class="nav-link text-light" href="cadastro.php" >Cadastro</a>
			            </li>

				    </ul>

				</form>

			</div>
		</nav>

		<div class="form-group">
        	<div class="col-md-6 offset-md-3">
	        	<h3 class="text-center"> Excluir usuário </h3>
	    	</div>
    	</div>

        </div>

    </form>
</div>
</body>
</html>