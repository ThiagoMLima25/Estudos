<?php 
	require_once("config.php");

	$sql = new Sql();
	$usuarios = $sql->select("SELECT * FROM tb_usuarios");

	echo json_encode($usuarios);

	$user = new User();
	$user->findByIdUsuario(1);
	
	echo "<br><br>";

	var_dump($user);
	
	echo "<br><br>";
	//Carrega uma lista de usuários
	$lista = User::getUserList();
	echo json_encode($lista);
	
	echo "<br><br>";
	//Carrega uma lista de usuários buscando pelo login
	$getUserLogin = User::getUserLogin("r");
	echo json_encode($getUserLogin);

	echo "<br><br>";
	//Carrega um usuário usando a senha e o login
	$userLogin = new User();

	try {
		$userLogin->login("user", "12345");
		echo $userLogin;
	} catch (Exception $e) {
		echo $e->getMessage();
	}

	echo "<br><br>";
	//Inserindo um usuário e recuperando dados via procedure
	$aluno = new User("Thiago", "Thiago");
	$aluno->insert();

	echo $aluno;

	echo "<br><br>";
	//Alterando usuário
	$usuario = new User();
	$usuario->findByIdUsuario(8);
	$usuario->update("professor", "!@#$%");

	//Deletando um usuário
	$usuarioDelete = new User();
	$usuarioDelete->findByIdUsuario(8);
	$usuarioDelete->delete();
	echo $usuarioDelete;
?>