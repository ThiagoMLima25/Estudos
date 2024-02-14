<?php 
	require_once 'config.php';

	echo session_save_path();
	echo "<br><br>";
	var_dump(session_status());

	switch (session_status()) {
		case PHP_SESSION_DISABLED:
			echo "SESSÃO DESABILITADA.";
			break;
		case PHP_SESSION_NONE:
			echo "SESSÃO HABILITADA MAS NÃO EXISTE.";
			break;
		case PHP_SESSION_ACTIVE:
			echo "SESSÃO HABILITADA E ATIVA.";
			break;
		
		default:
			echo "VALOR INVÁLIDO.";
			break;
	}
?>