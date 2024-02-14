#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
//Criar um vetor e organizar os dados
//Os dados do vetor devem ser exibidos em forma crescente

#define size 5
#define false	0
#define true	1

int main(int argc, char *argv[]) {
	int vetor[size], i, change = false, final = size, store;
	
	printf("Entre com um vetor de %d elementos\n", size);
	for(i=0; i<size; i++){
		printf("Elemento %d ", i);
		scanf("%d",&vetor[i]);
		getchar();
	}
	
	do{
		change = false;
		for(i=0; i<final; i++){
			if(vetor[i]>vetor[i+1]){
				store = vetor[i];
				vetor[i] = vetor[i+1];
				vetor[i+1] = store;
				change = true;
			}
		}	
	}while(change);
	
	for(i=0; i<size; i++) printf("%d\n",vetor[i]);
	
	system("PAUSE");
	return 0;
}
