#include "pch.h"
#include <iostream>

using namespace std;

//Variáveis Globais
#define PI 3.1415;
#define MYNAME cout << "Thiago Martins de Lima";

int main()
{
	setlocale(LC_ALL, "pt_BR.UTF-8");

	/**
	 * Características de uma variável
	 * 1 - Nome
	 * 2 - Tipo
	 * 3 - Tamanho
	 * 4 - Valor
	 *
	 * Tipos de dados primitivos
	 * Tipo				|	Nome
	 * Boolean			|	bool	0 - false, 1 - true
	 * Caractere		|	char	Armazena apenas um caractere
	 * Inteiro			|	int
	 * Ponto Flutuante	|	float
	 * Ponto Flutuante	|	double
	 * Sem Valor		|	void
	 * Textos Longos	|	wchar_t
	 */

	//Váriaveis Locais
	int firstNumber;
	int secondNumber;
	char c = 'T';
	double value = 2.20;

	firstNumber = 10;
	secondNumber = 500;

	/**
	 *	endl - Indica que a linha foi finalizada
	 */
	cout << "O valor da variavel firstNumber e " << firstNumber << endl;
	cout << "O valor da variavel secondNumber e " << secondNumber << endl;
	cout << "A soma dos valores de firstNumber + secondNumber e igual " << firstNumber + secondNumber << endl;
	cout << "O valor da variavel c e " << c << endl;
	cout << "O valor da variavel value e " << value << endl;
	cout << endl; //Saltando uma linha
	cout << "Memória da variavel firstNumber " << sizeof(firstNumber) << "bytes" << endl;
	cout << "Memória da variavel secondNumber " << sizeof(secondNumber) << "bytes" << endl;
	cout << "Memória da variavel c " << sizeof(c) << "bytes" << endl;
	cout << "Memória da variavel value " << sizeof(value) << "bytes" << endl;

	MYNAME
	cout << endl;
	
	return 0;
}