<?php 
	/**
	 * Encapsulamento
	 * public - Acessado de qualquer lugar
	 * protected - Permite acessos de dentro da própria classe ou de quem herda as propriedades da classe.
	 * private - Permite acesso apenas dentro da classe.
	 */
	class Pessoa
	{
		public $nome = "Rasmus Lerdorf";
		protected $idade = 48;
		private $senha = "123456";

		public function dados() {
			echo $this->nome."<br>";
			echo $this->idade."<br>";
			echo $this->senha."<br>";
		}
	}

	class Programador extends Pessoa
	{
		private $senha = "abcdefg";

		public function dados() {
			var_dump($this);
			echo "<br><br>";
			echo get_class($this);
			echo "<br>";
			var_dump(get_class_methods($this));
			echo "<br>";
			echo get_parent_class($this);
			echo "<br><br>";

			echo $this->nome."<br>";
			echo $this->idade."<br>";
			echo $this->senha."<br>";
		}
	}

	$objPessoa = new Pessoa();
	$objPessoa->dados();

	echo "<br>";
	
	$objPessoa = new Programador();
	$objPessoa->dados();
	// echo $objPessoa->senha."<br>";
?>