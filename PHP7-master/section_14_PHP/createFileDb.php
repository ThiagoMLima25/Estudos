<?php 
	require 'config.php';

	$sql = new Sql();
	$usuarios = $sql->select("SELECT * FROM tb_usuarios");
	//Arquivo CSV é um arquivo formatado onde cada coluna é um tipo de informação e seu delimitador normalmente é uma virgula mas pode ser qualquer outro.

	$headers = [];

	foreach ($usuarios[0] as $key => $itemsUsuarios) {
		array_push($headers, ucfirst($key));
	}

	$file = fopen("usuarios.csv", "w+");

	fwrite($file, implode(",", $headers)."\r\n");

	foreach ($usuarios as $itemsUsuarios) {
		$data = [];
		foreach ($itemsUsuarios as $key => $dados) {
			array_push($data, $dados);
		}
		fwrite($file, implode(",", $data)."\r\n");
	}

	fclose($file);
?>