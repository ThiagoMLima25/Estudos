#include "pch.h"
#include <iostream>
#include <string> ﻿

using namespace std;

struct Carro
{
	string nome;
	string cor;
	int pot;
	int velMax;
	int vel;

	void add(string stNome, string stCor, int stPot, int stVelMax) {
		nome = stNome;
		cor = stCor;
		pot = stPot;
		velMax = stVelMax;
		vel = 0;
	}

	void show() {
		cout << "\nNome................:" << nome << "\n";
		cout << "Cor.................:" << cor << "\n";
		cout << "Potencia............:" << pot << "\n";
		cout << "Velocidade atual....:" << vel << "\n";
		cout << "Velocidade Máxima...:" << velMax << "\n";
	}

	void changeValeMax(int mv) {
		vel = mv;
		if (vel > velMax) vel = velMax;
		if (vel <= 0) vel = 0;
	}
};

int main()
{
	Carro *carros = new Carro[3];
	Carro car1, car2, car3;
	
	carros[0] = car1;
	carros[1] = car2;
	carros[2] = car3;

	carros[0].add("Tornardo", "Vermelho", 450, 350);
	carros[1].add("Luxo", "Preto", 250, 260);
	carros[2].add("Trabalho", "Branco", 80, 120);

	for (int i = 0; i <= 2; i++)
	{
		carros[i].show();
	}
	return 0;
}