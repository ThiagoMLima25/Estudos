<?php 
	/**
	 * Classe usuários trata os dados da tabela tb_usuarios
	 */
	class User
	{
		private $_idUsuario;		
		private $_loginUsuario;		
		private $_senhaUsuario;		
		private $_dataCadastroUsuario;

		/**
		 * @var $idUsuario
		 */
		public function setIdUsuario($idUsuario) {
			$this->_idUsuario = $idUsuario;
		}

		/**
		 * @return idUsuario
		 */
		public function getIdUsuario() {
			return $this->_idUsuario;
		}

		/**
		 * @var $loginUsuario
		 */		
		public function setLoginUsuario($loginUsuario) {
			$this->_loginUsuario = $loginUsuario;
		}

		/**
		 * @return loginUsuario
		 */
		public function getLoginUsuario() {
			return $this->_loginUsuario;
		}

		/**
		 * @var $senhaUsuario
		 */	
		public function setSenhaUsuario($senhaUsuario) {
			$this->_senhaUsuario = $senhaUsuario;
		}

		/**
		 * @return senhaUsuario
		 */
		public function getSenhaUsuario() {
			return $this->_senhaUsuario;
		}

		/**
		 * @var $dataCadastroUsuario
		 */
		public function setDataCadastroUsuario($dataCadastroUsuario) {
			$this->_dataCadastroUsuario = $dataCadastroUsuario;
		}

		/**
		 * @return dataCadastroUsuario
		 */
		public function getDataCadastroUsuario() {
			return $this->_dataCadastroUsuario;
		}

		public function findByIdUsuario($id) {
			$sql = new Sql();
			$result = $sql->select("SELECT * FROM tb_usuarios WHERE idUsuario = :ID", [":ID" => $id]);

			if(count($result) > 0) {
				$this->setData($result[0]);
			}
		}

		public static function getUserList() {
			$sql = new Sql();
			return $sql->select("SELECT * FROM tb_usuarios");
		}

		public static function getUserLogin($login) {
			$sql = new Sql();
			return $sql->select("SELECT * FROM tb_usuarios WHERE loginUsuario LIKE :LOGIN ", [":LOGIN"=>"%".$login."%"]);
		}

		public function login($login, $password) {
			$sql = new Sql();
			$result = $sql->select("SELECT * FROM tb_usuarios WHERE loginUsuario = :LOGIN AND senhaUsuario = :PASSWORD", [":LOGIN" => $login, ":PASSWORD" => $password]);

			if(count($result) > 0) {
				$this->setData($result[0]);
			}else {
				throw new Exception("Login e/ou senha inválidos", 1);
			}
		}

		public function setData($data) {
			$this->setIdUsuario($data["idUsuario"]);
			$this->setLoginUsuario($data["loginUsuario"]);
			$this->setSenhaUsuario($data["senhaUsuario"]);
			$this->setDataCadastroUsuario(new DateTime($data["dataCadastroUsuario"]));
		}

		//procedure SQL utiliza a palavra CALL no SQL SERVER EXECUTE
		public function insert() {
			$sql = new Sql();
			$result = $sql->select("CALL sp_usuarios_insert(:LOGIN, :PASSWORD)", [":LOGIN"=>$this->getLoginUsuario(), ":PASSWORD"=>$this->getSenhaUsuario()]);

			if(count($result) > 0) {
				$this->setData($result[0]);
			}
		}

		public function update($login, $password) {
			$this->setLoginUsuario($login);
			$this->setSenhaUsuario($password);

			$sql = new Sql();
			$sql->query("UPDATE tb_usuarios SET loginUsuario = :LOGIN, senhaUsuario = :PASSWORD WHERE idUsuario = :ID", [":LOGIN"=>$this->getLoginUsuario(), ":PASSWORD"=>$this->getSenhaUsuario(), ":ID"=>$this->getIdUsuario()]);
		}

		public function delete() {
			$sql = new Sql();
			$sql->query("DELETE FROM tb_usuarios WHERE idUsuario = :ID", [":ID"=>$this->getIdUsuario()]);

			$this->setIdUsuario(0);
			$this->setLoginUsuario("");
			$this->setSenhaUsuario("");
			$this->setDataCadastroUsuario(new DateTime());
		}

		public function __construct($login = "", $password = "") {
			$this->setLoginUsuario($login);
			$this->setSenhaUsuario($password);
		}

		public function __toString() {
			return json_encode([
				"idUsuario"				=>	$this->getIdUsuario(),
				"loginUsuario"			=>	$this->getLoginUsuario(),
				"senhaUsuario"			=>	$this->getSenhaUsuario(),
				"dataCadastroUsuario"	=>	$this->getDataCadastroUsuario()
			]);
		}
	}
?>