<?php
	class Noticia
	{
		/*
			Construtor : É um método que utiliza o nome reservado __construct() e que
			não precisa ser chamado da forma convencional, pois é executado
			automaticamente quando instanciamos um objeto a partir de uma classe. Sua
			utilização é indicada para rotinas de inicialização.
		*/	
		function __construct($valor_tit, $valor_txt)
		{
			$this->titulo = $valor_tit;
			$this->texto = $valor_txt;
		}
		
		function exibeNoticia()
		{
			echo "<center>";
			echo "<b>". $this->titulo ."</b><p>";
			echo $this->texto;
			echo "</center><p>";
		}
	}
		$not = new Noticia('Trabalhando com __construct','executado automaticamente assim que instanciamos a classe');
		$not->exibeNoticia();
?>