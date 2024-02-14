<?php 
	function __autoload($classe)
	{
		if($classe == "Noticia")
		{
			echo "chamando a classe <b>$classe</b>";
			include_once("noticia_metodo_magico_autoLoad.php");
		}
	}

	class NoticiaPrincipal extends Noticia
	{
		public $imagem;
		
		function setImagem($valor)
		{
			$this->imagem = $valor;
		}
		
		function exibeNoticia()
		{
			echo "<center>";
			echo "<u><img src=../". $this->imagem ." height='50'></u><p>";
			echo "<b>". $this->titulo ."</b><p>";
			echo $this->texto;
			echo "</center><p>";
		}
	}

	$notPrincipal = new NoticiaPrincipal();
	$notPrincipal->titulo = "Trabalhando com Auto Load";
	$notPrincipal->texto = "Com isso chamamos a classe antes que aconteça algum erro.";
	$notPrincipal->imagem = "php.png";
	$notPrincipal->exibeNoticia();
?>