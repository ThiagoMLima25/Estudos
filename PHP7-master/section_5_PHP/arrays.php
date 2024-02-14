<?php 
	$frutas = array("Abacate", "Laranja","Morango","Banana");

	print_r($frutas);

	$carros[0][0] = "GM";
	$carros[0][1] = "Cobalt";
	$carros[0][2] = "Onix";
	$carros[0][3] = "Camaro";

	$carros[1][0] = "Ford";
	$carros[1][1] = "Fiesta";
	$carros[1][2] = "Fusion";
	$carros[1][3] = "Eco Sport";

	print_r($carros);
	echo "<br>";
	echo $carros[0][3];
	echo "<br>";
	echo end($carros[1]);

	$pessoas = array();
	array_push($pessoas, array(
		"nome" 	=> "Thiago Martins",
		"idade" => 25
	));

	array_push($pessoas, array(
		"nome" 	=> "Larissa Pimentel",
		"idade" => 20
	));

	echo "<br><br>";

	print_r($pessoas[0]["nome"]);
	echo " - ";
	print_r($pessoas[0]["idade"]);

echo "<br><br>";

	print_r($pessoas[1]["nome"]);
	echo " - ";
	print_r($pessoas[1]["idade"]);

?>