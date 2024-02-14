<?php
	function hello() {
		return "Olá Mundo.<br>";
	}

	function payment() {
		return 946.00;
	}

	$frase = hello();
	echo $frase;
	echo strlen($frase);
	echo "<br>";
	echo "Pedro recebeu 3 salários R$".(payment()*3);
?>