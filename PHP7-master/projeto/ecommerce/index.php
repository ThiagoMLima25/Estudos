<?php
	session_start();
	
	require_once("vendor/autoload.php");

	use \Slim\Slim;
	use \Hcode\Page;
	use \Hcode\PageAdmin;
	use \Hcode\Model\User;

	$app = new Slim();
	$app->config('debug', true);

	// $app->get('/', function() {
	// 	$page = new Page();
	// 	$page->setTpl("index");
	// });

	$app->get('/', function() {
		$pageAdmin = new PageAdmin();
		$pageAdmin->setTpl("index");
	});

	$app->get('/login', function() {
		User::verifyLogin();

		$pageAdmin = new PageAdmin([
			"header" => false,
			"footer" => false,
		]);
		$pageAdmin->setTpl("login");
	});

	$app->post('/', function() {
		User::login($_POST["login"], $_POST["password"]);
		exit();
		header("Location: /");
	});

	$app->run();
 ?>