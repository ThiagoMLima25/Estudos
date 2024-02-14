#include "pch.h"
#include <iostream>

using namespace std;

int main()
{
	setlocale(LC_ALL, "pt_BR.UTF-8");

	/**
	 * Tabuada
	 */
	int numberSelected;
	int x = 0;

	cout << "Insira o número da tabuada que deseja exibir: ";
	cin >> numberSelected;

	for (int i = 0; i <= 10; i++) {
		cout << numberSelected << " x " << i << " = " << i * numberSelected << endl;
	}
}