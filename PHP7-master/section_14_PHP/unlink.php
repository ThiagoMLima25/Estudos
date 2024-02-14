<?php 
	$file = fopen("test.txt", "w+");
	fclose($file);

	unlink("test.txt");
	echo "arquivo removido com sucesso";

?>