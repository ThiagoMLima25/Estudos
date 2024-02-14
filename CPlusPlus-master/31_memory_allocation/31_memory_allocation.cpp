#include "pch.h"
#include <iostream>
#include <stdio.h>

using namespace std;

int main()
{
	char *vNome;

	vNome = (char *) malloc();
	//cin >> vNome;

	fgets(vNome, sizeof(vNome));
	cout << vNome;

	return 0;
}