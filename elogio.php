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
                <label> Email </label>  
                <input type="email" name="email" class="form-control" placeholder="Email" required="" >
            </div>
        </div> 

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <label> Escreva seu Elogio </label>  
                <div>
                <textarea class="form-control" rows="5"></textarea>
            </div>
        </div> 

        <br>

        <div class="form-group">
            <div class="col-md-6 offset-md-3">
                <input type="submit" value="Enviar Elogio" class="btn btn-primary" name="">
            </div>
        </div>

    </form> 
	
	</div>
</body>
</html>