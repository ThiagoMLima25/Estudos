#include "pch.h"
#include <iostream>
#include <fstream>
#include <cstdlib>
#include <string>

using namespace std;

int main()
{
	fstream file;
	file.open("cursos.txt", ios::out);
	char opc = 's';
	string nome;
	string linha;

	while ((opc == 's') or (opc == 'S')) {
		cout << "Digite um nome: ";
		cin >> nome;
		file << nome << "\n";
		cout << "\nDigitar um novo nome? [s/n]";
		cin >> opc;
		system("CLS");
	}

	file.close();

	file.open("cursos.txt", ios::in);
	cout << "Nomes digitados " << endl;

	if (!file.is_open()) {
		cout << "Falha ao abrir arquivo" << endl;
		return 0;
	}

	while (getline(file, linha)) {
		cout << linha << endl;
	}
}