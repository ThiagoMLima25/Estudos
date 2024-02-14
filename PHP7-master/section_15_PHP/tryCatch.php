<?php
	try {
		throw new Exception("Page not found", 404);
	} catch (Exception $e) {
		echo json_encode([
			"message"	=> $e->getMessage(),
			"line"		=> $e->getLine(),
			"file"		=> $e->getFile(),
			"code"		=> $e->getCode()
		]);
	}
?>