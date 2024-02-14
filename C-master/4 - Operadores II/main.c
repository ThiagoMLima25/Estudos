#include <stdio.h>
#include <stdlib.h>

/**
*	-------	Tablea de Incremento e Decremento -------
		Operador	Equivalente 
		a++		   	 a = a + 1
		b--			 b = b - 1
*	-------	Tablea de Pré-Incremento e Pré-Decremento -------			
		Operador	Equivalente
		++a			a + 1 = a
		--b			b - b = a
*/

int main(int argc, char *argv[]) {
	int a = 0, b = 0, c = 0, d = 0;
	
	a++;	//a = 1
	
	b--;	//b = -1
	
	c = 1;	//c = 1
	
	c += a;	//c = c + a (c = 1 + 1)
	
	d -=c;	//d = d - c (d = 1 - 2)	
	
	printf(" a = %d\n b = %d\n c = %d\n d = %d\n",a,b,c,d);
	
	system("PAUSE");
	return 0;
}
