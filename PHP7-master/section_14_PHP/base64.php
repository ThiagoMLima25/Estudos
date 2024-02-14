<?php 
	$fileName = "Star_Wars_Kylo.jpg";

	$base64 = base64_encode(file_get_contents($fileName));

	$fileInfo = new finfo(FILEINFO_MIME_TYPE);

	$mineType = $fileInfo->file($fileName);

	$base64encode = "data:". $mineType .";base64,". $base64;
?>
<img src="<?=$base64encode ?>">