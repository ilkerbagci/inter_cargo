<?php
	class DB {
		private $servername = "localhost";
		private $username = "root";
		private $password = "";
		private $dbname = "international_cargo";
		private $connection;
		
		function __construct() {
			$this->connection = new mysqli(
			$this->servername, 
			$this->username, 
			$this->password, 
			$this->dbname
			);
			
			if ($this->connection->connect_error) {
				die("Bağlantı hatası: " . $this->connection->connect_error);
			}
			
			$this->connection->set_charset("utf8");
		}
		
		function __destruct() {
			$this->connection->close();
		}
		
		public function getDataTable($query) {
			$result = $this->connection->query($query);
			return $result;
		}
		
		public function executeQuery($query) {
			return ($this->connection->query($query) === TRUE);
		}
		
		
		 
		 public function getDataTableNumber($query) 
		{
			$result = $this->connection->query($query);
			$temp=mysqli_num_rows($result); 
			return $temp; 
		}
	}
?>