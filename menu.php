<div class="bg-primary z-depth-5" id="cabecalho">	

	<nav class="navbar navbar-expand-lg navbar-primary bg-bg-primary" >
		<a href="index.php"><img src="img/x.jpg" width="30" height="30" alt=""></a>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">					

			
			<?php	//isset - verifica se uma variável está definida
				if (!isset($_SESSION['Usuario'])) {// se não for o bruno	
			?>
				<!-- form de login -->
				<li class="nav-item" >
                 	<a class="nav-link" href="login.php" ></a>
                </li>
                <li class="nav-item" >
                    <a class="nav-link" href="cadastro.php" ></a>
                </li>

			<?php
			}else{
			?>

				<!--PERFIL-->
			<p>Você está logado!, <?= $_SESSION['Usuario'] ?>!</p>
				<a href="logout.php">Sair</a>
			<?php	}	?>
			
			</ul>

				<form method="post" action="busca.php" class="form-inline my-2 my-lg-0">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link text-light" href="index.php" >Início</a>
						</li>
						<li class="nav-item">
							<a class="nav-link text-light" href="resenhas.php" >Entrar</a>
						</li>
				    	<li class="nav-item" >
				    	    <a class="nav-link text-light" href="ranking.php" >Cadastro</a>
				    	</li>
				    	<li class="nav-item" >
				    	    <a class="nav-link text-light" href="busca.php" >Suporte</a>
				    	</li>
				    	<li class="nav-item" >
				    	    <a class="nav-link text-light" href="sobrenos.php" ></a>
				    	</li>
				    </ul>
					<!-- form de login 
					<input class="form-control mr-sm-2" type="text" name="campo_busca">
					<input class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="buscar" value="buscar">
					-->
				</form>

			</div>
		</nav>

		
		<hr class="bg-light">
		<div class="container bg-primary">
			<h1 class="text-center  text-light">Sistema de ouvidorias do Lorem Ipsum</h1>
		</div>
		<br>
</div>