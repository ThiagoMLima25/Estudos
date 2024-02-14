#include <stdio.h>
#include <stdlib.h>
#include <ctype.h>
#include <locale.h>

int main(int argc, char *argv[]) {
	setlocale(LC_ALL,"portuguese");
	
	char regiao, vendedor;
	
	printf("Regiões: Leste, Oeste e Norte\n");
	printf("Informe a primeira letra da região: ");

	//getche() - Semelheante ao método scanf	
	regiao = toupper(getche());	//Converte as letras em maiúsculas
	printf("\n");
	
	switch(regiao)
	{
		case 'L':
			printf("Vendedores: Ricardo, Jose e Mariana\n");
			printf("Informe a primeira letra do vendedor: ");
			vendedor = toupper(getche());
			printf("\n");
			
			switch(vendedor){
				case 'R':
					printf("Vendas: RS%d\n",5000);
					break;
					
				case 'J':
					printf("Vendas: RS%d\n",2000);
					break;
					
				case 'M':
					printf("Vendas: RS%d\n",3000);
					break;		
			}	
		break;
			
		case 'O':
			printf("Vendedores: Thiago, Pedro e Lucas\n");
			printf("Informe a primeira letra do vendedor: ");
			vendedor = toupper(getche());
			printf("\n");
			
			switch(vendedor){
				case 'T':
					printf("Vendas: RS%d\n",200);
					break;
					
				case 'P':
					printf("Vendas: RS%d\n",350);
					break;
					
				case 'L':
					printf("Vendas: RS%d\n",150);
					break;	
			}
		break;		
		
		case 'N':
			printf("Vendedores: Maria, Jenniffer e Lima\n");
			printf("Informe a primeira letra do vendedor: ");
			vendedor = toupper(getche());
			printf("\n");
			
			switch(vendedor){
				case 'M':
					printf("Vendas: RS%d\n",176);
					break;
					
				case 'J':
					printf("Vendas: RS%d\n",123);
					break;
					
				case 'L':
					printf("Vendas: RS%d\n",147);
					break;		
			}
		break;
	}
	
	system("PAUSE");
	return 0;
}
