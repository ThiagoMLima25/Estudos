#include <stdio.h>
#include <stdlib.h>

/* run this program using the console pauser or add your own getch, system("pause") or input loop 
	Quando você chama um método pela linha de comando, você pode escrever os parâmetros na linha de comando que ele é convertido em um vetor de caracteres.
	O primeiro argumento é a quantidade de argumentos passados e o segundo é o ponteiro para esses valores
	Por exemplo, se você invocasse o arquivo objeto calculaHipotenusa 3 4, os valores 3 e 4 irão para o vetor args que pode ser usado dentro do programa
*/
void codifica();//Protótipo da função

int main(int argc, char *argv[]) {
	int x;
	
	for(x=0; x<=100; x++){
		if(x % 2) continue;
		
		printf("%d",x);
	}//end for
	
	printf("\nEntrar com as letras para codificar\n");
	printf("Digite $ para sair.\n");
	codifica();
	
	system("PAUSE");
}

void codifica(){
	char ok = 0, ch;
	
	while(!ok){
		ch = getche();
		if(ch == '$'){
			ok = 1;
			continue;
		}
		printf("%c",ch + 2);
	} 	
}
