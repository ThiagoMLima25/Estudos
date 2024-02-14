<?php
	//método autoload carrega automáticamente os arquivos que estão no mesmo diretório 
	function __autoload($className)
	{
		var_dump($className);
		require_once "$className.php";
	}

	//Como a classe instanciada DelRey extende a classe abstrata automovel em outro diretório, gerará um erro.
	$carro = new DelRey();
?>