#include "pch.h"
#include <iostream>
#include <string>﻿

using namespace std;

int main()
{
	setlocale(LC_ALL, "pt_BR.UTF-8");

	int i = 0;

	cout << "Digite um numero: " << endl;
	cin >> i;

	string text = (i <= 10) ? "Menor que dez" : "Maior que dez";
	cout << "O valor digitado anteriormente é " << text << endl;
}