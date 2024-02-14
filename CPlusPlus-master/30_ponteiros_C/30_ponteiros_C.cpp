#include "pch.h"
#include <iostream>
#include <string>

using namespace std;

void somar(float *var, float valor);
void inicializaVetor(float *vetor);

int main()
{
	float number = 0;
	float vetor[5];
	
	somar(&number, 15);
	cout << number << endl;

	//Quando é vetor não é necessário indicar o endereço
	inicializaVetor(vetor);

	for (int i = 0; i < 5; i++)
	{
		cout << vetor[i] << endl;
	}

	return 0;
}

void somar(float *var, float valor) {
	*var += valor;
}

void inicializaVetor(float *vetor) {
	vetor[0] = 1;
	vetor[1] = 2;
	vetor[2] = 3;
	vetor[3] = 4;
	vetor[4] = 5;
}