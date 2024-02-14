<?php
	/**
	 * A sessão é criada ao acessar um site. Onde é criado um arquivo temporário na sua máquina e no servidor.
	 * Váriaveis de sessão tem duração em média de 20 minutos.
	 * Pode definir no arquivo php.ini iniciar a sessão automáticamente.
	 * Se o usuário não tiver acesso as pastas temporárias não é possivel criar uma váriavel de sessão.
	 */
	require_once 'config.php';
	// session_start();

	$_SESSION['nome'] =  "Thiago Martins de Lima";

?>