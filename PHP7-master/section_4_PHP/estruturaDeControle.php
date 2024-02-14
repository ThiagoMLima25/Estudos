<?php
	$suaIdade = 25; $idadeCrianca = 12; $idadeJovem = 18; $idadeIdoso = 25;

	if($suaIdade <= $idadeCrianca) {
		echo "Criança";
	} elseif($suaIdade <= $idadeJovem) {
		echo "Adolescente";
	} elseif($suaIdade <= $idadeIdoso) {
		echo "Adulto";
	}else {
		echo "Idoso";
	}

echo "<br>";
	
	echo ($suaIdade <= $idadeJovem ) ? "Menor de idade" : "Maior de idade" ;

echo "<br><br>";

	date_default_timezone_set("America/Sao_Paulo");
	$diaDaSemana = date("w");
	// $diaDaSemana = 12;
	switch ($diaDaSemana) {
		case 0:
			echo "Domingo";
			break;
		case 1:
			echo "Segunda-feira";
			break;
		case 2:
			echo "Terça-feira";
			break;
		case 3:
			echo "Quarta-feira";
			break;
		case 4:
			echo "Quinta-feira";
			break;
		case 5:
			echo "Sexta-feira";
			break;
		case 6:
			echo "Sabádo";
			break;
		default:
			echo "Data Inválida";
			break;
	}

echo "<br><br>";

	for ($i = 0; $i <= 1000; $i+=5) {
		if($i > 200 && $i < 800) continue;
		if($i == 900) break;
		echo $i."<br>";
	}

echo "<br><br>";
echo "<select>";
	for ($z = date("Y"); $z >= date("Y")-100; $z--) { 
		echo "<option value='".$z."''>".$z."</option>";
	}
echo "</select>";
echo "<br><br>";

$meses = array("Janeiro","Fevereiro","Março","Abril","Maio","Junho","Julho","Agosto","Setembro","Outubro","Novembro","Dezembro");

foreach ($meses as $index => $itemMeses) {
echo "O Indice é".$index."<br>";
echo "O mês é ".$itemMeses."<br><br>";
}

echo "<br><br>";

	$condition = true;

	while ($condition) {
		$numero = rand(1, 10);
		
		if($numero == 3) {
			echo "Sucesso.";
			$condition = false;
		}

		echo $numero;
	}

echo "<br><br>";

$total = 150;
$desconto = 0.9;

do {
	$total *= $desconto;
} while ($total > 100);

echo $total;
?>