#include "pch.h"
#include <iostream>
#include <string>

using namespace std;

/**
 * Introdução a Orientação a Objeto.
 */
class Airplan {
	public :
		int airplanVelocity = 0;
		int airplanMaxVelocity;
		string airplanType;

		void inicialization(int type);

	private:

};

void Airplan::inicialization(int type) {
	if (type == 1) {
		this->airplanMaxVelocity = 800;
		this->airplanType = "Jato";
	} else if (type == 2) {
		this->airplanMaxVelocity = 350;
		this->airplanType = "Monomotor";
	} else if (type == 3) {
		this->airplanMaxVelocity = 150;
		this->airplanType = "Planador";
	} else {
		cout << "tipo incorreto" << endl;
	}
}

int main()
{
	Airplan *objArplain = new Airplan();
	Airplan *objArplain2 = new Airplan();

	objArplain->inicialization(1);
	objArplain2->inicialization(2);

	cout << objArplain->airplanMaxVelocity << endl;
	cout << objArplain2->airplanMaxVelocity << endl;
}