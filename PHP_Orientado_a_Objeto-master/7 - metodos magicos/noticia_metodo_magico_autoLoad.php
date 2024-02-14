<?php 
	/*
		A função __autoload(), que é automaticamente chamada quando se tenta usar uma classe que ainda não foi definida. Ao chamar essa função o “scripting engine” tem uma chance para carregar a classe antes que o PHP falhe com erro.
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

		function exibeNoticia()
		{
			echo "<center>";
			echo "<b>". $this->titulo ."</b><p>";
			echo $this->texto;
			echo "</center><p>";
		}
	}	
?>