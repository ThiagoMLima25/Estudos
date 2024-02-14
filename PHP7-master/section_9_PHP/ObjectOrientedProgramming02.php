<?php
	/**
	 * Setters e Getters
	 */
	class Carros
	{
		private $_modelo;
		private $_motor;
		private $_ano;

		public function getModelo() {
			return $this->_modelo;
		}

		public function setModelo($modelo) {
			$this->_modelo = $modelo;
		}

		public function getMotor():float {
			return $this->_motor;
		}

		public function setMotor($motor) {
			$this->_motor = $motor;
		}

		public function getAno():int {
			return $this->_ano;
		}

		public function setAno($ano) {
			$this->_ano = $ano;
		}

		public function exibir() {
			return [
				"modelo" => $this->getModelo(),
				"motor" => $this->getMotor(),
				"ano" => $this->getAno(),
			];
		}
	}

	$objCarros = new Carros();
	$objCarros->setModelo("Gol");
	$objCarros->setMotor("1.5");
	$objCarros->setAno("2019");
	
	var_dump($objCarros->exibir());
?>