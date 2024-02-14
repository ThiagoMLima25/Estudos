#include "pch.h"
#include <iostream>

using namespace std;

int main()
{
	int number = 0;
	while (number < 100)
	{
		cout << number << endl;
		number += 1;
	}

	do {
		cout << "Do while example." << endl;
	} while (1 == 2);
}