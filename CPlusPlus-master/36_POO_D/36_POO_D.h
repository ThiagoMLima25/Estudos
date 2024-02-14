#pragma once

using namespace std;
/**
 * Aplicação de Herança
 */
class Veiculo
{
	public:
		int velocidade;
		int blindagem;
		int rodas;

		void setTipo(int tipo);
		void getTipo();

		void setVelocidadeMaxima(int velocidade);
		void getVelocidadeMaxima();

		void setArmamento(bool armamento);
		void getArmamento();
	private:
		int _tipo;	//1 - Moto; 2 - Carro, 3 - Caminhao, 4 -Tanque
		int _velocidadeMaxima;
		bool _armamento;
};

/**
 * return tipo
 */
void Veiculo::getTipo()
{
	cout << this->_tipo;
}

void Veiculo::setTipo(int tipo)
{
	_tipo = tipo;
}

/**
 * return velocidadeMaxima
 */
void Veiculo::getVelocidadeMaxima()
{
	cout << this->_velocidadeMaxima;
}

void Veiculo::setVelocidadeMaxima(int velocidade)
{
	_velocidadeMaxima = velocidade;
}

/**
 * return armamento
 */
void Veiculo::getArmamento()
{
	cout << this->_armamento;
}

void Veiculo::setArmamento(bool armamento)
{
	_armamento = armamento;
}

class Moto:public Veiculo 
{
	public:
		Moto();
};

Moto::Moto() 
{
	velocidade = 0;
	blindagem = 0;
	rodas = 2;
	setTipo(1);
	setVelocidadeMaxima(120);
	setArmamento(false);
}

class Tanque:public Veiculo
{
	public:
		Tanque();
};

Tanque::Tanque()
{
	velocidade = 0;
	blindagem = 500;
	rodas = 8;
	setTipo(4);
	setVelocidadeMaxima(90);
	setArmamento(true);
}