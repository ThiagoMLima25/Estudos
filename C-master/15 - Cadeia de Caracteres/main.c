#include <stdio.h>
#include <stdlib.h>
#include <string.h>

/*
	Função de Cadeia		Descrição
	strcat(dest, orig)		Concatena cadeia origem no final de destino
	strncat(dest, orig, n)	Concatena cadeira origem no final de destino, usando no máximo n caracteres de origem
	strcmp(str1, str2)		Compara as duas cadeias. Retorna zero se iguais, menor que 0 se str1 < str2, maior que 0 se str1 > str2
	strcmpi(str1, str2)		Compara as duas cadeias sem levar em conta maiúisculas e minúsculas
	strlen(str)				Calcula o comprimento da cadeia sem o caractere nulo
	strlwr(str)				Converte cadeia para minúsculo
	strupr(str)				Converte cadeia para maiúsculo
	strcpy(str)				Copia cadeia origem para destino
*/
int main(int argc, char *argv[]) {
	char nome[51], sobrenome[51];
	int comp1, comp2;
	
	printf("Digite seu nome ");
	scanf("%s", &nome);
	comp1 = strlen(nome);
	getchar();
	
	printf("Digite seu sobrenome ");
	scanf("%s", &sobrenome);
	comp2 = strlen(sobrenome);
	getchar();
	
	strcat(nome, " ");
	strcat(nome, sobrenome);
	
	printf("\nOla %s\n", nome);
	printf("Seu nome tem %d caracteres e seu sobrenome tem %d caracteres", comp1, comp2);
	
	printf("\n");
	printf(strlwr(nome));
	printf("\n");
	
	strcpy(nome, "copia");
	printf(nome);
	printf("\n");	
	system("PAUSE");
	return 0;
}
