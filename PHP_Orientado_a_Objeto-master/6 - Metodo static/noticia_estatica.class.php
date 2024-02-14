<?php 
	/*
		Quando definimos métodos ou propriedades como estáticos (static), estamos permitindo que estes possam ser chamados externamente sem haver a necessidade de estarem no contexto de um objeto, isto é, não é necessário instanciar um objeto para poder acessá-los. Para ter
		acesso a uma propriedade estática dentro do corpo da classe temos que usar a palavra self::
	*/
	class Noticia
	{
		public static $nome_noticia = "'Utilizando static'";
		protected $titulo;
		protected $texto;

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
			echo "Noticia:<b>". self::$nome_noticia . "</b>";
			echo "<b>". $this->titulo ."</b><p>";
			echo $this->texto;
			echo "</center></p>";
		}
	}
		$titulo = " Trabalhando com métodos estáticos"; 
		$texto = "Quando utilizamos o modificador static em atributos, ao invés de serem
		alocados n atributos para n objetos, ";
		$texto .= "é alocado apenas 1 atributo para n objetos, onde todos os objetos têm acesso ao mesmo atributo.";

		$objNoticia = new Noticia;
		$objNoticia->setTitulo($titulo);
		$objNoticia->setTexto($texto);
		$objNoticia->exibeNoticia();

		echo Noticia::$nome_noticia;
?>