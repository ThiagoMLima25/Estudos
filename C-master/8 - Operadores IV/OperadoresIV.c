#include <stdio.h>
#include <stdlib.h>

//Prototipo da função
	void display();
	int leitura();
	void square();

int main(int argc, char *argv[]){
	int i, j, z;
	int valor;
	
	for(display(); valor = leitura(); display()){
	int x =	square(valor);
		printf("%d",x);
		printf("%d\n", number*number);
	}
	
	for(i = 0, j = 0; i+j <= 100; i++, j++){
		printf("%d\n", i+j);
	}
	printf("\n\n");
	for(z=0; z!=12;){
		printf("Digite o numero correto: ");
		scanf("%d",&z);
	}
	printf("\n\n");
	
}

void display(){
	printf("Digite zero para sair\n");
	printf("ou informe um valor inteiro para calcular o seu quadrado: \n");
}

int leitura(){
	int t; //Armazena valor digitado
	
	scanf("%d", &t);
	return t;
}

void square(int number){
//Imprime o quadrado do numero
}
