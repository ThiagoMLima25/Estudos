<?php 
//Operadores de string
echo "Operadores de string <br>";
	$nome = "Ricky";	//Atribuição
	echo $nome . " Medina";	//Concatenação

echo "<br>";
	$nome.= " Martin";
	echo $nome;

echo "<br><br> Operadores de Atribuição <br>";
	$valor = 0;
	echo $valor;

echo "<br><br>";

	$valor += 100;
	echo $valor;

echo "<br><br>";

	$valor += 25;
	echo $valor;

echo "<br><br>";

	$valor -= 5;
	echo $valor;

echo "<br><br>";

	$valor *= .9;
	echo $valor;

echo "<br><br> Operadores aritméticos <br>";
	$a = 10; $b = 2;

	echo $a + $b;	//Soma

echo "<br><br>";

	echo $a - $b;	//Subtração

echo "<br><br>";

	echo $a * $b;	//Multiplicação

echo "<br><br>";

	echo $a / $b;	//Divisão

echo "<br><br>";

	echo $a % $b;	//Módulo

echo "<br><br>";

	echo $a ** $b;	//Exponenciação

echo "<br><br> Operadores aritméticos<br>";
$z = 2; $y = 10;

var_dump($z > $y);
echo "<br>";
var_dump($z < $y);
echo "<br>";
var_dump($z == $y);
echo "<br>";
var_dump($z === $y);
echo "<br>";
var_dump($z != $y);

echo "<br><br>Space Ship<br>";
$t = 1; $m = 1;
var_dump($t <=> $m);

echo "<br><br>NULL COALESCE<br>";
$u = NULL; 
$p = 8;
$n = 7;

echo $u ?? $p ?? $n;

echo "<br><br> Operadores de incremento <br>";
$c = 1;
echo ++$c;
echo "<br>";
echo --$c;
?>