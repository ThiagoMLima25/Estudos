<?php
	/* 
	 * \r - retorno 
	 * \n - nova linha
	 * \t - tabular
	 */ 
	//fopen parametros -> nome do arquivo, ação(Alterar, ler, escrever)
	// $file = fopen("log.txt", "w+");
	$file = fopen("log.txt", "a+");

	fwrite($file, date("T-m-d H:i:s")."\r\n");

	fclose($file);
	echo "arquivo criado com sucesso";
?>