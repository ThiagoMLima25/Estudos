<?php
	// include 'includeAndRequire.php';	//Tenta funcionar mesmo que o arquivo não exista ou que tenha algum problema.Se utilizar recursos como include path ou include remote
	require 'includeAndRequire.php';	//Obriga que o arquivo exista e que esteja funcionando corretamente.
	// require_once 'includeAndRequire.php';
	// require_once 'includeAndRequire.php';
	
	$resultado = somar(10, 20);
	var_dump($resultado);
?>