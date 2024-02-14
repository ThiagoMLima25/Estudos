#include "pch.h"
#include <iostream>
#include <fstream>
#include <string> //Para utilizar o método getline()

using namespace std;

int main()
{
	/**
	 *	ofstream - Arquivo do tipo saída
	 *  ifstream - Arquivo do tipo entrada
	 *  fstream	 - Arquivo do tipo entrada e saída.
	 *
	 * ios::app - Posicionar o cursor ao final do texto.
	 */
	ofstream outputFile;
	outputFile.open("texto_base.txt", ios::app);
	outputFile << "C++\n";
	outputFile << "Curso";
	outputFile.close();
	
	ifstream inputFile;
	string linha;
	inputFile.open("texto_base.txt");

	if (!inputFile.is_open()) {
		cout << "Nao foi possivel abrir o arquivo" << endl;
		return 0;
	}

	while (getline(inputFile, linha)) {
		cout << linha << endl;
	}

	inputFile.close();

	return 0;
}