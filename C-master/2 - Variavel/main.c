#include <stdio.h>
#include <stdlib.h>

/**
*	----------------------- Váriaveis -----------------------
*	Tipos	Tamanho(bits)		Intervalo
*	char		8			   	-128 a 127		->2E8/256
*	int			16			  -32768 a 32767	->2E16/256
*	float		32			 3,4E-38 a 3,4E+38	->2E32/256
*	double		64			1,7E-308 a 1,7E+308	->2E64/256
*	void 		0				sem valor
*
*	------------ Modificadores dos Tipos de Váriaveis ------------
*		Tipos					Tamanho(bits)		Intervalo
*		char						8			   	-128 a 127
*	unsigned char					8			   	   0 a 255
*	signed char						8			   	-128 a 127
*		int						   16			  -32768 a 32767
*	unsigned int				   16				   0 a 65535
*	signed int					   16			  -32768 a 32767
*	short int					   16			  -32768 a 32767
*	unsigned short int			   16			  	   0 a 65535
*	signed short int			   16			  -32768 a 32767
*	long int					   32		 -2147483648 a 2147483647
*	signed long int				   32		 -2147483648 a 2147483647
*	unsigned long int			   32			 	   0 a 4294967295
*	float						   32			 3,4E-38 a 3,4E+38	
*	double						   64			1,7E-308 a 1,7E+308	
*	long double					   64			3,4E-4932 a 1,1E+4932
*	
*	--- Código de controle da função printf ---
*	código		significado
*	  %c		Exibe um caractere
*	  %d		Exibe um inteiro em formato decimal
*	  %i		Exibe um inteiro
*	  %e		Exibe um número em notação cientifica (com e minúsculo) 
*	  %E		Exibe um número em notação cientifica (com E maiúsculo)
*	  %f		Exibe um ponto flutuante em formato decimal
*	  %g		Usa %e ou %f, o que for menor
*	  %G		O mesmo que %g, só que ym E maiúsculo é usadi se o formato %e for escolhido
*	  %o		Exibe um número em notação octal 
*	  %s		Exibe uma string
*	  %u		Exibe um decimal sem sinal
*	  %x		Exibe um número em hexadecimal com letras minúsculas
*	  %X		Exibe um número em hexadecimal com letras maiúsculas
*	  %%		Exibe um sinal de %
*	  %p		Exibe um ponteiro
*	  
*/
int main(int argc, char *argv[]) {
	
	int number = 20;
	float numberFloat = 1.5;
	char caractere = 70; //Corresponde ao valor F da tabela ANSII
	
	printf("%d\n", number);
	// %.2 limita a quantidade de casa decimal 
	printf("%.2f\n", numberFloat);
	printf("%c\n", caractere);
	
	return 0;
}
