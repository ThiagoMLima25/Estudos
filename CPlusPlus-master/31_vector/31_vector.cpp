#include "pch.h"
#include <iostream>
#include <vector>

using namespace std;

int main()
{
	vector<int> number, number2;
	int tamanho, tamanho2;

	number.push_back(1);
	number.push_back(2);
	number.push_back(3);
	number.push_back(4);

	number2.push_back(5);
	number2.push_back(6);
	number2.push_back(7);
	number2.push_back(8);
	number2.push_back(9);
	number2.push_back(10);
	number2.push_back(11);

	//Insere elemento no array
	number.insert(number.begin(), 888);

	//Remove elemento do array
	number.erase(number.begin());
	
	number.insert(number.end(), 777);

	number.swap(number2);

	tamanho = number.size();
	tamanho2 = number2.size();

	cout << "Tamanho do vector number:" << tamanho << endl;
	cout << "Tamanho do vector number2:" << tamanho2 << endl;
	
	cout << endl;
	
	cout << "Primeiro valor do vector number:" << number.front() << endl;
	cout << "Ultimo valor do vector number:" << number.back() << endl;
	
	cout << endl;

	cout << "Valor do meio number:" << number.at(tamanho/2) << endl;

	for (int i = 0; i < tamanho; i++)
	{
		cout << number[i] << endl;
	}

	cout << endl;

	for (int i = 0; i < tamanho2; i++)
	{
		cout << number2[i] << endl;
	}

	while (!number.empty()) {
		number.pop_back();//Retira o último elemento
	}

	cout << endl;

	cout << "Novo tamanho de number " << number.size() << endl;

	return 0;
}