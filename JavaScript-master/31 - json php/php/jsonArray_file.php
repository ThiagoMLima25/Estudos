<?php
	//Criando Array e convertendo para json
	$myArr = array("Thiago", "Maria", "Peter", "Park");
	$myJSON = json_encode($myArr);

	echo $myJSON;
?>