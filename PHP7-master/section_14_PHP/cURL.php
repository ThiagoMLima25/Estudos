<?php 
	$cep = "01310100";
	$link = "https://viacep.com.br/ws/$cep/json/";

	$cURL = curl_init($link);
	curl_setopt($cURL, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($cURL, CURLOPT_SSL_VERIFYPEER, 0);

	$response = curl_exec($cURL);
	curl_close($cURL);

	print_r(json_decode($response, true));
?>