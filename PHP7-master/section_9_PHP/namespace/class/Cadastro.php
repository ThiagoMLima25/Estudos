<?php 
	/**
	 * Possui métodos que tratam cadastros de usuários
	 */
	class Cadastro
	{
		private $_nome;
		private $_email;
		private $_senha;

		public function getNome():string {
			return $this->_nome;
		}

		public function setNome($nome):string {
			return $this->_nome = $nome;
		}

		public function getEmail():string {
			return $this->_email;
		}

		public function setEmail($email):string {
			return $this->_email = $email;
		}

		public function getSenha():string {
			return $this->_senha;
		}

		public function setSenha($senha):string {
			return $this->_senha = $senha;
		}

		public function __toString() {
			return json_encode([
				"nome"	=> $this->getNome(),
				"email"	=> $this->getEmail(),
				"senha"	=> $this->getSenha()
			]);
		}
	}
?>