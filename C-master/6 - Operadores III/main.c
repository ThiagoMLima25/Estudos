#include <stdio.h>
#include <stdlib.h>

int main(int argc, char *argv[]) {
	int i, x, valor, digitado;
	
	for(i = 0; i < 10; i++){
		printf("Linha %d\n", i);
	}
	
	for(i = 10; i >= 0; i--){
		printf("Linha %d\n", i);
	}
	
	for(i = 0; i < 20; i++){
		printf("Linha %d\n", x);
	}
	
	printf("\nDigite um valor entre 0 a 5: ");
	scanf("%d", &valor);
	getchar();
	
	switch(valor){
		case 0:
			printf("Valor digitado foi:%d \n", valor);
		break;
		case 1:
			printf("Valor digitado foi:%d \n", valor);
		break;
		case 2:
			printf("Valor digitado foi:%d \n", valor);
		break;
		case 3:
			printf("Valor digitado foi:%d \n", valor);
		break;
		case 4:
			printf("Valor digitado foi:%d \n", valor);
		break;
		case 5:
			printf("Valor digitado foi:%d \n", valor);
		break;
		default:
			printf("Valor Invalido\n");
	}
			
	system("pause");
	return 0;
}
