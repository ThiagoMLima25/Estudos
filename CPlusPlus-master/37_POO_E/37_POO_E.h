#pragma once

using namespace std;

/**
 * Aplicação de Herança Múltipla 
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