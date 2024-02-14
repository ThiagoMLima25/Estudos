#include "pch.h"
#include <iostream>
#include <vector>

using namespace std;

int main()
{
	vector<int> contador;
	for (int i = 1; i <= 5; i++) contador.push_back(i);

	cout << "contador possui:";
	for (vector<int>::iterator it = contador.begin(); it != contador.end(); ++it) {
		cout << ' ' << *it;
	}

	return 0;
}