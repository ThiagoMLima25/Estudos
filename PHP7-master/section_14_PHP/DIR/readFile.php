<?php 
	$imagens = scandir("imagens");
	$data = [];

	foreach ($imagens as $itemsImagens) {
		if(!in_array($itemsImagens, [".", ".."])) {
			$fileName = "imagens" . DIRECTORY_SEPARATOR . $itemsImagens;
			$info = pathinfo($fileName);
			$info["size"] = filesize($fileName);
			$info["modified"] = date("d/m/Y H:i:s", filemtime($fileName));
			$info["url"] = "http://127.0.0.1:8080/udemy_PHP7_2019/section_14_PHP/DIR/".str_replace("\\", "/", $fileName);

			array_push($data, $info);
		}
	}

	echo json_encode($data, JSON_UNESCAPED_SLASHES);
?>