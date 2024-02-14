<?php 
	//Declaração de tipos escalares
	function soma(int...$valores) {
		return array_sum($valores);
	}

	//Declaração de tipo de retorno
	function somaRetorno(float...$valores):string {
		return array_sum($valores);
	}

	echo var_dump(soma(2, 2));
	echo "<br>";
	echo var_dump(soma(25, 25));
	echo "<br>";
	echo var_dump(somaRetorno(1.5, 3.5));
	echo "<br>";
	echo var_dump(somaRetorno(10, 10));

?>