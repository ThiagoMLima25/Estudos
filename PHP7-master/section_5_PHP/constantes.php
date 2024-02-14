<?php 
	define("SERVIDOR", "127.0.0.1");
	define("BANCO_DE_DADOS", ["127.0.0.2", "password", "test"]);

	//Todas as constantes de extensões do núcleo são definidas no PHP por padrão.
	echo SERVIDOR;
	echo "<br>";
	print_r(BANCO_DE_DADOS);
	echo "<br>";
	echo DIRECTORY_SEPARATOR;
	echo "<br>";
	echo PHP_MAJOR_VERSION;
	echo "<br>";
	echo PHP_MINOR_VERSION;
	echo "<br>";
	echo PHP_RELEASE_VERSION;
	echo "<br>";
	echo PHP_VERSION; //A versão atual do PHP
	echo "<br>";
	echo PHP_VERSION_ID;
	echo "<br>";
	echo PHP_EXTRA_VERSION;
	echo "<br>";
	echo PHP_ZTS;
	echo "<br>";
	echo PHP_DEBUG;
	echo "<br>";
	echo PHP_MAXPATHLEN; //O tamanho máximo do nome de um arquivo (incluindo seus diretórios)
	echo "<br>";
	echo PHP_OS; //O sistema operacional para o qual o PHP foi compilado.
	echo "<br>";
	echo PHP_OS_FAMILY; //A família do sistema operacional para o qual o PHP foi compilado.
	echo "<br>";
	echo PHP_SAPI; //O nome da Server API para esta compilação do PHP.
	echo "<br>";
	echo PHP_EOL; //O simbolo correto de 'Fim de linha' para esta plataforma. 
	echo "<br>";
	echo PHP_INT_MAX; //O maior inteiro suportado nesta compilação do PHP. 
	echo "<br>";
	echo PHP_INT_MIN; //O menor inteiro suportado nesta compilação do PHP. 
	echo "<br>";
	echo PHP_INT_SIZE; // tamanho de um inteiro em bytes nesta compilação do PHP. 
	echo "<br>";
	echo PHP_FLOAT_DIG; //Número de dígitos decimais que podem ser arredondados para um float e recuperados sem perda de precisão. 
	echo "<br>";
	echo PHP_FLOAT_EPSILON; //O menor número positivo representável x, tal que x + 1.0 != 1.0. 
	echo "<br>";
	echo PHP_FLOAT_MIN; //O menor número de ponto flutuante representável.
	echo "<br>";
	echo PHP_FLOAT_MAX; //O maior número de ponto flutuante representável.
	echo "<br>";
	echo DEFAULT_INCLUDE_PATH;
	echo "<br>";
	echo PEAR_INSTALL_DIR;
	echo "<br>";
	echo PEAR_EXTENSION_DIR;
	echo "<br>";
	echo PHP_EXTENSION_DIR;
	echo "<br>";
	echo PHP_PREFIX; //O valor configurado em "--prefix" na compilação do PHP.
	echo "<br>";
	echo PHP_BINDIR; //Especifica o caminho do binário do PHP utilizado na execução do script.
	echo "<br>";
	echo PHP_BINARY; //Especifica o caminho do binário do PHP utilizado na execução do script.
	echo "<br>";
	echo PHP_MANDIR; //Especifica onde as páginas do manual foram instaladas. 
	echo "<br>";
	echo PHP_LIBDIR;
	echo "<br>";
	echo PHP_DATADIR;
	echo "<br>";
	echo PHP_SYSCONFDIR;
	echo "<br>";
	echo PHP_LOCALSTATEDIR;
	echo "<br>";
	echo PHP_CONFIG_FILE_PATH;
	echo "<br>";
	echo PHP_CONFIG_FILE_SCAN_DIR;
	echo "<br>";
	echo PHP_SHLIB_SUFFIX; //O sufixo de bibliotecas compartilhadas da plataforma na qual o PHP foi compilado.
	echo "<br>";
	echo PHP_FD_SETSIZE ; //O número máximo de descritores de arquivos para as chamadas de sistema select.
	echo "<br>";
	echo E_ERROR; //Constante para relatório de erros
	echo "<br>";
	echo E_WARNING; //Constante para relatório de erros
	echo "<br>";
	echo E_PARSE; //Constante para relatório de erros
	echo "<br>";
	echo E_NOTICE; //Constante para relatório de erros
	echo "<br>";
	echo E_CORE_ERROR; //Constante para relatório de erros
	echo "<br>";
	echo E_CORE_WARNING; //Constante para relatório de erros
	echo "<br>";
	echo E_COMPILE_ERROR; //Constante para relatório de erros
	echo "<br>";
	echo E_COMPILE_WARNING; //Constante para relatório de erros
	echo "<br>";
	echo E_USER_ERROR; //Constante para relatório de erros
	echo "<br>";
	echo E_USER_WARNING; //Constante para relatório de erros
	echo "<br>";
	echo E_USER_NOTICE; //Constante para relatório de erros
	echo "<br>";
	echo E_RECOVERABLE_ERROR; //Constante para relatório de erros
	echo "<br>";
	echo E_DEPRECATED; //Constante para relatório de erros
	echo "<br>";
	echo E_USER_DEPRECATED; //Constante para relatório de erros
	echo "<br>";
	echo E_ALL ; //Constante para relatório de erros
	echo "<br>";
	echo E_STRICT; //Constante para relatório de erros
	echo "<br>";
	echo TRUE;
	echo "<br>";
	echo FALSE;
	echo "<br>";
	echo NULL;
?>