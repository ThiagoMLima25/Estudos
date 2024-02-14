<?php
	$dsn = 'mysql:dbname=dbphp7;host=127.0.0.1';
	$user = 'root';
	$password = '';

	$connection = new PDO($dsn, $user, $password);
	$stmt = $connection->prepare("SELECT * FROM tb_usuarios");
	$stmt->execute();

	$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

	foreach ($results as $itemResults) {
		foreach ($itemResults as $key => $value) {
			echo "<strong>". $key .": </strong>". $value ."<br>";
		}
		echo "----------------------------------------------------------<br>";
	}
?>