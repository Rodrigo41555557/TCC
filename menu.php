<?php 
	require 'config.php';
?>
<div class="bg-primary z-depth-5" id="cabecalho">	

	<nav class="navbar navbar-expand-lg navbar-primary bg-bg-primary" >
		<a href="index.php"><img src="img/x.jpg" width="30" height="30" alt=""></a>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav mr-auto">						
			</ul>

				<form method="post" action="busca.php" class="form-inline my-2 my-lg-0">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link text-light" href="index.php" >Início</a>
						</li>
						<?php
							//isset - verifica se uma variável está definida
						    

							if (isset($_SESSION['login']) and $_SESSION['password'] == $_POST['password']) {// se não for o bruno	
						?>
							<!--PERFIL-->
							<li class="nav-item" >
								<p>Você está logado!, <?=  $_SESSION['fullname']; ?>!</p>
							</li>
							<li class="nav-item" >
								<a href="logout.php">Sair</a>
							</li>

							
	
						<?php
							}else{
						?>
							<!-- form de login -->
							<li class="nav-item" >
			                 	<a class="nav-link text-light" href="login.php" >Entrar</a>
			                </li>
			                <li class="nav-item" >
			                    <a class="nav-link text-light" href="cadastro.php" >Cadastro</a>
			                </li>
				
						<?php	
							}	
						?>
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