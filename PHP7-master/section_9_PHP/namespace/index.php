<?php 
	require_once "config.php";

	//Caso utilize classes de mesmo nome é necessário utilizar alias(apelidos)
	use Cliente\Cadastro;
	use User\Cadastro AS UserCadastro;

	$objCadastro = new Cadastro();
	$objCadastro->setNome("Thiago Martins de Lima");
	$objCadastro->setEmail("thiagolima@host.com");
	$objCadastro->setSenha("123456");

	echo $objCadastro;
	echo "<br><br>";
	$objCadastro->registrarVenda();
	
	echo "<br><br>";
	$objUser = new UserCadastro;
	$objUser->setNome("Larissa");
	echo $objUser->getNome();
	echo "<br>";
	echo $objUser->novo();
?>