<?php 
	/******************** TEORIA ********************
		----- Programação Orientada a Objetos -----
		
			A Programação Orientada a Objetos (POO) é uma boa prática de programação para a
		criação e gerenciamento de projetos mais facilmente.
		
		-> Os 4 pilares da Programação Orientada a Objetos
		Abstração - O primeiro ponto é darmos uma identidade ao objeto que iremos criar. Essa identidade deve ser única dentro do sistema para que não haja conflito. Na maior parte das linguagens, há o conceito de pacotes (ou namespaces). A identidade do objeto não pode ser repetida dentro do pacote.
		A segunda parte diz respeito a características do objeto são as propriedades. Por exemplo, as propriedades de um objeto “Cachorro” poderiam ser “Tamanho”, “Raça” e “Idade”.
		A terceira parte é definirmos as ações que o objeto irá executar. Essas ações, ou eventos, são chamados de métodos. Esses métodos podem ser extremamente variáveis, desde “Andar()”, “Latir()” em um objeto cachorro.

		Encapsulamento - Se trata de um dos elementos que adicionam segurança à aplicação em uma programação orientada a objetos pelo fato de esconder as propriedades, criando uma espécie de caixa preta. A maior parte das linguagens orientadas a objetos implementam o encapsulamento baseado em propriedades privadas, ligadas a métodos especiais chamados getters e setters, que irão retornar e setar o valor da propriedade, respectivamente.

		Herança - O reuso de código é uma das grandes vantagens da programação orientada a objetos. Muito disso se dá por uma questão que é conhecida como herança. Ou seja, o objeto filho herda as caracteristicas do objeto pai. Essa característica otimiza a produção da aplicação em tempo e linhas de código.

		Polimorfismo - Como sabemos, os objetos filhos herdam as características e ações. Entretanto, em alguns casos, é necessário que as ações para um mesmo método seja diferente. Em outras palavras, o polimorfismo consiste na alteração do funcionamento interno de um método herdado de um objeto pai.

		Identificando Classes, Objetos, Propriedades e Métodos: Exemplo 1
		Classe - É a estrutura mais fundamental para a criação de um objeto. Uma
		classe nada mais é do que um conjunto de variáveis (propriedades ou atributos) e
		funções (métodos), que definem o estado e o comportamento do objeto. 
		
		Propriedades – Caracteristicas do objeto.
		Métodos – Ações que o objeto executa.
		
	*/

	class Noticia{
	//Como os atributos são do tipo public, podemos atribuir valores diretamente, sem a necessidade de utilizar os métodos.	
		public $titulo;
		public $texto;
	
		function setTitulo($valor)
		{
			$this->titulo = $valor;
		}

		function setTexto($valor)
		{
			$this->texto = $valor;
		}

		function exibeNoticia()
		{
			echo "<center>";
			echo "<b>". $this->titulo ."</b><p>";
			echo $this->texto;
			echo "</center></p>";
		}
	}
		//instanciando a classe Noticia e criando o Objeto not
		$not = new Noticia;
		$not->titulo = "PHP Avançado";
		$not->texto = "POO, XML etc";
		$not->exibeNoticia();
?>