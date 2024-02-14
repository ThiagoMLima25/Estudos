#include "pch.h"
#include <iostream>

using namespace std;

void contador(int number, int count = 0);

int main()
{
	/**
	 * Funções recursivas são funções que chamam a sí mesma.
	 */
	contador(10);
	return 0;
}

void contador(int number, int count) {
	cout << count << endl;
	if (number > count) contador(number, ++count);
}