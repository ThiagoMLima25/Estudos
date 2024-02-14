<?php 
	function anonymous($callback) {
		//Processo lento
		$callback();
	}

	anonymous(function(){
		echo "Terminou.";
	});

echo "<br><br>";

	$fn = function($a) {
		var_dump($a);
	};

	$fn("Olá");
?>