#include <stdio.h>
#include <stdlib.h>

/**
*	----- Tabela da barra invertida -----
*	Código		Siginificado
*	\b			Retrocesso
*	\f			Alimentação de formulário
*	\n			Nova Linha
*	\r			Retorno de carro
*	\t			Tabulação horizontal
*	\"			Aspas
*	\'			Apostrofo
*	\0			Nulo
*	\\			Barra invertida
*	\v			Tabulação vertical
*	\a			Sinal Sonoro
*	\N			Constante octal
*	\xN			Constante Hexadecimal
*
*	----- Tabela de Operadores Aritiméticos -----
*	Código		Siginificado
*	  +				Soma
*	  -			  Subtração
*	  *			Multiplicação
*	  /			  Divisão
*	  %		Módulo da divisão (Resto)
*	  -		Sinal Negativo (Operador Unário)
*
*	----- Tabela de Operadores Relacionais -----
*	Código		Siginificado
*	  >				Maior
*	  >=		Maior Igual
*	  <				Menor
*	  <=		Menor Igual
*	  ==			Igual
*	  !=		  Diferente
*
*	----- Tabela de Operadores Lógicos -----
*	Operadores		Ação
*		&&		Operação AND
*		||		Operação OR
*		!		Operação NOT
*		<<		Shift Left
*		>>		Shift Right
*/

int main(int argc, char *argv[]) {
	char a = 1;
	char b = 2;
	char c = 3;
	char d = 1;
	
	printf("%d\n", 5 + 2);	// 7
	printf("%d\n", 4 - 2);	// 2
	printf("%d\n", 4 * 2);	// 8
	printf("%d\n", 2 / 2);	// 1
	printf("%d\n", 2 % 2);	// 0
	
	if(a > b && a < c){
		printf("Condicao 1 verdadeira.\n");
	}else if(a == d){
		printf("Condicao 2 verdadeira.\n");
	}else{
		printf("Nenhuma Condicao verdadeira.\n");
	}
	
	if(c >= b){
		printf("Condicao 3 verdadeira.\n");
	}
	
	system("PAUSE");
	return 0;
} 
