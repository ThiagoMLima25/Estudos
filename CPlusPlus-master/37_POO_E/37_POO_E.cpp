#include "pch.h"
#include <iostream>
#include "37_POO_E.h"

int main()
{
	BaseOne *objOne = new BaseOne();
	BaseTwo *objTwo = new BaseTwo();
	CFB *objCFB = new CFB();

	objOne->impBaseOne();
	objTwo->impBaseTwo();

	objCFB->impBaseOne();
	objCFB->impBaseTwo();
	return 0;
}