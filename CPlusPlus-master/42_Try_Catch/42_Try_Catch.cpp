#include "pch.h"
#include <iostream>
#include <vector>
#include <stdexcept>

using namespace std;

double divide(double n1, double n2);

int main()
{
	vector<int>number(5);
	double n1, n2;

	cin >> n1 >> n2;

	try {
		cout << divide(n1, n2) << endl;
	} catch (const char* e) {
		cout << e;
	}

	try {
		number.at(7) = 10;
	} catch (const exception& e) {
		cout << e.what() << endl;
	}

	return 0;	
}

double divide(double n1, double n2) {
	if (n2 == 0) {
		throw "Erro de divisao por zero.";
	}
	return n1 / n2;
}