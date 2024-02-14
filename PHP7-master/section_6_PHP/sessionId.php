<?php 
	session_id("0b38rtkrjkvtb0dkis6fpnpi6s");
	require_once 'config.php';

	echo session_regenerate_id(); //Regenera a sessão o usuário.
	echo "<br><br>";
	echo session_id();
	echo "<br><br>";

	var_dump($_SESSION);
?>