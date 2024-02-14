<?php
	namespace User;

	class Cadastro
	{
		public $nome;

		public function getNome() {
			return $this->_nome;
		}

		public function setNome($nome) {
			return $this->_nome = $nome;
		}

		public function novo()
		{
			echo "Usuário ". $this->nome ." foi salvo com sucesso.";
		}
	}
?>