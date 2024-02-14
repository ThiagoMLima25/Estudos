<?php 
	/*
		✔ Public : Quando definimos uma propriedade ou método como public, estamos dizendo que suas informações podem ser acessadas diretamente por qualquer	script, a qualquer momento. Até este momento, todas as propriedades e	métodos das classes que vimos foram definidas dessa forma.

		✔ Protected : Quando definimos em uma classe uma propriedade ou método do tipo protected, estamos definindo que ambos só poderão ser acessados pela própria classe ou por seus herdeiros, sendo impossível realizar o acesso externo.
		
		✔ Private : Quando definimos propriedades e métodos do tipo private, só a própria classe pode realizar o acesso, sendo ambos invisíveis para herdeiros ou para classes e programas externos.
	*/
		class Noticia
		{
			protected $titulo;
			protected $texto;

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
				echo "</center><p>";
			}
		}

		class NoticiaPrincipal extends Noticia
		{
			public $imagem;

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
?>