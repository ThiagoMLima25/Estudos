<?php 
	function error_handler($code, $message, $file, $line) {
		echo json_encode([
			"code"		=>	$code,
			"message"	=>	$message,
			"line"		=>	$line,
			"file"		=>	$file
		]);
	}

	set_error_handler("error_handler");

	echo 100 / 0;
?>