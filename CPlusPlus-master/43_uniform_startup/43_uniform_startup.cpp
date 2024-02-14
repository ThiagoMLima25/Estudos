#include "pch.h"
#include <iostream>
#include <vector>
#include <map>
#include <string>

using namespace std;

struct Pessoa 
{
	string nome;
	int idade;
};

class Veiculos
{
	public:
		int tipo;
		string nome;
};

int main()
{
	int number{ 10 };
	string name{ "Thiago" };
	vector<int>valores{ 1, 2, 3, 4 };
	map<string, string>capitais{{"SP", "Sao Paulo"}};
	int vetor[]{1,2,3,4,5,6,7};

	Pessoa p1{ "Thiago", 25 };
	Veiculos v1{ 1, "Carango" };

	cout << number << endl;
	cout << name << endl;

	for (vector<int>::iterator it = valores.begin(); it != valores.end(); ++it) {
		cout << *it << endl;
	}

	for (map<string, string>::iterator it = capitais.begin(); it != capitais.end(); ++it) {
		cout << it->first << " - " << it->second << endl;
	}

	cout << p1.nome << " - " << p1.idade << endl;
	cout << v1.tipo << " - " << v1.nome << endl;
	cout << vetor[3] << " - " << vetor[6] << endl;

	return 0;
}