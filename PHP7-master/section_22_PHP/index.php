<?php
	require_once("vendor/autoload.php");

	$app = new \Slim\Slim();

	$app->get('/', function() {
	    echo json_encode([
	    	"date"	=> date("d/m/Y")
	    ]);
	});

	$app->get('/hello/:name', function ($name) {
	    echo "Hello, " . $name;
	});

	$app->notFound(function () use ($app) {
	    $app->render('404.html');
	});

	$app->run();
?>