#pragma once

using namespace std;

/**
 * Aplica��o de Heran�a M�ltipla 
 */
class BaseOne
{
	public:
		void impBaseOne();
};

class BaseTwo
{
	public:
		void impBaseTwo();
};

void BaseOne::impBaseOne()
{
	cout << "Impressa classe BaseOne" << endl;
}

void BaseTwo::impBaseTwo()
{
	cout << "Impressa classe BaseTwo" << endl;
}

class CFB :public BaseOne, public BaseTwo {

};