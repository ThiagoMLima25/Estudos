<?php
	try {  
		$connection = new PDO("sqlsrv:Database=dbphp7;server=LAPTOP-BLAS18GD;ConnectionPooling=0;", NULL, NULL);
	   $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );  
	} catch( PDOException $e ) {  
		echo $e->getMessage();
	}

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