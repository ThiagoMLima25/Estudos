<?php 
	$connection = new mysqli("localhost", "root", "", "dbphp7");

	if($connection->connect_error) {
		die("Error: ".$connection->connect_error);
	}

	$result = $connection->query("SELECT * FROM tb_usuarios");
	$data = [];
	// while($rowArray = $result->fetch_array(MYSQLI_ASSOC)) {
	// 	var_dump($rowArray);
	// }

	while($rowAssoc = $result->fetch_assoc()) {
		array_push($data, $rowAssoc);
		// var_dump($rowAssoc);
	}

	echo json_encode($data);
	// while($rowObj = $result->fetch_object()) {
	// 	var_dump($rowObj);
	// }
?>