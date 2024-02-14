#include "pch.h"
#include <iostream>

using namespace std;

int main()
{
    /**
	 * Operadores relacionais
	 *	Tipo	|	Descrição
	 *   ==		|	Comparação
	 *   !=		|	Diferente
	 *   >		|	Maior
	 *   <		|	Menor
	 *   >=		|	Maior igual
	 *   <=		|	Menor igual
	 */
	bool a = true;
	bool b = 0;
	int c, d;
	
	c = 5;
	d = 10;
	
	cout << a << endl;
	cout << b << endl;

	if (a == b) cout << "valores iguais" << endl;
	if (a != b) cout << "valores diferentes" << endl;
	if (a > b) cout << "a maior que b" << endl;
	if (a < b) cout << "a menor que b" << endl;
	if (a >= b) cout << "a maior ou igual a b" << endl;
	if (a <= b) cout << "a menor ou igual a b" << endl;

	if (a) {
		cout << "O valor boolean de A é verdadeira." << endl;
	} else {
		cout << "O valor boolean de A é falsa." << endl;
	}
}