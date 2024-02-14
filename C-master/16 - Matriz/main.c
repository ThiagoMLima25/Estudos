#include <stdio.h>
#include <stdlib.h>

#define DIML	3
#define DIMC	5

// tipo nome[dim1] [dim2] [dim3]... [dim N]

int main(int argc, char *argv[]) {
	int i, j; //variaveis de interação
	int matriz[DIML][DIMC];
	
	for(i=0; i<DIML; i++){
		for(j=0; j<DIMC; j++){
			printf("Digite o elemento da posicao %d %d: ", i, j);
			scanf("%d",&matriz[i][j]);
			getchar();			
		}
	}
	
	for(i=0; i<DIML; i++){
		for(j=0; j<DIMC; j++){
			printf("%4d", matriz[i][j]);
		}
		printf("\n");
	}	
	
	system("PAUSE");
	return 0;
}
