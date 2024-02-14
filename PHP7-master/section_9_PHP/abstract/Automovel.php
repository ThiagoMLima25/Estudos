<?php 
	/**
	 * AutoLoad
	 */
	Interface Veiculo
	{
		public function acelerar($velocidade);
		public function desacelerar($velocidade);
		public function trocarMarcha($marcha);
	}

	/**
	 * Uma classe herda somente uma classe abstrata mas pode implementar diversas interfaces.
	 */
	abstract class Automovel implements Veiculo
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
?>