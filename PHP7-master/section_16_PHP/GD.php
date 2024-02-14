<?php
	header("Content-Type:image/png");

	$image = imagecreate(256, 256);

	$white = imagecolorallocate($image, 255, 255, 255);
	$black = imagecolorallocate($image, 0, 0, 0);
	$red = imagecolorallocate($image, 255, 0, 0);
	$blue = imagecolorallocate($image, 0, 255, 0);
	$green = imagecolorallocate($image, 0, 0, 255);

	imagestring($image, 5, 10, 10, "Curso PHP", $red);

	imagepng($image);
	imagedestroy($image);
?>