#include "pch.h"
#include <iostream>

using namespace std;

void show(); //Protótipo
int num{ 10 };
extern int valor;

int main()
{
	show();
	cout << valor << endl;
	return 0;
}