<?php 
	$email = $_POST["email"];

	$cURL = curl_init();
	curl_setopt($cURL, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
	curl_setopt($cURL,CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($cURL,CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($cURL,CURLOPT_POSTFIELDS,http_build_query(["secret"	=>	"6LdccpUUAAAAAJqjTzOsJvLrtWgCxm-uX8azkww7", "response"	=>	$_POST["g-recaptcha-response"], "remoteip"	=>	$_SERVER["REMOTE_ADDR"]]));
	curl_setopt($cURL, CURLOPT_RETURNTRANSFER, true);

	$recaptcha = json_decode(curl_exec($cURL), true);
	curl_close($cURL);

	if(!$recaptcha["success"]) {
		header("Location: reCaptcha.php");
	}
	
	echo "recaptcha executado com sucesso.";
?>