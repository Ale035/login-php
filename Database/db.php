<?php 

	class Database{
		private $servername;
		private $user;
		private $password;
		private $dbname;

		public function __construct(){
			$this->servername = 'localhost';
			$this->user = 'root';
			$this->password = '';
			$this->dbname = 'db_login_php';
		}

		public function connect(){
			$conn = new mysqli($this->servername, $this->user, $this->password, $this->dbname);
			return $conn;
		}

	}
?>