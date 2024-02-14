#include "pch.h"
#include <iostream>
#include "Veiculo.h"

int main()
{
	Veiculo *v1 = new Veiculo(1);
	Veiculo *v2 = new Veiculo(3);
	Veiculo *v3 = new Veiculo(2);

	v1->setLigado(1);
	v2->setLigado(0);
	v3->setLigado(1);

	cout << v1->getVelMax() << endl;
	cout << v2->getVelMax() << endl;
	cout << v3->getVelMax() << endl;

	if (v1->getLigado()) {
		cout << "Veiculo 1 ligado" << endl;
	} else {
		cout << "Veiculo 1 desligado" << endl;
	}

	if (v2->getLigado()) {
		cout << "Veiculo 2 ligado" << endl;
	} else {
		cout << "Veiculo 2 desligado" << endl;
	}

	if (v3->getLigado()) {
		cout << "Veiculo 3 ligado" << endl;
	} else {
		cout << "Veiculo 3 desligado" << endl;
	}

	//cout << (v1->getLigado()) ? "Veiculo 1 ligado" : "Veiculo desligado";
	//cout << (v2->getLigado()) ? "Veiculo 2 ligado" : "Veiculo desligado";
	//cout << (v3->getLigado()) ? "Veiculo 3 ligado" : "Veiculo desligado";

	return 0;
}