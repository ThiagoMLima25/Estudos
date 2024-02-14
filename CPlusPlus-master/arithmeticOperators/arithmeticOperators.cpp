#include "pch.h"
#include <iostream>

using namespace std;

int main()
{
	setlocale(LC_ALL, "pt_BR.UTF-8");
	
	/**
	 * Operadores aritméticos
	 * Operador	| Descrição		| Exemplo
	 *	  +		| Adição		| x + y = 10
	 *	  -		| Subtração		| x - y = 10
	 *	  *		| Multiplicação | x * y = 10
	 *	  /		| Divisão		| x / y = 10
	 */
	float x, y;
	x = 3;
	y = 7;

	cout << "A Soma entre x e y é " << x + y << endl;
	cout << "A Subtração entre x e y é " << x - y << endl;
	cout << "A Multiplicação entre x e y é " << x * y << endl;
	cout << "A Divisão entre x e y é " << x / y << endl;
}