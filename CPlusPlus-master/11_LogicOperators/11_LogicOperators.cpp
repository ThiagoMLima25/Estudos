#include "pch.h"
#include <iostream>

using namespace std;

int main()
{
	/**
 	 * Operadores Lógicos
	 * Tipos
	 *  && - AND
	 *  || - OR
	 *  !  - NOT
	 */
	int value;

	cout << "Digite um numero entre 50 e 70 :";
	cin >> value;

	if (value >= 50 && value <= 70) {
		cout << "Obrigado por inserir o valor correto." << endl;
	} else {
		cout << "O valor inserido esta incorreto." << endl;
	}
}