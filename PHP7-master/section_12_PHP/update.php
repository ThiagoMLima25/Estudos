<?php
	$dsn = 'mysql:dbname=dbphp7;host=127.0.0.1';
	$user = 'root';
	$password = '';

	$connection = new PDO($dsn, $user, $password);
	$stmt = $connection->prepare("UPDATE tb_usuarios SET loginUsuario = :LOGIN, senhaUsuario = :PASSWORD WHERE idUsuario = :ID");

	$login = "Jenny";
	$password = "562J&nny";
	$id = 2;

	$stmt->bindParam(":LOGIN", $login);
	$stmt->bindParam(":PASSWORD", $password);
	$stmt->bindParam(":ID", $id);
	$stmt->execute();

	echo "usuário atualizado com sucesso.";
?>