#include "pch.h"
#include <iostream>
#include <string> ﻿

using namespace std;

struct Pessoa {
	string nome;
	string sobrenome;
	int idade;
};

int main()
{	
	setlocale(LC_ALL, "pt_BR.UTF-8");

	Pessoa homem, mulher;
	homem.nome = "Thiago";
	homem.sobrenome = "Martins";
	homem.idade = 25;

	mulher.nome = "Larissa";
	mulher.sobrenome = "Pimentel";
	mulher.idade = 20;

	cout << "Olá o meu nome é " << homem.nome << " " << homem.sobrenome
		 << " e tenho " << homem.idade << " anos de idade." << endl;

	cout << "Olá o meu nome é " << mulher.nome << " " << mulher.sobrenome
		<< " e tenho " << mulher.idade << " anos de idade." << endl;
}