<?php 
	/**
	 * Classe representa um conjunto de atributos e métodos.
	 * Atributos são váriaveis que ganham mais recursos.
	 * O objeto é uma variavel que representa uma classe.
	 */
	class Pessoa
	{
		//Atributos
		public $nome;

		//Métodos
		public function falar() {
			return "O meu nome é ". $this->nome;			
		}
	}

	$objPessoa = new Pessoa();
	$objPessoa->nome = "Thiago Martins";
	echo $objPessoa->falar();
?>