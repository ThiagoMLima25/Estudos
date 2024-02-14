<?php 
	$name = "imagens";

	if(!is_dir($name)) {
		mkdir($name);
		echo "Diretório $name criado com sucesso";
	}else {
		rmdir($name);
		echo "Diretório $name já existe neste nível de pasta e foi removido.";
	}

?>