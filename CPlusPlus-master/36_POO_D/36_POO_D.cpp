#include "pch.h"
#include <iostream>
#include "36_POO_D.h"

using namespace std;

int main()
{
	Moto *v1 = new Moto();
	//cout << v1->rodas << endl;
	cout << "Tipo de Veiculo: ";
	v1->getTipo();
	cout << endl;

	cout << "Velocidade Maxima: ";
	v1->getVelocidadeMaxima();
	cout << endl;

	cout << "Possui Armamento: ";
	v1->getArmamento();
	cout << endl;
	cout << endl;
	Tanque *v2 = new Tanque();
	cout << "Tipo de Veiculo: ";
	v2->getTipo();
	cout << endl;

	cout << "Velocidade Maxima: ";
	v2->getVelocidadeMaxima();
	cout << endl;

	cout << "Possui Armamento: ";
	v2->getArmamento();
	cout << endl;

	return 0;
}