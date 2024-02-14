<!DOCTYPE html>
<html>
<head>
	<title>JSON PHP</title>
</head>
<body>
	<?php
		/*
			Um uso comum do JSON é ler dados de um servidor da web e exibir os dados em uma página da web.
			
			O PHP tem algumas funções internas para lidar com JSON.
			Objetos em PHP podem ser convertidos em JSON usando a função PHP json_encode()
		*/
	?>
	<?php
	/*	
	include_once("prop.php");

		$dadosObj = new dados();
		$dadosObj->nome = "Thiago";
		$dadosObj->idade = "24";
		$dadosObj->cidade = "Guarulhos";
		$dadosObj->estado = "Sao Paulo";
		$dadosObj->pais = "Brasil";

		foreach ($dadosObj as $eachObj){
			$obj = $eachObj;
			//Use json_encode() para converter objetos PHP em um JSON
			$json = json_encode($obj);
			echo $json;
		}*/
	echo "<br>";		
	//Criando Objeto e convertendo para json
		$dadosObj = (object)[];
		$dadosObj->nome = "Thiago";
		$dadosObj->idade = 24;
		$dadosObj->cidade = "Guarulhos";
		$dadosObj->estado = "Sao Paulo";
		$dadosObj->pais = "Brasil";
		var_dump($dadosObj);
		echo "<br><br>";	
		$json = json_encode($dadosObj);

		echo $json;
	?>
