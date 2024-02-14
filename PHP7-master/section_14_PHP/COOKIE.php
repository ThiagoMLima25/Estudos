<?php 
	if(isset($_COOKIE["Nome_do_Cookie"])) {
		$objCookie = json_decode($_COOKIE["Nome_do_Cookie"]);
		echo $objCookie->Empresa_A."<br>";
		echo $objCookie->Empresa_B."<br>";
		echo $objCookie->Empresa_C."<br>";
	}

?>