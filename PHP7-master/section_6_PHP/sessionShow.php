<?php 
	require_once 'config.php';
	// session_start();

	// session_unset();	//limpa todas váriaveis da sessão mas você ainda é recomhecido como o mesmo usuário.
	echo (isset($_SESSION['nome'])) ? $_SESSION['nome'] : "Sessão não foi criada." ;
	echo "<br><br>";
	echo session_id();

	//session_destroy();	//limpa todas váriaveis da sessão e remove o usuário.
?>