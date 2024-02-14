/* Biblioteca Padrão */
#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */

int main(int argc, char *argv[]) {
	int numero;
	
	//Apresenta a frase na tela
	printf("Ola Programador!\nPara todos os programadores.\n"); 
	printf("Digite um numero:");
	
	scanf("%d",&numero); //lê o que o user digitar
	getchar(); //Limpa o buffer do teclado
	
	printf("O numero digitado foi: %d\n\n", numero);
	
	//Envia informações direta ao sistema operacional.
	system("PAUSE");
	return 0;
}
