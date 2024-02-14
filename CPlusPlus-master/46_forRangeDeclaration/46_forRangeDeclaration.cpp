#include "pch.h"
#include <iostream>
#include <string> //Para utilizar o método strlen()

using namespace std;

int main()
{
	//string nome = "Thiago";
	const char* nome = "Thiago";

	int x[5]{ 10, 20, 30, 40, 50 };

	for (int i = 0; i < 5; i++) {
		cout << x[i] << endl;
	}

	for (auto y:x) {
		cout << y << endl;
	}

	cout << nome << endl;

	for (int l = 0; l < strlen(nome); l++) {
		cout << nome[l] << endl;
	}

	return 0;
}