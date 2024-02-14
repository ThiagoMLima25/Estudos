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
			cout << "Velocidade Maxima...:" << velMax << "\n";
		}

		void changeValeMax(int mv) {
			vel = mv;
			if (vel > velMax) vel = velMax;
			if (vel <= 0) vel = 0;	
		}
	};

	int main() 
	{
		Carro car1, car2;
		car1.add("Ferrari", "Amarela", 250, 480);
		car2.add("Fusca", "Azul", 140, 220);

		car1.show();
		car2.show();
		car2.changeValeMax(300);
		car2.show();

		return 0;
	}