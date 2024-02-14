<?php
	/**
	 * @link https://secure.php.net/manual/pt_BR/function.autoload.php  
	 * @link https://secure.php.net/manual/pt_BR/function.spl-autoload-register.php
	 */
	function addClass($className) {
		if(file_exists($className.".php")){
			require_once($className.".php");
		}
	}

	spl_autoload_register("addClass");
	spl_autoload_register(function($className) {
		if(file_exists("abstract". DIRECTORY_SEPARATOR . $className .".php")){
			require_once("abstract". DIRECTORY_SEPARATOR . $className .".php");
		}
	});

	$carro = new DelRey();
	echo $carro->acelerar(80);
?>