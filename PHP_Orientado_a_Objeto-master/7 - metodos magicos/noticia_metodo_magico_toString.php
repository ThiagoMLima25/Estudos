<?php
	/*
		O método __toString() é chamado toda vez que se invoca a função print ou echo para um objeto.
	*/
	class Noticia
	{
		public $titulo;
		public $texto;

		function setTitulo($valor)
		{
			$this->titulo = $valor;
		}

		function setTexto($valor)
		{
			$this->texto = $valor;
		}

		function __toString()
		{
			return $this->titulo ."<br>". $this->texto;
		}
	}

	$titulo = "Este é o tiutlo";
	$texto = "Este é o texto";

	$objNot = new Noticia;
	$objNot->setTitulo($titulo);
	$objNot->setTexto($texto);	
	echo $objNot;
?>