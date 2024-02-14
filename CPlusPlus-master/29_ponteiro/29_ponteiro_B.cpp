#include "pch.h"
#include <iostream>

using namespace std;

int main()
{
	int *p;	//int possui 4 bytes
	int vetor[10];

	p = &vetor[0];
	*p = 7;
	cout << "\n" << p << " " << *p << "\n";

	p = &vetor[1];
	*p = 14;
	cout << "\n" << p << " " << *p << "\n";

	*(p++);
	*p = 21;
	cout << "\n" << p << " " << *p << "\n";

	*(p++);
	*p = 28;
	cout << "\n" << p << " " << *p << "\n";

	return 0;
}