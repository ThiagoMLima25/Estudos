<?php 
	/*
		✔ __get : Este método pode ser declarado em qualquer classe e será executado toda vez que for solicitado o retorno do valor de alguma propriedade de um objeto. Como em __set(), este método funciona apenas com as propriedades que estiverem definidas como protected ou private.
	*/
		class Noticia
		{
			protected $titulo;

			function __get($propriedade)
			{
				if(($propriedade == "titulo"))
				{
					echo "Retornando o valor da propriedade <b>$propriedade</b>.";
					return $this->titulo;
				}
			}

			function setTitulo($valor)
			{
				$this->titulo = $valor;
			}
		}

		$titulo = "Trabalhando com os métodos mágicos, utilizando __get";

		$objNoticia = new Noticia;
		$objNoticia->setTitulo($titulo);
		echo "<p>Título: $objNoticia->titulo </p>";
?>