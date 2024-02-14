#include "pch.h"
#include <iostream>
#include <stack>
#include <string>

using namespace std;

int main()
{
	/*
	 * Stacks são pilhas de elementos que trabalham de forma LIFO (Last In First Out)
	 */
	stack <string> cartas;

	if (cartas.empty()) {
		cout << "Pilha vazia" << endl;
	} else {
		cout << "Pilha com cartas" << endl;
	}

	//Adiciona elementos na pilha
	cartas.push("Rei de Copas");
	cartas.push("Rei de Espadas");
	cartas.push("Reis de Ouros");
	cartas.push("Reis de Paus");
	
	cout << "Tamanho da pilha " << cartas.size() << endl;
	cout << "Carta do topo " << cartas.top() << '\n';

	//Remove elemento que esta no topo.
	cartas.pop();

	cout << "Nova Carta do topo " << cartas.top() << '\n';

	return 0;
}