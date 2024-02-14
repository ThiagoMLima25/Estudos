<?php 
	spl_autoload_register(function($className) {
		var_dump($className);echo "<br><br>";
		$dirClass = "class";
		$filePathName = $dirClass . DIRECTORY_SEPARATOR . $className .".php";

		if(file_exists($filePathName)) {
			require_once $filePathName;
		}
	});
?>