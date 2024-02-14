<?php
	$dsn = 'mysql:dbname=dbphp7;host=127.0.0.1';
	$user = 'root';
	$password = '';

	$connection = new PDO($dsn, $user, $password);
	$stmt = $connection->prepare("INSERT INTO tb_usuarios (loginUsuario, senhaUsuario) VALUES (:LOGIN, :PASSWORD)");

	$login = "Steve";
	$password = "steve@152";

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);
	$stmt->execute();

	echo "Inserido com sucesso.";
?>