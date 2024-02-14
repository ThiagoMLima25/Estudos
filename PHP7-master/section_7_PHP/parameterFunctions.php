<?php 
	//Parâmetros obrigatórios sempre a esquerda.
	function hello($name = "Padrão", $welcome = "Bom Dia!") {
		return "Olá $name. $welcome<br>";
	}

	function ola() {
		return $argumentos = func_get_args(); //retorna parâmetros da função em formato de array
	}

	echo hello();
	echo hello("");
	echo hello(NULL, "Boa Tarde!");
	echo hello("Thiago", "Boa Noite!");
	echo hello("Maria", "");
	echo hello("John");

	echo "<br><br>";

	var_dump(ola("Tudo Bem?", "Aconteceu algo?"));
?>