#include "pch.h"
#include <iostream>

using namespace std;

int main()
{
	setlocale(LC_ALL, "pt_BR.UTF-8");

	double notaA, notaB, notaC, notaD, soma;

	cout << "Digite o valor da primeira nota" << endl;
	cin >> notaA;

	cout << "Digite o valor da segunda nota" << endl;
	cin >> notaB;

	cout << "Digite o valor da terceira nota" << endl;
	cin >> notaC;

	cout << "Digite o valor da quarta nota" << endl;
	cin >> notaD;

	soma = notaA + notaB + notaC + notaA;
	soma = (soma / 4);

	cout << "Sua média final é " << soma << endl;

	if (soma >= 7) {
		cout << "Parabéns você está aprovado!" << endl;
	} else {
		cout << "Sinto muito mas você está reprovado. :(" << endl;
	}
}