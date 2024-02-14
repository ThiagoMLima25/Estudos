#include "pch.h"
#include <iostream>
#include <string>

using namespace std;

int main()
{	
	/**
 	 * Ponteiro deve ser sempre do mesmo tipo da variável que o ponteiro aponta
	 * O ponteiro não guarda o valor de uma váriavel, ele aponta para os endereços da memória
	 */
	string veiculo = "Carro";
	string *pv;

	pv = &veiculo; //Ponteiro PV recebe endereço da variavel veiculo.

	cout << pv << endl;

	*pv = "Moto"; //No endereço apontado pelo ponteiro PV adiciona o valor Moto.

	cout << veiculo << " " << *pv << endl;

	return 0;
}