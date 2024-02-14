<?php 
	/*
		Métodos mágicos são métodos com funcionalidades específicas e que podem ser utilizados de acordo com as nossas necessidades.
		✔__set : Este método pode ser declarado em qualquer classe e será executado toda vez que for atribuído algum valor à alguma propriedade do objeto. Para que este método funcione, estas propriedades devem estar definidas como protected ou private.
	*/

	class Noticia
	{
		public $titulo;
		public $texto;

		function __set($propriedade, $valor)
		{
			if(($propriedade == 'titulo') && (strlen($valor) > 40) )
			{
				echo "A propriedade <b> $propriedade </b> deve conter no máximo 40 caracteres<p>";
			}
		
			if(($propriedade == 'texto' && strlen($valor) > 100) )
			{		
				echo "A propriedade <b>$propriedade</b> deve conter no máximo 100 caracteres<p>";
			}
		}

		function exibeNoticia()
		{
			echo "<center>";
			echo "<b>". $this->titulo ."</b><p>";
			echo $this->texto;
			echo "</center><p>";
		}
	}
	
	$titulo = 'Utilizando métodos mágicos->__set';
	$texto = 'Métodos mágicos';

	//A função strlen() retorna o tamanho de uma string.
	$string_tit = strlen($titulo);
	echo "Titulo: ".$string_tit."<p>";

	$string_txt = strlen($texto);
	echo "Texto: ".$string_txt."<p>";

	$objNot = new Noticia;
	$objNot->titulo = $titulo; //Primeiro Parâmetro do método __set
	$objNot->texto = $texto;   //Segundo Parâmetro do método __set
	$objNot->exibeNoticia();

		echo "<pre>";
			print_r($objNot);
		echo "</pre>";
?>