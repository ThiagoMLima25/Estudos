#include "pch.h"
#include <iostream>
#include <string>

using namespace std;

int soma(int n1, int n2) {
	return n1 + n2;
}

auto sub(double n1, double n2)->double {
	return n1 - n2;
}

string canal() {
	return "C++";
}

void somador() {
	//static - sempre acessa o mesmo endereço de memória.
	static auto i = 0;
	i++;
	cout << i << endl;
}

int main()
{
	auto num = 10;
	auto nome = "Spider";
	auto valor = 10.2;

	auto resultado = soma(10, 5);
	auto resultado2 = canal();
	auto resultado3 = sub(2.4, 0.3);

	//Normalmente utilizado quando se necessita de um acesso rápido.
	register int cont;

	for (cont = 0; cont <= 10; cont++) {
		cout << cont << endl;
	}

	cout << resultado << endl;
	cout << resultado2 << endl;
	cout << resultado3 << endl;

	somador();
	somador();
	somador();
	somador();
	somador();

	return 0;
}