#include "pch.h"
#include <iostream>

using namespace std;

/**
 * Alocação dinâmica de memória.
 */
int main()
{
	char *vnome;
	vnome = (char *) malloc(sizeof(char));
	fgets(vnome, sizeof(vnome), stdin);

	return 0;
}