<?php 
	/**
	 * Métodos mágicos
	 */
	class Address
	{
		private $_number;
		private $_city;
		private $_state;

		public function __construct($number, $city, $state) {
			$this->_number = $number;
			$this->_city = $city;
			$this->_state = $state;
		}

		//O método __toString() permite que uma classe decida como se comportar quando convertida para uma string.
		public function __toString() {
			return $this->_number ." - ". $this->_city .", ". $this->_state;
		}

		//O __destruct não libera as referencias automaticamente, neste método você terá que dizer como e o que deve ser liberado. Sendo o último método a ser executado.
		public function __destruct() {
			unset($this->_number);
			unset($this->_city);
			unset($this->_state);
		}
	}

	$objAddress = new Address("120", "Vegas", "United States");
	var_dump($objAddress);
	echo "<br><br>";
	// unset($objAddress);
	echo $objAddress; //Passando pelo método mágico __toString
?>