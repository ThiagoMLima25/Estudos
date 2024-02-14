#pragma once
#include <string>

using namespace std;

class Airplan {
	public :
		int vel = 0;
		int velMax;
		string tipo;
		Airplan(int tp);

		void imprimir() {
			cout << "Tipo:" << tipo << endl;
			cout << "Velocidade atual:" << vel << endl;
			cout << "Velocidade Maxima:" << velMax << endl;
		}
};

Airplan::Airplan(int tp) {
	if (tp == 1) {
		tipo = "Jato";
		velMax = 800;
	}
	else if (tp == 2) {
		tipo = "Monomotor";
		velMax = 350;
	}
	else if (tp == 3) {
		tipo = "Planador";
		velMax = 180;
	}
}