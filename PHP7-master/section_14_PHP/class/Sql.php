<?php 
	/**
	 * classe SQL trata comandos relacionados ao banco de dados
	 */
	class Sql extends PDO
	{
		private $connection;

		public function __construct() {
			$this->connection = new PDO("mysql:host=localhost;dbname=dbphp7", "root", "");
		}

		/**
		 * @var $rawQuery
		 * @var $parameters
		 */
		public function query($rawQuery, $parameters = []) {
			$statement = $this->connection->prepare($rawQuery);

			$this->setParams($statement, $parameters);

			$statement->execute();
			
			return $statement;
		}	

		/**
		 * @var $statement
		 * @var $parameters
		 */
		private function setParams($statement, $parameters = []) {
			foreach ($parameters as $key => $itemsParameters) {
				$this->setParam($statement, $key, $itemsParameters);
			}
		}

		/**
		 * @var $statement
		 * @var $key
		 * @var $parameter
		 */
		private function setParam($statement, $key, $parameter) {
			$statement->bindParam($key, $parameter);
		}

		/**
		 * @var $rawQuery
		 * @var $parameters
		 */
		public function select($rawQuery, $parameters = []):array {
			$statement = $this->query($rawQuery, $parameters);

			return $statement->fetchAll(PDO::FETCH_ASSOC);
		}
	}
?>