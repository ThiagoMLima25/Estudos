#include "pch.h"
#include <iostream>

using namespace std;

//É necessário prototipar as funções.
void exibe();
void soma(int a, int b);
void sub(int a, int b);
void mult(int a, int b = 2);

int main()
{
	int a = 5;
	int b = 15;

	exibe();
	soma(a, b);
	sub(a, b);
	mult(a);

	return 0;
}

void exibe()
{
	cout << "Thiago Martins de Lima" << endl;
}

void soma(int a, int b)
{
	cout << a + b << endl;
}

void sub(int a, int b)
{
	cout << a - b << endl;
}

void mult(int a, int b)
{
	cout << a * b << endl;
}