<?php 
	$image = imagecreatefromjpeg("certificado.jpg");

	$titleColor = imagecolorallocate($image, 0, 0, 0);
	$gray = imagecolorallocate($image, 100, 100, 100);

	imagettftext($image, 32, 0, 350, 250, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts". DIRECTORY_SEPARATOR ."Bevan". DIRECTORY_SEPARATOR ."Bevan-Regular.ttf", "CERTIFICADO");
	imagettftext($image, 32, 0, 375, 350, $titleColor, __DIR__.DIRECTORY_SEPARATOR."fonts". DIRECTORY_SEPARATOR ."Playball". DIRECTORY_SEPARATOR ."Playball-Regular.ttf", "Thiago Martins");
	imagestring($image, 3, 440, 370, utf8_decode("Concluido em ".date("d/m/Y")), $titleColor);

	header("Content-type: image/jpg");
	imagejpeg($image);
	imagedestroy($image);
?>