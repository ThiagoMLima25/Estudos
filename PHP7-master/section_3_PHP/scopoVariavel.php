<?php 
	$nome = "Thiago";

	function nome() {
		global $nome;
		echo $nome;
	}

	function sobrenome() {
		$nome = "Maria";
		echo $nome." Martins ";
	}


	nome();
	echo "<br><br>";
	sobrenome();
?>