<?php
	$id = (isset($_GET["id"])) ? $_GET["id"] : 1;

	// if(!is_numeric($id) || strlen($id) > 5) {
	// 	exit("Pegamos você");
	// }
	
	$connection = new mysqli("localhost", "root", "", "dbphp7");

	if($connection->connect_error) {
		die("Error: ".$connection->connect_error);
	}

	$result = $connection->query("SELECT * FROM tb_usuarios WHERE idUsuario = $id");

	while($rowAssoc = mysqli_fetch_object($result)) {
		var_dump($rowAssoc);
	}
?>