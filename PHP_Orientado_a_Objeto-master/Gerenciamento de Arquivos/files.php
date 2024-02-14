<?php
/*
	fopen() -> Essa função retorna um identificador do arquivo. Esse identificador deve ser armazenado em uma variável, pois será utilizado posteriormente nas funções de leitura, gravação e fechamento do arquivo.
	
	fwrite() -> Essa função recebe como argumentos o identificador de arquivo (obtido no processo de abertura) e uma string (conteúdo do arquivo). Retorna o número de caracteres gravados.
	
	fread() -> Essa função recebe como argumentos o identificador do arquivo (obtido no processo de abertura) e o tamanho do arquivo em bytes como segundo argumento. Retorna o conteúdo do arquivo, que deve ser armazenado em uma variável. Para obter o tamanho do arquivo, pode-se utilizar a função filesize() ou então o resultado que retornou da função de gravação, uma vez que a função fwrite(), como já vimos, retorna o número de caracteres gravados.

	fseek() -> Essa função recebe como argumentos o identificador de arquivo (obtido no processo de abertura) e a posição do arquivo em que deve começar a fazer a leitura (no exemplo abaixo, a posição 0 significa reposicionar o ponteiro no início do arquivo).
	
	fclose() -> Para finalizar o uso de um arquivo, deve-se fechá-lo, assim todas as alterações serão salvas. Não é necessário utilizar nenhum argumento além do próprio identificador do arquivo.

	✔ r : Somente leitura.
	✔ r+ : Leitura e gravação. Se o arquivo já existir, irá gravar no início do	arquivo.
	✔ w : Somente gravação. Se o arquivo já existir, irá apagar todo o conteúdo	prévio e se o arquivo não existir, ele será criado.
	✔ w+ : Gravação e Leitura. Se o arquivo já existir, irá apagar todo o conteúdo prévio. Caso o arquivo não exista, ele será criado.
	✔ a : Somente gravação. Caso o arquivo exista irá gravar no final do arquivo. Caso o arquivo não exista, ele será criado.
	✔ a+ : Gravação e leitura. Caso o arquivo exista irá gravar no final do arquivo. Caso o arquivo não exista, ele será criado.
*/

	$arquivo = "teste.txt";
	$conteudo = "Isto é um teste que estou desenvolvendo";

	$abertura = fopen("$arquivo","w+");
	$gravacao = fwrite($abertura, $conteudo);
	echo "Número de caracteres gravados: $gravacao";
	//Reposicionar o ponteiro no início do arquivo
	fseek($abertura, 0);
	$leitura = fread($abertura, filesize($arquivo));
	fclose ($abertura);
	echo "<br> Conteúdo do arquivo: $leitura";

	/*
		feof() -> Testa pelo fim de arquivo (eof) em um ponteiro de arquivo.
		fgets() -> Lê uma linha de um ponteiro de arquivo e retorna uma string. A leitura termina quando encontra fim de linha ou fim de arquivo.
	*/
?>