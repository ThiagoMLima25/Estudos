<?php
	include_once('noticia_construct.class.php');
	//A palavra chave extends é usada em uma class declarations ou class expressions para criar uma classe filha de outra classe.
	class NoticiaPrincipal extends Noticia
	{
		public $imagem;
	
		function __construct($valor_tit, $valor_txt, $valor_img)
		{
			parent::__construct($valor_tit, $valor_txt);
			$this->imagem = $valor_img;
		}
	
		function exibeNoticia()
		{
			echo "<center>";
			echo "<u><img src=../". $this->imagem ." height='50'></u><p>";
			echo "<b>". $this->titulo ."</b><p>";
			echo $this->texto;
			echo "</center><p>";
		}
		//A função do __destruct é basicamente zerar variáveis, limpar dados de sessões, fechar conexões com banco de dados, etc.
		public function __destruct()
		{
			$this->imagem;
		}
	}

	$titulo = 'Trabalhando com __construct';
	$texto = 'Utilizando herança';
	$imagem = 'php.png';
	$not = new NoticiaPrincipal($titulo, $texto, $imagem);
	$not->exibeNoticia();
	/*
		O método construtor da classe Noticia é herdado e executado automaticamente na subclasse NoticiaPrincipal.
		Porém, as características específicas de NoticiaPrincipal não serão inicializadas pelo método construtor da classe pai.
		Caso a subclasse NoticiaPrincipal tenha declarado um método construtor, este mesmo método da classe Noticia não será herdado. Nesse caso podemos chamar o método construtor da Classe Noticia, através de uma chamada específica: parent::__construct().
	*/
?>