<?php
	$dados = [
		"Empresa_A" => "Google",
		"Empresa_B" => "Microsoft",
		"Empresa_C" => "Apple"
	];

	setcookie("Nome_do_Cookie", json_encode($dados), time() + 3600);
	echo "Cookie Criado.";
?>