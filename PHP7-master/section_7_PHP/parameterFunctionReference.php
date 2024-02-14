<?php 
	
	$valueOne = 10;

	//& - Passagem de váriaveis por referência. Altera o valor no endereço de memória.
	function changeValue(&$value) {
		return $value += 70;
	}

	echo $valueOne;
	echo "<br><br>";
	echo changeValue($valueOne);
	echo "<br><br>";
	echo $valueOne;
	echo "<br><br>";
	echo changeValue($valueOne);
	echo "<br><br>";
	echo $valueOne;
	echo "<br><br>";

	$pessoa = [
		'nome'	=>	'Thiago',
		'idade'	=>	25
	];

	foreach ($pessoa as $value) {
		if(gettype($value) === 'integer') $value += 10; 
		echo $value."<br>";
	}

	echo "<br><br>";
	print_r($pessoa);
?>