<?php 
	/*
		Interfaces permitem a criação de código que especifica quais métodos uma
		classe deve implementar, sem ter que definir como esses métodos serão tratados.
		Uma interface não é considerada uma Classe e sim uma Entidade.
	*/
		interface iNoticia
		{
			public function setTitulo($valor);
			public function setTexto($valor);
			public function exibeNoticia();
		}
?>