<?php
	$pasta = "arquivos";
	$permission = "0775";
	/**
	 * Permissões
	 * 0 - Não existe permissão
	 * 1 - Permissão de execução
	 * 2 - Permissão de gravação
	 * 3 - Permissão de execução e gravação
	 * 4 - Permissão de leitura
	 * 5 - Permissão de leitura e execução
	 * 6 - Pemissão de leitura e gravação
	 * 7 - Permissão total
	 * 
	 * 	 7	  7		5
	 * Root Group Others
	 */
	if(!is_dir($pasta)) mkdir($pasta);

	echo "Diretório criado com sucesso.";
?>