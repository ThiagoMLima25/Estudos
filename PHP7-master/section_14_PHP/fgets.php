<?php 
	$fileName = "usuarios.csv";

	if(file_exists($fileName)) {
		$file = fopen($fileName, "r");

		$headers = explode(",", fgets($file));
		$arrData = [];

		while ($row = fgets($file)) {
			$rowData = explode(",", $row);
			$linha = [];

			for($i = 0; $i < count($headers); $i++) {
				$linha[$headers[$i]] = $rowData[$i];
			}

			array_push($arrData, $linha);
		}

		fclose($file);
		echo json_encode($arrData);
	}

?>