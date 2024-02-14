<?php 
	$pessoas = array();
	array_push($pessoas, array(
		"nome" 	=> "Thiago Martins",
		"idade" => 25
	));

	array_push($pessoas, array(
		"nome" 	=> "Larissa Pimentel",
		"idade" => 20
	));

	echo $pessoasJsonEncode = json_encode($pessoas);
	
echo "<br><br>";

	$pessoasJsonDecode =  json_decode($pessoasJsonEncode);
	var_dump($pessoasJsonDecode);
?>