#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop */
/*
	int vetor[tamanho]
	int vetor[10]
	float vetor[5]
	char vetor[20]
*/

#define tamanho 5 
#define tam 2 

int main(int argc, char *argv[]) {
	int vetor[tamanho];
	unsigned i, numero;
	
	
	printf("Entrar com o numero inicial do vetor: ");
	scanf("%d", &numero);
	getchar();
	
	//Gerar o vetor
	for(i=0; i<tamanho; i++) vetor[i] = numero++;
	
	//Imprimir o vetor
	for(i=0; i<tamanho; i++) printf("Elemento %d = %d\n", i, vetor[i]);
	//vetor[0] = 3
		
	/*
		Dois vetores e imprimir o produto escalar de ambos
		vetor1 = 2, 3
		vetor2 = 4,8
		Produto = 2x4 + 3x8 = 8 + 24 = 32 
	*/	
	
	int v1[tam], v2[tam], x, produto = 0;
	
	printf("Entrar com o valor do vetor 1\n");
	for(x= 0; x<tam; x++){
		printf("Elemento %d ",x);
		scanf("%d", &v1[x]);
		getchar();
	}
	
	printf("Entrar com o valor do vetor 2\n");
	for(x= 0; x<tam; x++){
		printf("Elemento %d ",x);
		scanf("%d", &v2[x]);
		getchar();
	}
	
	for(x=0; x<tam; x++) produto += v1[x] * v2[x];
	
	printf("O produto escalar = %d ", produto);
	
	system("PAUSE");
	return 0;
}
