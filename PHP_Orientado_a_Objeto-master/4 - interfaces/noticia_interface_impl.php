<?php 
	include_once 'noticia_interface.class.php';
	class Noticia implements iNoticia
	{
		protected $titulo;
		protected $texto;

		function setTitulo($valor){
			$this->titulo = $valor;
		}

		function setTexto($valor){
			$this->texto = $valor;
		}

		function exibeNoticia(){
			echo "<center>";
			echo "<b>". $this->titulo ."</b><p>";
			echo $this->texto;
			echo "</center><p>";
		}
	}

	$titulo = 'Entendendo Interfaces';
	$texto = 'Dizer que uma classe implementa uma interface e não definir todos os métodos na interface resultará em um erro fatal exibindo quais métodos não foram implementados.';

	$objNoticia = new Noticia;
	$objNoticia->setTitulo($titulo);
	$objNoticia->setTexto($texto);
	$objNoticia->exibeNoticia();

	echo "<pre>";
		print_r($objNoticia);
	echo "</pre>";
?>