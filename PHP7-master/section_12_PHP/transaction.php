<?php
	$connection = new PDO("mysql:dbname=dbphp7;host=127.0.0.1", "root", "");

	$connection->beginTransaction();

	$stmt = $connection->prepare("DELETE FROM tb_usuarios WHERE idUsuario = ?");

	$id = 4;

	$stmt->execute([$id]);

	// $connection->rollback();
	$connection->commit();
	
	echo "usuário excluido com sucesso.";
?>