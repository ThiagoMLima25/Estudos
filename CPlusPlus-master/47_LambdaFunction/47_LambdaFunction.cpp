#include "pch.h"
#include <iostream>
#include <vector>

using namespace std;

int main()
{
	/**
	 * Funções Lambdas
	 * [] - Captura de váriaveis
	 * () - Captura de parâmetros
	 * {} - Corpo da função
	 */

	int x1, x2, x3, x4;
	x1 = 2;
	x2 = 4;
	x3 = 6;
	x4 = 8;

	auto soma = [x1, x2, x3, x4]()->int {
		return x1 + x2 + x3 + x4;
	};

	auto maior = [](int n1, int n2)->int {
		return (n1 > n2) ? n1: n2;
	};

	auto maiorVector = [](vector<int>n)->int {
		auto higher = 0;

		for (int x : n) {
			higher = (higher > x) ? higher : x;
		}

		return higher;
	};

	cout << maior(2, 6) << endl;
	cout << maiorVector({9,6,5,47,2,1,0,25,25,66,54,23}) << endl;
	cout << soma() << endl;

	return 0;
}