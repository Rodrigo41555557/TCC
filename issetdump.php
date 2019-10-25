<?php

	if (isset($_POST['alter'])) {
		echo '<div class="col-md-6 offset-md-3">
			<h5 class="text-danger text-center"> Usuario Alterado con Sucesso </h5>
		</div>';
	}elseif(isset($post['del'])){
		echo '<div class="col-md-6 offset-md-3">
			<h5 class="text-danger text-center"> Usuario Deletado com Sucesso </h5>
		</div>';
	}elseif(isset($_POST['criado'])){
		echo '<div class="col-md-6 offset-md-3">
			<h5 class="text-danger text-center"> Usuario Criado com Sucesso </h5>
		</div>';

	}
?>