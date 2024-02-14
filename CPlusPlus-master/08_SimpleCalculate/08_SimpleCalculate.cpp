#include "pch.h"
#include <iostream>
#include <iomanip>

using namespace std;

int main()
{
	setlocale(LC_ALL, "pt_BR.UTF-8");

	float x, y, sum, sub, multi, div;
	char valueSelected;

	cout << "Calculadora" << endl;
	cout << "Digite o primeiro valor: ";
	cin >> x;

	cout << "Digite o segundo valor: ";
	cin >> y;
	 
	cout << "\nOperações" << endl;
	cout << "Adição" << setw(12) << "->" << setw(3) << "+" << endl;
	cout << "Subtração" << setw(9) << "->" << setw(3) << "-" << endl;
	cout << "Multiplicação" << setw(5) << "->" << setw(3) << "*" << endl;
	cout << "Divisão" << setw(11) << "->" << setw(3) << "/" << endl;
	cout << "Módulo" << setw(12) << "->" << setw(3) << "%" << endl;

	cout << "\nDigite uma das operações Anteriores:";
	cin >> valueSelected;

	switch (valueSelected)
	{
		case '+':
			cout << "A soma dos valores é igual " << x + y;
				break;
		case '-':
			cout << "A subtração dos valores é igual " << x - y;
			break;
		case '*':
			cout << "A multiplicação dos valores é igual " << x * y;
			break;
		case '/':
			cout << "A divisão dos valores é igual " << x / y;
			break;
		case '%':
			cout << "O módulo da divisão dos valores é igual " << x / y;
			break;
		default:
			cout << "Valor incorreto.";
			break;
	}
	cout << endl;
}