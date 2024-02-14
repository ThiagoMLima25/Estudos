<?php
	$nome = "Thiago"; 
	$sobrenome = 'Martins';
	echo "ABC $nome";

echo "<br><br>";

	echo 'ABC $nome';

echo "<br><br>";

	echo strtoupper($nome." ".$sobrenome);

echo "<br><br>";

	echo strtolower($nome." ".$sobrenome);

echo "<br><br>";

	echo mb_strtoupper($nome." ".$sobrenome);

echo "<br><br>";

	echo mb_strtolower($nome." ".$sobrenome);

echo "<br><br>";

	echo ucwords($nome." ".$sobrenome);

echo "<br><br>";

	echo ucfirst($nome." ".$sobrenome);

echo "<br><br>";

	$empresa = "HCode";
	$empresa = str_replace("o","0", $empresa);
	$empresa = str_replace("e","3", $empresa);
	echo $empresa;

echo "<br><br>";

	$frase = "A repetição é a mãe da retenção";
	$palavra = "mãe";
	$q = strpos($frase, $palavra);
	$texto = substr($frase, 0, $q);
	var_dump($texto);
	$texto2 = substr($frase, $q + strlen($palavra), strlen($frase));
	var_dump($texto2);
?>