<?php
	$dsn = 'mysql:dbname=dbphp7;host=127.0.0.1';
	$user = 'root';
	$password = '';

	$connection = new PDO($dsn, $user, $password);
	$stmt = $connection->prepare("DELETE FROM tb_usuarios WHERE idUsuario = :ID");

	$id = 5;

	$stmt->bindParam(":ID", $id);
	$stmt->execute();

	echo "usuário excluido com sucesso.";
?>