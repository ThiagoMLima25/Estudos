#include "pch.h"
#include <iostream>

using namespace std;

int main()
{
	/*
	 * Modificadores de tipo
	 * - Short
	 * - long
	 * - signed (+ ou -)
	 * - unsigned (sem sinal)
	 */
	int a = 0;			// 4 bytes
	short int b = 0;	// 2 bytes
	long int c = 0;		// 4 bytes

	int a2 = 0;
	signed int b2 = -10;
	unsigned int c2 = 10;

	char caractere = -127;
	unsigned char caractere2 = 254;

	cout << sizeof(a2) << " - " << a2 << endl;
	cout << sizeof(b2) << " - " << b2 << endl;
	cout << sizeof(c2) << " - " << c2 << endl;
	cout << sizeof(c2) << " - " << c2 << endl;
	cout << sizeof(caractere) << " - " << caractere << endl;
	cout << sizeof(caractere2) << " - " << caractere2 << endl;
}