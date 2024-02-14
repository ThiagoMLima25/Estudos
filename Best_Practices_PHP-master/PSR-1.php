<?php 
	/**
	 * -> Tags
	 * 	- Arquivos PHP DEVEM usar somente as tags <?php e <?=
	 *  - Codificação de arquivos PHP devem usar somente a codificação UTF-8
	 * 
	 */
		
	//Código abaixo considerado incorreto, pois não se deve declarar uma função e dar um echo acima.
	include "file.php";

	echo "string";

	function foo () {

	}

	/**
	 * Nomes de classes e namespaces devem ser declaradas em StudlyCaps, ou seja,
	 * Ao dar nome de uma classe a primeria letra deve ser maiúsculas
	 * 
	 * Constantes devem ser declaradas com letras maiúsculas e separadas com underscores_
	 * 
	 * Nomes de métodos devem ser declarados em camelCase
	 */
	
	class ClassName
	{
		const MY_CONSTANT = 0;

		public function FunctionName()
		{

		}
	}

?>