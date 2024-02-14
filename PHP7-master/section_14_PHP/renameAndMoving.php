<?php
	$dirOne = "folderOne";
	$dirTwo = "folderTwo";

	if(!is_dir($dirOne)) mkdir($dirOne);
	if(!is_dir($dirTwo)) mkdir($dirTwo);

	$fileName = "REAME.txt";

	if(!file_exists($dirOne . DIRECTORY_SEPARATOR . $fileName)) {
		$file = fopen($dirOne . DIRECTORY_SEPARATOR . $fileName, "w+");
		fwrite($file, "Hello!");
		fclose($file);
	}
	//Renomeia/Move
	rename(
		$dirOne . DIRECTORY_SEPARATOR . $fileName,	//Origem
		$dirTwo . DIRECTORY_SEPARATOR . $fileName	//Destino
	);

	echo "Arquivo movido com sucesso.";
?>