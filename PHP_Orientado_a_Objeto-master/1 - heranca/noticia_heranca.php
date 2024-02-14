<?php 
	include_once("noticia.class.php");

	class NoticiaPrincipal extends Noticia
	{
		public $imagem;

		public function setImage($valor)
		{
			$this->imagem = $valor;
		}

		function exibeNoticia()
		{
			echo "<center>";
			echo "<img src=../". $this->imagem ." height='50'><p>";
			echo "<b>". $this->titulo ."</b><p>";
			echo $this->texto;
			echo "</center><p>";
		}
	}

	$notPrincipal = new NoticiaPrincipal();
	$notPrincipal->titulo = "Esta classe herdou as propriedades da classe Noticia";
	$notPrincipal->texto = "Com isso podemos adicionar novas funcionalidades como a imagem";
	$notPrincipal->imagem = "php.png";
	$notPrincipal->exibeNoticia();

?>