#include "pch.h"
#include <iostream>
#include <queue>
#include <string>

using namespace std;

int main()
{
	/**
	 * Estrutura Queue/Fila são elementos que trabalham de forma FIFO (First In First Out)
	 */
	queue <string> cartas;

	if (cartas.empty()) {
		cout << "Pilha vazia" << endl;
	}
	else {
		cout << "Pilha com cartas" << endl;
	}

	//Adiciona elementos na pilha
	cartas.push("Rei de Copas");
	cartas.push("Rei de Espadas");
	cartas.push("Reis de Ouros");
	cartas.push("Reis de Paus");

	cout << "Tamanho da fila " << cartas.size() << endl;
	cout << "Primeira carta " << cartas.front() << '\n';
	cout << "Ultima carta " << cartas.back() << '\n';

	//Remove elemento que esta no topo.
	cartas.pop();

	cout << "Nova Carta do topo " << cartas.front() << '\n';
}