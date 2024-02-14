<?php 
	/*
		Quando criamos um método abstrato, fazemos com que ela seja implementada em todas as classes que herdarem dessa classe abstrata.
	*/
	include_once 'noticia_abstrata.class.php';

		class NoticiaPrincipal extends Noticia
		{
			private $imagem;

			public function setTexto($valor)
			{
				$this->texto = $valor;
			}

			function setImagem($valor)
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

		$titulo = 'Classes Abstratas';
		$texto = 'Em orientação a objetos usamos classes abstratas para dar';
		$texto .= ' funcionalidades iguais a objetos diferentes.';
		$imagem = 'php.png';
	
		$objnot = new NoticiaPrincipal;
		$objnot->setTitulo($titulo);
		$objnot->setTexto($texto);
		$objnot->setImagem($imagem);
		$objnot->exibeNoticia();

		echo "<pre>";
			print_r($objnot);
		echo "</pre>";
?>