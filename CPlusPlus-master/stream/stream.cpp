#include "pch.h"
#include <iostream>
#include <iomanip>

using namespace std;

int main()
{
	/**
	 * Stream: é uma sequência de dados.
	 *
	 * Tipos:
	 * 1- Texto: Constituído por caracteres ASCII
	 * 2- Binários: Constituído por bytes
	 *
	 * << Operador de inserção
	 * >> Operador de extração
	 *
	 * cout - é o objeto de saída de fluxo, ou seja, o que será exibido no monitor.
	 * - Manipuladores: hex - formato de saída em hexadecimal
	 *					setw() - tamanho de um campo
	 *
	 * cin  - é o objeto de entrada de fluxo, ou seja, capturar o que é digitado no teclado.
	 */
	cout << "Estudando a entrada e saida de dados" << endl;
	cout << 10 + 50 << endl;
	
	cout << setw(5) << 1;
	cout << setw(5) << 20;
	cout << setw(5) << 300;
	cout << setw(5) << 4;
	cout << setw(5) << 513257;
	cout << setw(5) << 47856982;

	cout << endl;
	
	cout << hex << 10 + 50 << endl;
	cout << setw(3) << 10 + 50 << endl;
}