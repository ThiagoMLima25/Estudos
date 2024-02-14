#include "pch.h"
#include <iostream>

using namespace std;

int main()
{
	/**
	 * Operadores de Atribuição
	 * Operador	|| Exemplo
	 *    =		|| z = y 
	 *    +=	|| z += y é igual z = z + y
	 *    -=	|| z -= y é igual z = z - y
	 *    *=	|| z *= y é igual z = z * y
	 *    /=	|| z /= y é igual z = z / y
	 *    %=	|| z %= y é igual z = z % y
	 */
	int x = 10;
	x = x += 10;
	cout << x << endl;
}