<?php 
	/**
	 * Herança
	 */
	class Documento
	{
		private $_number;

		public function getNumero() {
			return $this->_number;
		}

		public function setNumero($numero) {
			return $this->_number = $numero;
		}
	}

	class CPF extends Documento
	{
		public function validar():bool {
			$numero = $this->getNumero();
			return true;
		}
	}

	$objCPF = new CPF();
	$objCPF->setNumero("0123456789");
	var_dump($objCPF->validar());
	echo "<br>";
	var_dump($objCPF->getNumero());
?>