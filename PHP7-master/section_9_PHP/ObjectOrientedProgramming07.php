<?php 
	/**
	 * Interface
	 * Pode ser utilizada para organizar o próprio código.
	 * Pois a interface define padrões a ser utilizados.
	 */
	Interface Veiculo
	{
		public function acelerar($velocidade);
		public function desacelerar($velocidade);
		public function trocarMarcha($marcha);
	}

	class Civic implements Veiculo
	{
		public function acelerar($velocidade) {
			echo "O veículo acelerou até ". $velocidade ."km/h";
		}

		public function desacelerar($velocidade) {
			echo "O veículo desacelerou para ". $velocidade ."km/h";
		}

		public function trocarMarcha($marcha) {
			echo "O veículo engatou para a marcha ". $marcha;
		}
	}

	$objCarro = new Civic();
	$objCarro->trocarMarcha(2);

?>