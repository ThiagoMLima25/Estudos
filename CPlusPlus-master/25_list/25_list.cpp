#include "pch.h"
#include <iostream>
#include <list>

using namespace std;

int main()
{
	list<int> aula, reforco;
	list<int>::iterator it;
	int tamanho;

	tamanho = 10;
	for (int i = 0; i < tamanho; i++) {
		aula.push_front(i);
	}

	it = aula.begin();
	advance(it, 3);

	//Inserir elemento
	aula.insert(it, 10);
	
	//Apaga elemento
	aula.erase(--it);
	
	reforco.push_front(50);
	reforco.push_front(70);
	aula.merge(reforco);
	cout << "tamanho da lista " << aula.size() << endl;

	//Remove todos elementos da lista
	aula.clear();
	cout << "tamanho da lista " << aula.size() << endl;

	//Ordena a lista
	aula.sort();

	//Inverte a lista
	aula.reverse();

	tamanho = aula.size();
	for (int i = 0; i < tamanho; i++) {
		cout << aula.front() << endl;
		aula.pop_front();
	}

	return 0;
}