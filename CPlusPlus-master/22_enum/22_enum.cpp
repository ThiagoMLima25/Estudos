#include "pch.h"
#include <iostream>

using namespace std;

int main()
{	
	/**
	 * enum consiste em constantes do tipo int nomeadas.
	 */
	enum armas { fuzil = 100, revolver = 8, rifle = 12, escopeta = 1 };
	armas armaSelecionada;

	armaSelecionada = rifle;

	cout << armaSelecionada;

	return 0;
}