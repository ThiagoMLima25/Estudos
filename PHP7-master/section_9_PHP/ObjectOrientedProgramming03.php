<?php
	/**
	 * Método estático
	 * Não é necessário criar um objeto para instaciar métodos estáticos.
	 */
	class Documento 
	{
		private $numero;

		public function getNumero() {
			return $this->_numero;
		}

		public function setNumero($numero) {
			$resultado = Documento::validarCpf($numero);

			if(!$resultado) {
				throw new Exception("CPF inválido.", 1);
			}

			return $this->_numero = $numero;
		}

		public static function validarCpf($cpf):bool {
			//Verifica se o número foi informado
			if(empty($cpf)) {
		        return false;
		    }
		 	
		 	//Elimina possivel mascara
		    $cpf = preg_match('/[0-9]/', $cpf) ? $cpf : 0;
		    $cpf = str_pad($cpf, 11, '0', STR_PAD_LEFT);
		     
		    //Verifica se o número informado é igual a 11
		    if (strlen($cpf) != 11) {
		        echo "length";
		        return false;
		    }

		    if ($cpf == '00000000000' || $cpf == '11111111111' ||
		    	$cpf == '22222222222' || $cpf == '33333333333' ||
		    	$cpf == '44444444444' || $cpf == '55555555555' ||
		    	$cpf == '66666666666' || $cpf == '77777777777' ||
		    	$cpf == '88888888888' || $cpf == '99999999999') { 
		    	return false; 
		    } else {   
				//Calcula os digitos verificando se o CPF é valido.
		        for ($t = 9; $t < 11; $t++) {
		            for ($d = 0, $c = 0; $c < $t; $c++) {
		                $d += $cpf{$c} * (($t + 1) - $c);
		            }
		            $d = ((10 * $d) % 11) % 10;
		            if ($cpf{$c} != $d) {
		                return false;
		            }
		        }
		 
		        return true;
		    }
		}
	}

	$objDocumento = new Documento();
	$objDocumento->setNumero("42415956856");

	var_dump($objDocumento->getNumero());
?>