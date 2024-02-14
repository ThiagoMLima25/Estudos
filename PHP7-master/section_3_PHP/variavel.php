<?php
	//Váriaveis fracamente tipadas
	$nome = "Thiago Martins de Lima";
	echo $nome."<br>";
	var_dump($nome);
	
	echo "<br><br>";

	//CamelCase é o padrão que ensina a prática de escrever palavras compostas ou frases, onde cada palavra é iniciada em maiúsculo e unidas sem espaço.
	$anoNascimento = 1993;
	$nomeCompleto = "Steven Carson";
	
	echo "Olá, eu sou ". $nomeCompleto ." e nasci no ano de ".$anoNascimento;
	
	echo "<br><br>";

	if(isset($nomeCompleto)) {
		echo $nomeCompleto;
	}

	unset($nomeCompleto);

	echo "<br><br>";

	//Tipos básicos de váriaveis
	$nome = "Hcode";				//String
	$site = 'www.hcode.com.br';		//String
	$ano = 1992;					//Int
	$salario = 5500.99;				//Float
	$bloqueado = false;				//Boolean

	//Tipos compostos de váriaveis
	//				  "[0]"      "[1]"	   "[2]"
	$frutas = array("abacaxi", "laranja", "manga");
	$nascimento = new DateTime();

	var_dump($nascimento);

	echo "<br><br>";

	$arquivo = fopen("variavel.php", "r");
	var_dump($arquivo);

	echo "<br><br>";

	$nulo = NULL;	//Nulo é ausência de valor - não existe.
	$string = "";	//Váriavel foi inciada mas não possue valor.

	//Váriaveis pré definidas/ Super globais - Podem ser acessiveis em qualquer lugar.
	$nome = $_GET["nome"];
	
	echo "<br><br>";
	
	$idade = (int)$_GET["idade"];
	var_dump($nome);
	var_dump($idade);
	
	echo "<br><br>";

	$ip = $_SERVER["REMOTE_ADDR"];
	echo $ip;

	echo "<br><br>";
	$scriptName = $_SERVER["SCRIPT_NAME"];
	echo $scriptName;
	
	/*

	URL - Uniform Resource Locator: se refere ao localizador, o Host que você quer acessar determinado recurso. O objetivo da URL é associar um endereço remoto com um nome de recurso na Internet.

	Exemplo de URL
		woliveiras.com.br
		woliveiras.org
		woliveiras.xxx

	URN – Uniform Resource Name: é o nome do recurso que será acessado e também fará parte da URI.

	Exemplo de URN
		home.html
		contato.php
		servicos.html

	URI - Uniform Resource Identifier: é o identificador do recurso. Pode ser uma imagem, uma página, etc, pois tudo o que está disponível na internet precisa de um identificador único para que não seja confundido.
	
	Exemplo de URI
		http://woliveiras.com.br/desenvolvedor-front-end/
		http://pt.wikipedia.org/wiki/Hypertext_Transfer_Protocol

	A URI une o Protocolo (http://) ao localizador do recurso (URL - woliveiras.com.br) e o nome do recurso (URN - /desenvolvedor-front-end/) para que você acesse as coisas na Web.
	
	*/
?>