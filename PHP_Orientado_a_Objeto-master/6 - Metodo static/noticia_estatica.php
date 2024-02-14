<?php 

	include_once 'noticia_estatica.class.php';

	class NoticiaPrincipal extends Noticia
	{
		private $imagem;

		function setImagem($valor)
		{
			$this->imagem = $valor;
		}

		function exibeNoticia()
		{	
			echo "<center>";
			echo "'Utilizando static da classe pai' <b>" . parent::$nome_noticia . "</b><p>";
			echo "<img src=../". $this->imagem ." height='50'><p>";
			echo "<b>". $this->titulo ."</b><p>";
			echo $this->texto;
			echo "</center><p>";
		}
	
	}

	$titulo = 'Vestibular da Unicamp';
	$texto = 'Um dos maiores vestibulares do país tem número recorde de inscritos';
	$imagem = 'php.png';

	$objnot = new NoticiaPrincipal;
	$objnot->setTitulo($titulo);
	$objnot->setTexto($texto);
	$objnot->setImagem($imagem);
	$objnot->exibeNoticia();
?>