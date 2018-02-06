<?php
	class ContatoDAO {

		private $serverName = "mysql.des.f1s.me";
		private $userName = "des";
		private $password = "des";
		private $conn;
		__construct(){
			$this->conn = new mysqli_connect($this->serverName, $this->userName, $this->password);
		}

		getContato(){
			$select = "SELECT * FROM contatos";
		}
	}

