#include "pch.h"
#include <iostream>

using namespace std;

int main()
{
	setlocale(LC_ALL, "pt_BR.UTF-8");

	for (int i = 0; i < 10; i++) {
		cout << "O valor de i é igual: " << i << endl;
	}
}