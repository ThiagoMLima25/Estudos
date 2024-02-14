<!DOCTYPE html>
<html>
<head>
	<title>Acessando JSON</title>
</head>
<body>
	<button onclick="xmlfirst()">first XMLHttpRequest</button>
	<button onclick="xmlsecond()">second XMLHttpRequest</button>
	<p id="retorno">first</p>
	<p id="array">second</p>

	<script type="text/javascript">
/*	O primeiro método não está exibindo os valores convertidos em JSON do arquivo php 
	(json_file.php). O método xmlfirst funciona normalmente se o arquivo estiver no 
	formato e formatado em JSON.
*/
	function xmlfirst(){
		var xmlhttp = new XMLHttpRequest();
		//JavaScript no cliente, usando uma chamada AJAX para solicitar o arquivo PHP
		xmlhttp.onreadystatechange = function() {
		    if (this.readyState == 4 && this.status == 200) {
				//Use JSON.parse() para converter o resultado em um objeto JavaScript
		        var myObj = JSON.parse(this.responseText);
		        document.getElementById("retorno").innerHTML = myObj.nome;
		    }
		};
		//Acessando arquivo JSON 
//		xmlhttp.open("GET", "json/json_demo.json", true);
		
		//Acessando Arquivo PHP
		xmlhttp.open("GET", "php/json_file.php", true);
		xmlhttp.send();
	}
	</script>

	<script>
	function xmlsecond(){
		var xmlhttp = new XMLHttpRequest();
    	xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            var myArr = JSON.parse(this.responseText);
            document.getElementById("array").innerHTML = myArr[1];
        }
    };
	//Acessando arquivo JSON    
//  xmlhttp.open("GET", "json/jsonArray.json", true);
	
	//Acessando Arquivo PHP
    xmlhttp.open("GET", "php/jsonArray_file.php", true);
    xmlhttp.send();
	}	
	</script>