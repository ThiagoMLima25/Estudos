<?php 
	/*
		Classes abstratas são classes que não podem ser instanciadas diretamente, sendo necessária a criação de uma sub-classe para conseguir utilizar suas características.
		As propriedades não podem ser definidas como abstratas.
		Aqui vemos o conceito de polimorfismo, ou seja, a possibilidade de dois ou mais objetos executarem a mesma ação.
	*/
		abstract class Noticia
		{
			protected $titulo;
			protected $texto;

			//Método Comum
			public function setTitulo($valor)
			{
				$this->titulo = $valor;
			}

			//Métodos abstratos - Os métodos abstratos não devem conter código, apenas definição.
			abstract public function setTexto($valor);
			abstract public function exibeNoticia();
		}
?>