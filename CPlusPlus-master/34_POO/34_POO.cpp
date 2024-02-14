#include "pch.h"
#include <iostream>
#include "34_POO.h"

using namespace std;

int main()
{
	Airplan *av1 = new Airplan(3);
	Airplan *av2 = new Airplan(1);
	Airplan *av3 = new Airplan(2);

	av1->imprimir();
	av2->imprimir();
	av3->imprimir();
	return 0;
}