#include <stdio.h>
#include <stdlib.h>

int main(int argc, char *argv[]) {
	int opcao;
	int valor;
	
	printf("Conversor de Base Numerica \n");
	printf("1: Decimal para Hexadecimal\n");
	printf("2: Hexadecimal para Decimal\n");
	printf("\nInforme a opcao: ");
	scanf("%d", &opcao);
	getchar();
	
	if(opcao == 1){
		printf("\nInforme o valor em decimal: ");
		scanf("%d", &valor);
		getchar();
		
		printf("%d em hexadecimal e : %x", valor, valor);
	}else if(opcao == 2){
		printf("\nInforme o valor em hexadecimal: ");
		scanf("%x", &valor);
		getchar();
		
		printf("%x em hexadecimal e : %d", valor, valor);
	}else{
		printf("\nSua opcao nao e valida");
	}
	
	printf("\n\n");
	system("PAUSE");
	return 0;
}
