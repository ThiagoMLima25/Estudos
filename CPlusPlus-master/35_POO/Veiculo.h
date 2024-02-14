#pragma once
#include <string>

using namespace std;

/**
 * Aplicação de Setters e Getters
 */
class Veiculo
{
	public:
		int tipo;
		int velocidade;
		Veiculo(int tipo);
		int getVelMax();

		bool getLigado();
		void setLigado(int l);

	private:
		string nome;
		int velMax;
		bool ligado;
		void setVelMax(int vm);
};

//Setters e getters
bool Veiculo::getLigado() {
	return ligado;
}

void Veiculo::setLigado(int l) {
	if (l == 1) {
		ligado == true;
	} else if(l == 0) {
		ligado == false;
	}
}

int Veiculo::getVelMax() {
	return velMax;
}

void Veiculo::setVelMax(int vm) {
	velMax = vm;
}

//Construtor
Veiculo::Veiculo(int tipo) {
	if (tipo == 1) {
		nome = "Carro";
		setVelMax(200);
	} else if (tipo == 2) {
		nome = "Aviao";
		setVelMax(800);
	} else if (tipo == 3) {
		nome = "Navio";
		setVelMax(500);
	}
}