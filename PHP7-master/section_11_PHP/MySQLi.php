<?php 
	$connection = new mysqli("localhost", "root", "", "dbphp7");

	if($connection->connect_error) {
		die("Error: ".$connection->connect_error);
	}

	$statment = $connection->prepare("INSERT INTO tb_usuarios (loginUsuario, senhaUsuario) VALUES (?, ?)");
	/**
	 * s - String, d - Double, i - Inteiro, b - blob
	 */
	$statment->bind_param("ss", $login, $pass);
	
	$login = "user";
	$pass = "12345";
	$statment->execute();

	$login = "root";
	$pass = "abcdef";
	$statment->execute();
?>