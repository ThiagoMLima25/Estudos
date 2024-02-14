#include "pch.h"
#include <iostream>
#include <string>

using namespace std;

int main()
{
	setlocale(LC_ALL, "pt_BR.UTF-8");

	/**
	 * Array é uma estrutra de dados que permite manipulação de um número finito de elementos
	 */
	int number[5];
	double values[100] = {}; // Todos elementos do array são inicializadas com o valor zero.
	string text[4];

	number[0] = 10;
	number[1] = 20;
	number[2] = 30;
	number[3] = 40;
	number[4] = 50;

	values[50] = 5.55;

	cout << "Valor do array number na posição 4 possui o valor: " << number[4]
		 << "\nValor do array values na posição 50 possui o valor: " << values[50] << endl;

	text[0] = "Thiago";
	text[1] = "Martins";
	text[2] = "de";
	text[3] = "Lima";

	cout << text[0] << " " << text[1] << " " << text[2] << " " << text[3] << endl;
}